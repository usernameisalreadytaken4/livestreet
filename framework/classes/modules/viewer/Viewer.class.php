<?php
/*
 * LiveStreet CMS
 * Copyright © 2013 OOO "ЛС-СОФТ"
 *
 * ------------------------------------------------------
 *
 * Official site: www.livestreetcms.com
 * Contact e-mail: office@livestreetcms.com
 *
 * GNU General Public License, version 2:
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * ------------------------------------------------------
 *
 * @link http://www.livestreetcms.com
 * @copyright 2013 OOO "ЛС-СОФТ"
 * @author Maxim Mzhelskiy <rus.engine@gmail.com>
 *
 */

require_once(Config::Get('path.framework.libs_vendor.server') . '/Smarty/libs/Smarty.class.php');
require_once(Config::Get('path.framework.libs_application.server') . '/SmartyLS/SmartyLS.class.php');

/**
 * Модуль обработки шаблонов используя шаблонизатор Smarty
 *
 * @package framework.modules
 * @since 1.0
 */
class ModuleViewer extends Module
{
    /**
     * Объект Smarty
     *
     * @var Smarty
     */
    protected $oSmarty;
    /**
     * Коллекция(массив) блоков
     *
     * @var array
     */
    protected $aBlocks = array();
    /**
     * Массив правил организации блоков
     *
     * @var array
     */
    protected $aBlockRules = array();
    /**
     * SEO ключевые слова страницы
     *
     * @var string
     */
    protected $sHtmlKeywords;
    /**
     * SEO описание страницы
     *
     * @var string
     */
    protected $sHtmlDescription;
    /**
     * Разделитель заголовка HTML страницы
     *
     * @var string
     */
    protected $sHtmlTitleSeparation = ' / ';
    /**
     * Список элементов/частей из которых строится заголовок страницы
     *
     * @var array
     */
    protected $aHtmlTitleParts = array();
    /**
     * Альтернативный адрес страницы по RSS
     *
     * @var array
     */
    protected $aHtmlRssAlternate = null;
    /**
     * Указание поисковику основного URL страницы, для борьбы с дублями
     *
     * @var string
     */
    protected $sHtmlCanonical;
    /**
     * Указание поисковику директив для индексирования страницы
     *
     * @var string
     */
    protected $sHtmlRobots = 'index,follow';
    /**
     * Html код для подключения js,css
     *
     * @var array
     */
    protected $aHtmlHeadFiles = array(
        'js'  => '',
        'css' => ''
    );
    /**
     * Переменные для отдачи при ajax запросе
     *
     * @var array
     */
    protected $aVarsAjax = array();
    /**
     * Переменные для загрузки в JS (используется ls.registry)
     *
     * @var array
     */
    protected $aVarsJs = array();
    /**
     * Определяет тип ответа при ajax запросе
     *
     * @var string
     */
    protected $sResponseAjax = null;
    /**
     * Отправляет специфичный для ответа header
     *
     * @var bool
     */
    protected $bResponseSpecificHeader = true;
    /**
     * Список меню для рендеринга
     *
     * @var array
     */
    protected $aMenu = array();
    /**
     * Скомпилированные меню
     *
     * @var array
     */
    protected $aMenuFetch = array();
    /**
     * Объект Open Graph
     *
     * @var ModuleViewer_EntityOpenGraph
     */
    protected $oOpenGraph = array();

    /**
     * Инициализация модуля
     *
     */
    public function Init($bLocal = false)
    {
        $this->Hook_Run('viewer_init_start', compact('bLocal'));
        /**
         * Load template config
         */
        if (!$bLocal) {
            if (file_exists($sFile = Config::Get('path.smarty.template') . '/settings/config/config.php')) {
                Config::LoadFromFile($sFile, false);
            }
        }
        /**
         * Разделитель заголовков страниц
         */
        $this->SetHtmlTitleSeparation(Config::Get('view.title_separator'));
        /**
         * Заголовок HTML страницы
         */
        $this->AddHtmlTitle(Config::Get('view.name'));
        /**
         * SEO ключевые слова страницы
         */
        $this->sHtmlKeywords = Config::Get('view.keywords');
        /**
         * SEO описание страницы
         */
        $this->sHtmlDescription = Config::Get('view.description');
        /**
         * Объект Open Graph
         */
        $this->oOpenGraph = Engine::GetEntity('ModuleViewer_EntityOpenGraph');

        /**
         * Создаём объект Smarty и устанавливаем необходимые параметры
         */
        $this->oSmarty = $this->CreateSmartyObject();
        $this->oSmarty->error_reporting = error_reporting() & ~E_NOTICE; // подавляем NOTICE ошибки - в этом вся прелесть смарти )
        $this->oSmarty->setTemplateDir(Config::Get('path.smarty.template'));
        $this->oSmarty->compile_check = Config::Get('smarty.compile_check');
        $this->oSmarty->force_compile = Config::Get('smarty.force_compile');
        /**
         * Для каждого скина устанавливаем свою директорию компиляции шаблонов
         */
        $sCompilePath = Config::Get('path.smarty.compiled') . '/' . Config::Get('view.skin');
        if (!is_dir($sCompilePath)) {
            @mkdir($sCompilePath, 0777, true);
        }
        $this->oSmarty->setCompileDir($sCompilePath);
        $this->oSmarty->addPluginsDir(Config::Get('path.smarty.plug'));
        $this->oSmarty->default_template_handler_func = array($this, 'SmartyDefaultTemplateHandler');
    }

    /**
     * Получает локальную копию модуля
     *
     * @return ModuleViewer
     */
    public function GetLocalViewer()
    {
        $sClass = $this->Plugin_GetDelegate('module', __CLASS__);

        $oViewerLocal = new $sClass(Engine::getInstance());
        $oViewerLocal->Init(true);
        $oViewerLocal->VarAssign();
        return $oViewerLocal;
    }

