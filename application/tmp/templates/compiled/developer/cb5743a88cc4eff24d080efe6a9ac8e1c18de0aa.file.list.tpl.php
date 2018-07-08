<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:52:56
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/admin/frontend/components/p-settings/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15881292105b34cc1818bad7-91585236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb5743a88cc4eff24d080efe6a9ac8e1c18de0aa' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/admin/frontend/components/p-settings/list.tpl',
      1 => 1529954541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15881292105b34cc1818bad7-91585236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sections' => 0,
    'sConfigName' => 0,
    'section' => 0,
    'formid' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc181d15a9_20181285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc181d15a9_20181285')) {function content_5b34cc181d15a9_20181285($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_json')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.json.php';
if (!is_callable('smarty_function_router')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('sections','formid')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['sections']->value){?>
    <script>
        ls.registry.set('settings.admin_save_form_ajax_use', <?php echo smarty_function_json(array('var'=>Config::Get('plugin.admin.settings.admin_save_form_ajax_use')),$_smarty_tpl);?>
);
    </script>

    <form action="<?php echo smarty_function_router(array('page'=>"admin/settings/save/".((string)$_smarty_tpl->tpl_vars['sConfigName']->value)),$_smarty_tpl);?>
" method="post" enctype="application/x-www-form-urlencoded" id="admin_settings_save">
        <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'hidden.security-key'),$_smarty_tpl);?>


        <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['section']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->iteration++;
?>
            <?php echo smarty_function_component(array('_default_short'=>'admin:p-settings','template'=>'fieldset','section'=>$_smarty_tpl->tpl_vars['section']->value,'sectionIteration'=>$_smarty_tpl->tpl_vars['section']->iteration,'formid'=>$_smarty_tpl->tpl_vars['formid']->value),$_smarty_tpl);?>

        <?php } ?>

        <?php echo smarty_function_component(array('_default_short'=>'admin:button','name'=>'submit_save_settings','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['save'],'attributes'=>array('id'=>'admin_settings_submit')),$_smarty_tpl);?>

    </form>
<?php }else{ ?>
    <?php echo smarty_function_component(array('_default_short'=>'admin:blankslate','text'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['settings']['no_settings_for_this_plugin']),$_smarty_tpl);?>

<?php }?><?php }} ?>