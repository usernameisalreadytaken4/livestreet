<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 21:07:43
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\p-plugin\plugin-market.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18968709865b3280efe902f2-70613692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '462b5994b7486eb9ec3ff4ec99bb456f87fcad56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\p-plugin\\plugin-market.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18968709865b3280efe902f2-70613692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'user' => 0,
    'compatibleWithCurrentSitesLSVersion' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3280efed2986_65915874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3280efed2986_65915874')) {function content_5b3280efed2986_65915874($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_date_format')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.date_format.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-plugin', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('plugin','mods','classes','attributes')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." market", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['plugin']->value->getAlreadyInstalled()){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." installed", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['compatibleWithCurrentSitesLSVersion'] = new Smarty_variable($_smarty_tpl->tpl_vars['plugin']->value->getCompatibleWithCurrentSitesLSVersion(), null, 0);?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <img class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-image" src="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getAvatar();?>
">

    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-body">
        
        <h2 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title">
            <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getUrl();?>
?utm_source=site&utm_medium=install&utm_campaign=catalog"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->getTitle();?>
</a>
        </h2>

        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-main">
            
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-version">v<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getVersion();?>
</div>

            
            <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['plugin']->value->getUser(), null, 0);?>

            <span class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-author">
                от <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['profile'];?>
?utm_source=site&utm_medium=install&utm_campaign=catalog" target="_blank" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-author-name"><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</a>
            </span>
        </div>

        
        <?php echo smarty_function_component(array('_default_short'=>'admin:p-plugin','template'=>'star-rating','classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-rating",'rating'=>$_smarty_tpl->tpl_vars['plugin']->value->getMarkPercent(),'count'=>$_smarty_tpl->tpl_vars['plugin']->value->getCountMark()),$_smarty_tpl);?>


        
        <?php if (!$_smarty_tpl->tpl_vars['compatibleWithCurrentSitesLSVersion']->value){?>
            <?php echo smarty_function_component(array('_default_short'=>'admin:alert','mods'=>'error','text'=>'Не совместим с установленной версией движка'),$_smarty_tpl);?>

        <?php }?>

        
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-desc ls-text">
            <?php echo $_smarty_tpl->tpl_vars['plugin']->value->getDescriptionShort();?>

        </div>

        
        <ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info">
            <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item">
                Совместимость: <?php echo $_smarty_tpl->tpl_vars['plugin']->value->getCompatibleLSVersionsString();?>

            </li>

            <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item">
                Добавлен: <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['plugin']->value->getDateAdd(),'format'=>"j F Y"),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getDateUpdate()){?>
                    | Обновлен: <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['plugin']->value->getDateUpdate(),'format'=>"j F Y"),$_smarty_tpl);?>

                <?php }?>
            </li>

            
            <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getCountUse()){?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item">
                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getCost()){?>
                        <?php echo smarty_function_lang(array('_default_short'=>'plugin.admin.plugins.plugin.installed_count','count'=>$_smarty_tpl->tpl_vars['plugin']->value->getCountUse(),'plural'=>true),$_smarty_tpl);?>

                    <?php }else{ ?>
                        <?php echo smarty_function_lang(array('_default_short'=>'plugin.admin.plugins.plugin.downloaded_count','count'=>$_smarty_tpl->tpl_vars['plugin']->value->getCountUse(),'plural'=>true),$_smarty_tpl);?>

                    <?php }?>
                </li>
            <?php }?>
        </ul>
    </div>

    
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-actions">
        <?php if (!$_smarty_tpl->tpl_vars['plugin']->value->getAlreadyInstalled()&&$_smarty_tpl->tpl_vars['compatibleWithCurrentSitesLSVersion']->value){?>
            <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getCost()){?>
                <?php ob_start();?><?php echo round($_smarty_tpl->tpl_vars['plugin']->value->getCost());?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'admin:button','url'=>$_smarty_tpl->tpl_vars['plugin']->value->getUrlUse(),'mods'=>'primary','classes'=>'addon-price','text'=>"Купить за ".$_tmp1." ".((string)$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['install']['rubles'])),$_smarty_tpl);?>

            <?php }else{ ?>
                <?php echo smarty_function_component(array('_default_short'=>'admin:button','url'=>$_smarty_tpl->tpl_vars['plugin']->value->getUrlUse(),'mods'=>'primary','text'=>"Установить"),$_smarty_tpl);?>

            <?php }?>
        <?php }?>
    </div>
</div>
<?php }} ?>