    /**
     * Выполняет загрузку необходимых (возможно даже системных :)) переменных в шаблон
     *
     */
    public function VarAssign()
    {
        $this->Hook_Run('viewer_init_assign');
        /**
         * Загружаем весь $_REQUEST, предварительно обработав его функцией func_htmlspecialchars()
         */
        $aRequest = $_REQUEST;
        func_htmlspecialchars($aRequest);
        $this->Assign("_aRequest", $aRequest);
        /**
         * Параметры стандартной сессии
         */
        $this->Assign("_sPhpSessionName", session_name());
        $this->Assign("_sPhpSessionId", session_id());
        /**
         * Short Engine aliases
         */
        $this->Assign("LS", LS::getInstance());
        /**
         * Загружаем объект доступа к конфигурации
         */
        $this->Assign("oConfig", Config::getInstance());
        /**
         * Загружаем роутинг с учетом правил rewrite
         */
        $aRouter = array();
        if ($aPages = Config::Get('router.page')) {
            foreach ($aPages as $sPage => $aAction) {
                $aRouter[$sPage] = Router::GetPath($sPage);
            }
        }

        $this->Assign("aRouter", $aRouter);
        /**
         * Загружаем в шаблон блоки
         */
        $this->Assign("aBlocks", $this->aBlocks);
        /**
         * Загружаем HTML заголовки
         */
        $this->Assign("sHtmlTitle", htmlspecialchars($this->GetHtmlTitle(Config::Get('view.title_sort_reverse'))));
        $this->Assign("sHtmlKeywords", htmlspecialchars($this->sHtmlKeywords));
        $this->Assign("sHtmlDescription", htmlspecialchars($this->sHtmlDescription));
        $this->Assign("aHtmlHeadFiles", $this->aHtmlHeadFiles);
        $this->Assign("aHtmlRssAlternate", $this->aHtmlRssAlternate);
        $this->Assign("sHtmlCanonical", func_urlspecialchars($this->sHtmlCanonical));
        $this->Assign("sHtmlRobots", $this->sHtmlRobots);
        /**
         * Загружаем список активных плагинов
         */
        $aPlugins = Engine::getInstance()->GetPlugins();
        $this->Assign("aPluginActive", array_fill_keys(array_keys($aPlugins), true));
        /**
         * Загружаем пути до шаблонов плагинов
         */
        $aTemplateWebPathPlugin = array();
        $aTemplatePathPlugin = array();
        foreach ($aPlugins as $k => $oPlugin) {
            $aTemplateWebPathPlugin[$k] = Plugin::GetTemplateWebPath(get_class($oPlugin));
            $aTemplatePathPlugin[$k] = Plugin::GetTemplatePath(get_class($oPlugin));
        }
        $this->Assign("aTemplateWebPathPlugin", $aTemplateWebPathPlugin);
        $this->Assign("aTemplatePathPlugin", $aTemplatePathPlugin);
        /**
         * Загружаем security-ключ
         */
        $this->Assign("LIVESTREET_SECURITY_KEY", $this->Security_GetSecurityKey());
        /**
         * Текстовки
         */
        $oModuleLang = Engine::getInstance()->GetModuleObject('Lang');
        $aLang =& $oModuleLang->GetLangMsgRef();
        $this->Assign('aLang', array(&$aLang), false, true);
    }

    /**
     * Загружаем содержимое menu-контейнеров
     */
    protected function MenuVarAssign()
    {
        $this->Assign("aMenuFetch", $this->aMenuFetch);
        $this->Assign("aMenuContainers", array_keys($this->aMenu));
    }

    /**
     * Выводит на экран(браузер) обработанный шаблон
     *
     * @param string $sTemplate Шаблон для вывода
     */
    public function Display($sTemplate)
    {
        if ($this->sResponseAjax) {
            $this->DisplayAjax($this->sResponseAjax);
        }
        /**
         * Если шаблон найден то выводим, иначе ошибка
         * Предварительно проверяем наличие делегата
         */
        if ($sTemplate) {
            $sTemplate = $this->Plugin_GetDelegate('template', $sTemplate);
            if ($this->TemplateExists($sTemplate)) {
                $this->oSmarty->display($sTemplate);
            } else {
                throw new Exception('Can not find the template: ' . $sTemplate);
            }
        }
    }

    /**
     * Возвращает объект Smarty
     *
     * @return Smarty
     */
    public function GetSmartyObject()
    {
        return $this->oSmarty;
    }

    /**
     * Создает и возвращает объект Smarty
     *
     * @return Smarty
     */
    public function CreateSmartyObject()
    {
        return new SmartyLS();
    }

    /**
     * Очищает кеш компиленных шаблонов
     */
    public function ClearCompiledTemplates()
    {
        $this->oSmarty->clearCompiledTemplate();
    }

