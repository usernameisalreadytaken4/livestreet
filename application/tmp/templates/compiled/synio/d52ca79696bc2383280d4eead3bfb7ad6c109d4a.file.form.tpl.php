<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:25:05
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\p-topic\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17413641565b3268e1a2e2d7-30452633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd52ca79696bc2383280d4eead3bfb7ad6c109d4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\p-topic\\form.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17413641565b3268e1a2e2d7-30452633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3268e1a459e0_16420350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3268e1a459e0_16420350')) {function content_5b3268e1a459e0_16420350($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('p-topic-form', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('type')),$_smarty_tpl);?>


<form method="post">
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'hidden.security-key'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'text','name'=>'type[name]','label'=>'Название'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'text','name'=>'type[name_many]','label'=>'Название во множественном числе'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'text','name'=>'type[code]','label'=>'Уникальный код/идентификатор'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'checkbox','name'=>'type[active]','label'=>'Активный'),$_smarty_tpl);?>


    <h5 class="h5">Дополнительные параметры:</h5>

    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'checkbox','name'=>'params[allow_poll]','label'=>'Разрешить добавлять опросы'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'checkbox','name'=>'params[allow_text]','label'=>'Разрешить стандартное поле с текстом'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'checkbox','name'=>'params[allow_tags]','label'=>'Разрешить стандартное поле с тегами'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'checkbox','name'=>'params[allow_preview]','label'=>'Разрешить добавлять превью изображение'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'text','name'=>'params[css_icon]','label'=>'CSS класс иконки','placeholder'=>'fa fa-file-text-o'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:button','name'=>'type_submit','text'=>((string)($_smarty_tpl->tpl_vars['type']->value ? $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['save'] : $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['add'])),'value'=>1,'mods'=>'primary'),$_smarty_tpl);?>

</form><?php }} ?>