    /**
     * Ответ на ajax запрос
     *
     * @param string $sType Варианты: json, jsonIframe, jsonp
     */
    public function DisplayAjax($sType = 'json')
    {
        /**
         * Загружаем статус ответа и сообщение
         */
        $bStateError = false;
        $sMsgTitle = '';
        $sMsg = '';
        $aMsgError = $this->Message_GetError();
        $aMsgNotice = $this->Message_GetNotice();
        if (count($aMsgError) > 0) {
            $bStateError = true;
            $sMsgTitle = $aMsgError[0]['title'];
            $sMsg = $aMsgError[0]['msg'];
        } elseif (count($aMsgNotice) > 0) {
            $sMsgTitle = $aMsgNotice[0]['title'];
            $sMsg = $aMsgNotice[0]['msg'];
        }
        $this->AssignAjax('sMsgTitle', $sMsgTitle);
        $this->AssignAjax('sMsg', $sMsg);
        $this->AssignAjax('bStateError', $bStateError);
        if ($sType == 'json') {
            if ($this->bResponseSpecificHeader and !headers_sent()) {
                header('Content-type: application/json');
            }
            echo json_encode($this->aVarsAjax);
        } elseif ($sType == 'jsonIframe') {
            // Оборачивает json в тег <textarea>, это не дает браузеру выполнить HTML, который вернул iframe
            if ($this->bResponseSpecificHeader and !headers_sent()) {
                header('Content-type: application/json');
            }
            /**
             * Избавляемся от бага, когда в возвращаемом тексте есть &quot;
             */
            echo '<textarea>' . htmlspecialchars(json_encode($this->aVarsAjax)) . '</textarea>';
        } elseif ($sType == 'jsonp') {
            if ($this->bResponseSpecificHeader and !headers_sent()) {
                header('Content-type: application/json');
            }
            $sCallbackName = getRequestStr('jsonpCallbackName') ? getRequestStr('jsonpCallbackName') : 'jsonpCallback';
            $sCallback = getRequestStr($sCallbackName);
            if (!preg_match('#^[a-z0-9\-\_]+$#i', $sCallback)) {
                $sCallback = 'callback';
            }
            echo $sCallback . '(' . json_encode($this->aVarsAjax) . ');';
        }
        exit();
    }

    /**
     * Возвращает тип отдачи контекта
     *
     * @return string
     */
    public function GetResponseAjax()
    {
        return $this->sResponseAjax;
    }

    /**
     * Устанавливает тип отдачи при ajax запросе, если null то выполняется обычный вывод шаблона в браузер
     *
     * @param string $sResponseAjax Тип ответа
     * @param bool $bResponseSpecificHeader Установливать специфичные тиру заголовки через header()
     * @param bool $bValidate Производить или нет валидацию формы через {@link Security::ValidateSendForm}
     */
    public function SetResponseAjax($sResponseAjax = 'json', $bResponseSpecificHeader = true, $bValidate = true)
    {
        // Для возможности кросс-доменных запросов
        if ($sResponseAjax != 'jsonp' && $bValidate) {
            $this->Security_ValidateSendForm();
        }
        $this->sResponseAjax = $sResponseAjax;
        $this->bResponseSpecificHeader = $bResponseSpecificHeader;
    }

    /**
     * Загружает переменную в шаблон
     *
     * @param string|array $mName Имя переменной в шаблоне или ассоциативный массив со списком параметров
     * @param mixed $mValue Значение переменной. $bByRef = true, то значение должно быть в виде массива array(&$mValue) для корректной работы передачи по ссылке
     * @param bool $bLocal Загружает переменную в локальную область видимости шаблонизатора (доступна только для конкретного шаблона)
     * @param bool $bByRef Загружает переменную по ссылке
     */
    public function Assign($mName, $mValue = null, $bLocal = false, $bByRef = false)
    {
        if ($bByRef and isset($mValue[0])) {
            $this->oSmarty->assignByRef($mName, $mValue[0]);
        } else {
            $this->oSmarty->assign($mName, $mValue, false, $bLocal);
        }
    }

    /**
     * Добавляет переменную к уже существующим в шаблоне
     * Значение переменной преобразуется к типу array
     *
     * @param      $mName    Имя переменной в шаблоне или ассоциативный массив со списком переменных
     * @param null $mValue Значение переменной
     * @param bool $bMerge Необходимость мержа (слияния) переменных
     */
    public function Append($mName, $mValue = null, $bMerge = false)
    {
        $this->oSmarty->append($mName, $mValue, $bMerge);
    }

    /**
     * Загружаем переменную в ajax ответ
     *
     * @param string|array $sName Имя переменной в шаблоне или ассоциативный массив со списком параметров
     * @param mixed $value Значение переменной
     */
    public function AssignAjax($sName, $value = null)
    {
        if (is_array($sName)) {
            foreach ($sName as $sKey => $mVal) {
                $this->aVarsAjax[$sKey] = $mVal;
            }
        } else {
            $this->aVarsAjax[$sName] = $value;
        }
    }

    /**
     * Загружаем переменную в JS
     *
     * @param      $sName
     * @param null $value
     */
    public function AssignJs($sName, $value = null)
    {
        if (is_array($sName)) {
            foreach ($sName as $sKey => $mVal) {
                $this->aVarsJs[$sKey] = $mVal;
            }
        } else {
            $this->aVarsJs[$sName] = $value;
        }
    }

    /**
     * Возвращает переменные JS
     *
     * @return array
     */
    public function GetVarsJs()
    {
        return $this->aVarsJs;
    }

    /**
     * Возвращает обработанный шаблон
     *
     * @param string $sTemplate Шаблон для рендеринга
     * @return string
     */
    public function Fetch($sTemplate)
    {
        /**
         * Проверяем наличие делегата
         */
        $sTemplate = $this->Plugin_GetDelegate('template', $sTemplate);
        return $this->oSmarty->fetch($sTemplate);
    }

    /**
     * Проверяет существование шаблона
     *
     * @param string $sTemplate Шаблон
     * @return bool
     */
    public function TemplateExists($sTemplate)
    {
        return $this->oSmarty->templateExists($sTemplate);
    }

    /**
     * Инициализируем параметры отображения блоков
     */
    protected function InitBlockParams()
    {
        if ($aRules = Config::Get('block')) {
            $this->aBlockRules = $aRules;
        }
    }

    /**
     * Добавляет блок для отображения
     *
     * @param string $sGroup Группа блоков
     * @param string $sName Название блока
     * Можно передать название блока, тогда для обработки данных блока будет вызван обработчик из /classes/blocks/, либо передать путь до шаблона, тогда будет выполнено обычное подключение шаблона
     * @param array $aParams Параметры блока, которые будут переданы обработчику блока
     * @param int $iPriority Приоритет, согласно которому сортируются блоки
     * @return bool
     */
    public function AddBlock($sGroup, $sName, $aParams = array(), $iPriority = 5)
    {
        /**
         * Если не указана директория шаблона, но указана приналежность к плагину,
         * то "вычисляем" правильную директорию
         */
        if (!isset($aParams['dir']) and isset($aParams['plugin'])) {
            $aParams['dir'] = Plugin::GetTemplatePath($aParams['plugin']);
        }
        /**
         * Если смогли определить тип блока то добавляем его
         */
        $sType = $this->DefineTypeBlock($sName, isset($aParams['plugin']) ? $aParams['plugin'] : null);
        if ($sType == 'undefined') {
            return false;
        }
        /**
         * Если тип "template" и есть параметр "dir", то получаем полный путь до шаблона
         */
        if ($sType == 'template' and isset($aParams['dir'])) {
            $sName = rtrim($aParams['dir'], '/') . '/' . ltrim($sName, '/');
        }
        /**
         * Проверяем на уникальность
         */
        if (isset($aParams['unique']) and $aParams['unique']) {
            if (isset($this->aBlocks[$sGroup])) {
                foreach ($this->aBlocks[$sGroup] as $aBlock) {
                    if ($aBlock['name'] == $sName) {
                        return true;
                    }
                }
            }
        }
        $this->aBlocks[$sGroup][] = array(
            'type'     => $sType,
            'name'     => $sName,
            'params'   => $aParams,
            'priority' => $iPriority,
        );
        return true;
    }

    /**
     * Добавляет список блоков
     *
     * @param string $sGroup Группа блоков
     * @param array $aBlocks Список названий блоков с параметрами
     * <pre>
     * $this->Viewer_AddBlocks('right',array('tags',array('block'=>'stream','priority'=>100)));
     * </pre>
     * @param bool $ClearBlocks Очищать или нет перед добавлением блоки в данной группе
     */
    public function AddBlocks($sGroup, $aBlocks, $ClearBlocks = true)
    {
        /**
         * Удаляем ранее добавленые блоки
         */
        if ($ClearBlocks) {
            $this->ClearBlocks($sGroup);
        }
        foreach ($aBlocks as $sBlock) {
            if (is_array($sBlock)) {
                $this->AddBlock(
                    $sGroup,
                    $sBlock['block'],
                    isset($sBlock['params']) ? $sBlock['params'] : array(),
                    isset($sBlock['priority']) ? $sBlock['priority'] : 5
                );
            } else {
                $this->AddBlock($sGroup, $sBlock);
            }
        }
    }

    /**
     * Удаляет блоки группы
     *
     * @param string $sGroup
     */
    public function ClearBlocks($sGroup)
    {
        $this->aBlocks[$sGroup] = array();
    }

    /**
     * Удаляет блоки всех групп
     *
     */
    public function ClearBlocksAll()
    {
        foreach ($this->aBlocks as $sGroup => $aBlock) {
            $this->aBlocks[$sGroup] = array();
        }
    }

    /**
     * Возвращает список блоков
     *
     * @param bool $bSort Выполнять или нет сортировку блоков
     * @return array
     */
    public function GetBlocks($bSort = false)
    {
        if ($bSort) {
            $this->SortBlocks();
        }
        return $this->aBlocks;
    }

    /**
     * Определяет тип блока
     *
     * @param string $sName Название блока
     * @param string|null $sPlugin код плагина, если блок принадлежит плагину
     * @return string ('block','template','undefined')
     */
    protected function DefineTypeBlock($sName, $sPlugin = null)
    {
        $sDir = $sPlugin ? Plugin::GetTemplatePath($sPlugin) : null;
        /**
         * Если ли обработчик блока?
         */
        $sClassBlock = ($sPlugin ? 'Plugin' . func_camelize($sPlugin) . '_' : '') . 'Block' . func_camelize($sName);
        if (class_exists($sClassBlock)) {
            return 'block';
        } elseif ($this->TemplateExists(is_null($sDir) ? $sName : rtrim($sDir, '/') . '/' . ltrim($sName, '/'))) {
            /**
             * Если найден шаблон по имени блока то считаем его простым шаблоном
             */
            return 'template';
        } else {
            /**
             * Считаем что тип не определен
             */
            throw new Exception('Can not find the block`s template: ' . $sName);
            return 'undefined';
        }
    }

    /**
     * Анализируем правила и наборы массивов
     * получаем окончательные списки блоков
     */
    protected function BuildBlocks()
    {
        $sAction = strtolower(Router::GetAction());
        $sEvent = strtolower(Router::GetActionEvent());
        $sEventName = strtolower(Router::GetActionEventName());
        foreach ($this->aBlockRules as $sName => $aRule) {
            $bUse = false;
            /**
             * Если в правиле не указан список блоков, нам такое не нужно
             */
            if (!array_key_exists('blocks', $aRule)) {
                continue;
            }
            /**
             * Если не задан action для исполнения и нет ни одного шаблона path,
             * или текущий не входит в перечисленные в правиле
             * то выбираем следующее правило
             */
            if (!array_key_exists('action', $aRule) && !array_key_exists('path', $aRule)) {
                continue;
            }
            if (isset($aRule['action'])) {
                if (in_array($sAction, (array)$aRule['action'])) {
                    $bUse = true;
                }
                if (array_key_exists($sAction, (array)$aRule['action'])) {
                    /**
                     * Если задан список event`ов и текущий в него не входит,
                     * переходи к следующему действию.
                     */
                    foreach ((array)$aRule['action'][$sAction] as $sEventPreg) {
                        if (substr($sEventPreg, 0, 1) == '/') {
                            /**
                             * Это регулярное выражение
                             */
                            if (preg_match($sEventPreg, $sEvent)) {
                                $bUse = true;
                                break;
                            }
                        } elseif (substr($sEventPreg, 0, 1) == '{') {
                            /**
                             * Это имя event'a (именованный евент, если его нет, то совпадает с именем метода евента в экшене)
                             */
                            if (trim($sEventPreg, '{}') == $sEventName) {
                                $bUse = true;
                                break;
                            }
                        } else {
                            /**
                             * Это название event`a
                             */
                            if ($sEvent == $sEventPreg) {
                                $bUse = true;
                                break;
                            }
                        }
                    }
                }
            }
            /**
             * Если не найдено совпадение по паре Action/Event,
             * переходим к поиску по regexp путей.
             */
            if (!$bUse && isset($aRule['path'])) {
                $sPath = rtrim(Router::GetPathWebCurrent(), "/");
                /**
                 * Проверяем последовательно каждый regexp
                 */
                foreach ((array)$aRule['path'] as $sRulePath) {
                    $sPattern = "~" . str_replace(array('/', '*'), array('\/', '[\w\-]+'), $sRulePath) . "~";
                    if (preg_match($sPattern, $sPath)) {
                        $bUse = true;
                        break 1;
                    }
                }

            }

            if ($bUse) {
                /**
                 * Если задан режим очистки блоков, сначала чистим старые блоки
                 */
                if (isset($aRule['clear'])) {
                    switch (true) {
                        /**
                         * Если установлен в true, значит очищаем все
                         */
                        case  ($aRule['clear'] === true):
                            $this->ClearBlocksAll();
                            break;

                        case is_string($aRule['clear']):
                            $this->ClearBlocks($aRule['clear']);
                            break;

                        case is_array($aRule['clear']):
                            foreach ($aRule['clear'] as $sGroup) {
                                $this->ClearBlocks($sGroup);
                            }
                            break;
                    }
                }
                /**
                 * Добавляем все блоки, указанные в параметре blocks
                 */
                foreach ($aRule['blocks'] as $sGroup => $aBlocks) {
                    foreach ((array)$aBlocks as $sName => $aParams) {
                        /**
                         * Если нужно пропустить блок
                         */
                        if ($aParams === false) {
                            continue;
                        }
                        /**
                         * Если название блока указывается в параметрах
                         */
                        if (is_int($sName)) {
                            if (is_array($aParams)) {
                                $sName = $aParams['block'];
                            }
                        }
                        /**
                         * Если $aParams не являются массивом, значит передано только имя блока
                         */
                        if (!is_array($aParams)) {
                            $this->AddBlock($sGroup, $aParams);
                        } else {
                            $this->AddBlock(
                                $sGroup, $sName,
                                isset($aParams['params']) ? $aParams['params'] : array(),
                                isset($aParams['priority']) ? $aParams['priority'] : 5
                            );
                        }
                    }
                }
            }
        }
    }

    /**
     * Вспомагательная функция для сортировки блоков по приоритетности
     *
     * @param  array $a
     * @param  array $b
     * @return int
     */
    protected function _SortBlocks($a, $b)
    {
        return ($a["priority"] - $b["priority"]);
    }

    /**
     * Сортируем блоки
     *
     */
    protected function SortBlocks()
    {
        /**
         * Сортируем блоки по приоритетности
         */
        foreach ($this->aBlocks as $sGroup => $aBlocks) {
            uasort($aBlocks, array($this, '_SortBlocks'));
            $this->aBlocks[$sGroup] = array_reverse($aBlocks);
        }
    }

    /**
     * Добавляет js файл в конец списка
     *
     * @param $sJs    Файл js
     * @param array $aParams Параметры, например, можно указать параметр 'name'=>'jquery.plugin.foo' для исключения повторного добавления файла с таким именем
     * @param bool $bReplace Заменять файл или нет
     * @return bool
     */
    public function AppendScript($sJs, $aParams = array(), $bReplace = false)
    {
        return $this->Asset_AddJs($sJs, $aParams, false, $bReplace);
    }

    /**
     * Добавляет js файл в начало списка
     *
     * @param $sJs    Файл js
     * @param array $aParams Параметры, например, можно указать параметр 'name'=>'jquery.plugin.foo' для исключения повторного добавления файла с таким именем
     * @param bool $bReplace Заменять файл или нет
     * @return bool
     */
    public function PrependScript($sJs, $aParams = array(), $bReplace = false)
    {
        return $this->Asset_AddJs($sJs, $aParams, true, $bReplace);
    }

    /**
     * Добавляет css файл в конец списка
     *
     * @param $sCss    Файл css стилей
     * @param array $aParams Параметры, например, можно указать параметр 'name'=>'blueprint' для исключения повторного добавления файла с таким именем
     * @param bool $bReplace Заменять файл или нет
     * @return bool
     */
    public function AppendStyle($sCss, $aParams = array(), $bReplace = false)
    {
        return $this->Asset_AddCss($sCss, $aParams, false, $bReplace);
    }

    /**
     * Добавляет css файл в начало списка
     *
     * @param $sCss    Файл css стилей
     * @param array $aParams Параметры, например, можно указать параметр 'name'=>'blueprint' для исключения повторного добавления файла с таким именем
     * @param bool $bReplace Заменять файл или нет
     * @return bool
     */
    public function PrependStyle($sCss, $aParams = array(), $bReplace = false)
    {
        return $this->Asset_AddCss($sCss, $aParams, true, $bReplace);
    }

    /**
     * Строит массив для подключения css и js,
     * преобразовывает их в строку для HTML
     *
     */
    protected function BuildHeadFiles()
    {
        $this->SetHtmlHeadFiles($this->Asset_BuildHeadItems());
    }

    /**
     * Устанавливает список файлов для вывода в хидере страницы
     *
     * @param array $aText Список файлов
     */
    public function SetHtmlHeadFiles($aText)
    {
        $this->aHtmlHeadFiles = $aText;
    }

    /**
     * Устанавливаем заголовок страницы(тег title)
     *
     * @param string|array $mText Заголовок
     */
    public function SetHtmlTitle($mText)
    {
        $this->aHtmlTitleParts = is_array($mText) ? $mText : array($mText);
    }

    /**
     * Добавляет часть заголовка страницы через разделитель
     *
     * @param string $sText Заголовок
     */
    public function AddHtmlTitle($sText)
    {
        $this->aHtmlTitleParts[] = $sText;
    }

    /**
     * Возвращает текущий заголовок страницы
     *
     * @param bool $bSortReverse Направаление сортировки частей заголовка
     *
     * @return string
     */
    public function GetHtmlTitle($bSortReverse = true)
    {
        $aParts = $this->aHtmlTitleParts;
        if ($bSortReverse) {
            $aParts = array_reverse($aParts);
        }
        return join($this->sHtmlTitleSeparation, $aParts);
    }

    /**
     * Возвращает разделитель заголовков страниц
     *
     * @return string
     */
    public function GetHtmlTitleSeparation()
    {
        return $this->sHtmlTitleSeparation;
    }

    /**
     * Устанавливает разделитель заголовков страниц
     *
     * @param $sSep
     */
    public function SetHtmlTitleSeparation($sSep)
    {
        $this->sHtmlTitleSeparation = $sSep;
    }

    /**
     * Устанавливает ключевые слова keywords
     *
     * @param string $sText Кейворды
     */
    public function SetHtmlKeywords($sText)
    {
        $this->sHtmlKeywords = $sText;
    }

    /**
     * Устанавливает описание страницы description
     *
     * @param string $sText Описание
     */
    public function SetHtmlDescription($sText)
    {
        $this->sHtmlDescription = $sText;
    }

    /**
     * Возвращает описание страницы description
     *
     * @return string
     */
    public function GetHtmlDescription()
    {
        return $this->sHtmlDescription;
    }

    /**
     * Устанавливает основной адрес страницы
     *
     * @param string $sUrl URL страницы
     * @param bool $bRewrite Перезаписывать URL, если он уже установлен
     */
    public function SetHtmlCanonical($sUrl, $bRewrite = false)
    {
        if (!$this->sHtmlCanonical or $bRewrite) {
            $this->sHtmlCanonical = $sUrl;
        }
    }

    /**
     * Устанавливает директивы индексирования для поисковика
     *
     * @param string $sText Поисковые директивы
     */
    public function SetHtmlRobots($sText)
    {
        $this->sHtmlRobots = $sText;
    }

    /**
     * Возвращает директивы индексирования для поисковика
     *
     * @return string
     */
    public function GetHtmlRobots()
    {
        return $this->sHtmlRobots;
    }

    /**
     * Устанавливает директивы запрета индексирования для поисковика
     *
     * @param bool $bNoIndex Запретить или разрешить индексирование
     */
    public function SetHtmlNoIndex($bNoIndex = true)
    {
        if ($bNoIndex) {
            $this->SetHtmlRobots('noindex,nofollow');
        } else {
            $this->SetHtmlRobots('index,follow');
        }
    }

    /**
     * Устанавливает альтернативный адрес страницы по RSS
     *
     * @param string $sUrl URL
     * @param string $sTitle Заголовок
     */
    public function SetHtmlRssAlternate($sUrl, $sTitle)
    {
        $this->aHtmlRssAlternate['title'] = htmlspecialchars($sTitle);
        $this->aHtmlRssAlternate['url'] = htmlspecialchars($sUrl);
    }

    /**
     * Формирует постраничный вывод
     *
     * @param int $iCount Общее количество элементов
     * @param int $iCurrentPage Текущая страница
     * @param int $iCountPerPage Количество элементов на одну страницу
     * @param int $iCountPageLine Количество ссылок на другие страницы
     * @param string $sBaseUrl Базовый URL, к нему будет добавлять постикс /pageN/  и GET параметры
     * @param array $aGetParamsList Список GET параметров, которые необходимо передавать при постраничном переходе
     * @return array
     */
    public function MakePaging(
        $iCount,
        $iCurrentPage,
        $iCountPerPage,
        $iCountPageLine,
        $sBaseUrl,
        $aGetParamsList = array()
    ) {
        if ($iCount == 0) {
            return false;
        }

        $iCountPage = ceil($iCount / $iCountPerPage);
        if (!preg_match("/^[1-9]\d*$/i", $iCurrentPage)) {
            $iCurrentPage = 1;
        }
        if ($iCurrentPage > $iCountPage) {
            $iCurrentPage = $iCountPage;
        }

        $aPagesLeft = array();
        $iTemp = $iCurrentPage - $iCountPageLine;
        $iTemp = $iTemp < 1 ? 1 : $iTemp;
        for ($i = $iTemp; $i < $iCurrentPage; $i++) {
            $aPagesLeft[] = $i;
        }

        $aPagesRight = array();
        for ($i = $iCurrentPage + 1; $i <= $iCurrentPage + $iCountPageLine and $i <= $iCountPage; $i++) {
            $aPagesRight[] = $i;
        }

        $iNextPage = $iCurrentPage < $iCountPage ? $iCurrentPage + 1 : false;
        $iPrevPage = $iCurrentPage > 1 ? $iCurrentPage - 1 : false;

        $sGetParams = '';
        if (is_string($aGetParamsList) or count($aGetParamsList)) {
            $sGetParams = '?' . (is_array($aGetParamsList) ? http_build_query($aGetParamsList, '',
                    '&') : $aGetParamsList);
        }
        $aPaging = array(
            'aPagesLeft'   => $aPagesLeft,
            'aPagesRight'  => $aPagesRight,
            'iCount'       => $iCount,
            'iCountPage'   => $iCountPage,
            'iCurrentPage' => $iCurrentPage,
            'iNextPage'    => $iNextPage,
            'iPrevPage'    => $iPrevPage,
            'sBaseUrl'     => rtrim(func_urlspecialchars($sBaseUrl), '/'),
            'sGetParams'   => $sGetParams,
        );
        /**
         * Избавляемся от дублирования страниц с page=1
         */
        if ($aPaging['iCurrentPage'] == 1) {
            $this->SetHtmlCanonical($aPaging['sBaseUrl'] . '/' . $aPaging['sGetParams']);
        } else {
            /**
             * Избавляемся от дублирования title страниц - добавляем "Страница N"
             */
            $this->AddHtmlTitle($this->Lang_Get('pagination.page_with_number',
                array('number' => $aPaging['iCurrentPage'])));
        }
        return $aPaging;
    }

    /**
     * Добавить меню в контейнер
     *
     * @param string $sContainer
     * @param string $sTemplate
     */
    public function AddMenu($sContainer, $sTemplate)
    {
        $this->aMenu[strtolower($sContainer)] = $sTemplate;
    }

    /**
     * Компилирует меню по контейнерам
     *
     */
    protected function BuildMenu()
    {
        foreach ($this->aMenu as $sContainer => $sTemplate) {
            $this->aMenuFetch[$sContainer] = $this->Fetch($sTemplate);
        }
    }

    /**
     * Возвращает текущий объект Open Graph
     *
     * @return ModuleViewer_EntityOpenGraph
     */
    public function GetOpenGraph()
    {
        return $this->oOpenGraph;
    }

    /**
     * Устанавливает значение параметра для объекта Open Graph
     *
     * @param $sName
     * @param $mValue
     */
    public function SetOpenGraphProperty($sName, $mValue)
    {
        $this->oOpenGraph->setProperty($sName, $mValue);
    }

    /**
     * Обработка поиска файла шаблона, если его не смог найти шаблонизатор Smarty
     *
     * @param string $sType Тип шаблона/ресурса
     * @param string $sName Имя шаблона - имя файла
     * @param string $sContent Возврат содержания шаблона при return true;
     * @param int $iTimestamp Возврат даты модификации шаблона при return true;
     * @param Smarty $oSmarty Объект Smarty
     * @return string|bool
     */
    public function SmartyDefaultTemplateHandler($sType, $sName, &$sContent, &$iTimestamp, $oSmarty)
    {
        /**
         * Название шаблона может содержать, как полный путь до файла шаблона, так и относительный любого из каталога в $oSmarty->getTemplateDir()
         * По дефолту каталоги такие: /templates/skin/[name]/ и /plugins/
         */
        /**
         * Задача: если это файл плагина для текущего шаблона, то смотрим этот же файл шаблона плагина в /default/
         */
        if (Config::Get('view.skin') != 'default') {
            // /root/plugins/[plugin name]/templates/skin/[skin name]/dir/test.tpl
            if (preg_match('@^' . preg_quote(Config::Get('path.application.plugins.server')) . '/([\w\-_]+)/frontend/skin/' . preg_quote(Config::Get('view.skin')) . '/@i',
                $sName, $aMatch)) {
                $sFile = str_replace($aMatch[0],
                    Config::Get('path.application.plugins.server') . '/' . $aMatch[1] . '/frontend/skin/default/',
                    $sName);
                if ($this->TemplateExists($sFile)) {
                    return $sFile;
                }
            }
            // [plugin name]/templates/skin/[skin name]/dir/test.tpl
            if (preg_match('@^([\w\-_]+)/frontend/skin/' . preg_quote(Config::Get('view.skin')) . '/@i', $sName,
                $aMatch)) {
                $sFile = Config::Get('path.application.plugins.server') . '/' . str_replace($aMatch[0],
                        $aMatch[1] . '/frontend/skin/default/', $sName);
                if ($this->TemplateExists($sFile)) {
                    return $sFile;
                }
            }
        }
        return false;
    }

    /**
     * Возвращает форматированную дату
     *
     * @param int|string|null $mDate
     * @param string $sFormat
     * @param array $aParams Список параметров
     * <pre>
     * array(
     *  'declination'   => 1,
     *  'now' => 60,   // Количество секунд, в течении которых событие имеет статус "Только что"
     *  'day' => 'day в H:i', // Указывает на необходимость замены "Сегодня", "Вчера", "Завтра".
     *                        // В указанном формате 'day' будет заменено на соответствующее значение.
     *  'minutes_back'  => 59, // Количество минут, в течении которых событие имеет статус "... минут назад"
     *  'hours_back'    => 23, // Количество часов, в течении которых событие имеет статус "... часов назад"
     *  'tz'    => 4, // Временная зона
     *  'notz'  => false, // Не учитывать зон
     * )
     * </pre>
     * @return bool|string
     */
    public function GetDateFormat($mDate = null, $sFormat = 'd F Y, H:i', $aParams = array())
    {
        $aParamsDefault = array(
            'declination'  => 1,
            'now'          => null,
            'day'          => null,
            'minutes_back' => null,
            'hours_back'   => null,
            'tz'           => null,
            'notz'         => false,
        );
        $aParams = array_merge($aParamsDefault, $aParams);

        /**
         * Текущая дата и сдвиг времени для пользователя
         */
        $iTz = false;
        if (!$aParams['notz']) {
            if ($aParams['tz']) {
                $iTz = $aParams['tz'];
            }
            if ($iTz === false) {
                try {
                    /**
                     * Хардкодная проверка на модуль user
                     */
                    if ($oUserCurrent = $this->User_GetUserCurrent() and $oUserCurrent->getSettingsTimezone()) {
                        $oNow = new DateTime(null, new DateTimeZone($oUserCurrent->getSettingsTimezone()));
                        $iTz = $oNow->getOffset() / 3600;
                    }
                } catch (Exception $e) {

                }
            }
        }
        if ($iTz !== false) {
            $iDiff = (date('I') + $iTz - (strtotime(date("Y-m-d H:i:s")) - strtotime(gmdate("Y-m-d H:i:s"))) / 3600) * 3600;
        } else {
            $iDiff = 0; // пользователю показываем время от зоны из основного конфига
        }
        $iNow = time() + $iDiff;
        /**
         * Определяем дату
         */
        if ($mDate) {
            $iDate = is_numeric($mDate) ? $mDate : strtotime($mDate);
        } else {
            $iDate = time();
        }
        $iDate += $iDiff;

        /**
         * Если указана необходимость выполнять проверку на NOW
         */
        if ($aParams['now']) {
            if ($iDate + $aParams['now'] > $iNow) {
                return $this->Lang_Get('date.now');
            }
        }
        /**
         * Если указана необходимость на проверку minutes back
         */
        if ($aParams['minutes_back']) {
            $iTimeDelta = round(($iNow - $iDate) / 60);
            if ($iTimeDelta < $aParams['minutes_back']) {
                return ($iTimeDelta != 0)
                    ? $this->Lang_Pluralize(
                        $iTimeDelta,
                        $this->Lang_Get('date.minutes_back', array('minutes' => $iTimeDelta))
                    )
                    : $this->Lang_Get('date.minutes_back_less');
            }
        }

        /**
         * Если указана необходимость на проверку hours back
         */
        if ($aParams['hours_back']) {
            $iTimeDelta = round(($iNow - $iDate) / (60 * 60));
            if ($iTimeDelta < $aParams['hours_back']) {
                return ($iTimeDelta != 0)
                    ? $this->Lang_Pluralize(
                        $iTimeDelta,
                        $this->Lang_Get('date.hours_back', array('hours' => $iTimeDelta))
                    )
                    : $this->Lang_Get('date.hours_back_less');
            }
        }
        /**
         * Если указана необходимость автоподстановки "Сегодня", "Вчера", "Завтра".
         */
        if ($aParams['day']) {
            switch (date('Y-m-d', $iDate)) {
                /**
                 * Если дата совпадает с сегодняшней
                 */
                case date('Y-m-d'):
                    $sDay = $this->Lang_Get('date.today_at');
                    break;
                /**
                 * Если дата совпадает со вчерашней
                 */
                case date('Y-m-d', mktime(0, 0, 0, date("m"), date("d") - 1, date("Y"))):
                    $sDay = $this->Lang_Get('date.yesterday_at');
                    break;
                /**
                 * Если дата совпадает с завтрашней
                 */
                case date('Y-m-d', mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"))):
                    $sDay = $this->Lang_Get('date.tomorrow_at');
                    break;

                default:
                    $sDay = null;
            }
            if ($sDay) {
                $sFormat = str_replace("day", preg_replace("#(\w{1})#", '\\\${1}', $sDay), $aParams['day']);
                return date($sFormat, $iDate);
            }
        }
        /**
         * Определяем нужное текстовое значение названия месяца
         */
        $aMonth = $this->Lang_Get('date.month_array');
        $iMonth = date("n", $iDate);
        $sMonth = isset($aMonth[$iMonth])
            ? $aMonth[$iMonth]
            : "";

        /**
         * Если не найден индекс склонения, берем склонене по умолчанию.
         * Если индекс по умолчанию также не определен, берем первое значение в массиве.
         */
        if (is_array($sMonth)) {
            $iDeclination = $aParams['declination'];
            $sMonth = isset($sMonth[$iDeclination])
                ? $sMonth[$iDeclination]
                : $sMonth[1];
        }

        $sFormat = preg_replace("~(?<!\\\\)F~U", preg_replace('~(\w{1})~u', '\\\${1}', $sMonth), $sFormat);
        return date($sFormat, $iDate);
    }

    /**
     * Загружаем переменные в шаблон при завершении модуля
     *
     */
    public function Shutdown()
    {
        $this->Hook_Run('viewer_shutdown');
        /**
         * Получаем настройки блоков из конфигов
         */
        $this->InitBlockParams();
        /**
         * Добавляем блоки по предзагруженным правилам из конфигов
         */
        $this->BuildBlocks();

        $this->SortBlocks();
        /**
         * Подключение компонентов (css/js)
         */
        $this->Component_LoadAll();
        /**
         * Добавляем JS и CSS по предписанным правилам
         */
        $this->BuildHeadFiles();
        $this->VarAssign();
        /**
         * Рендерим меню для шаблонов и передаем контейнеры в шаблон
         */
        $this->BuildMenu();
        $this->MenuVarAssign();
        /**
         * Через хук добавляем данные Open Graph
         */
        $_this = $this;
        $this->Hook_AddExecFunction('template_html_head_end', function () use ($_this) {
            return $_this->GetOpenGraph()->render();
        }, 10000);
    }
}
