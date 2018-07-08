<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:52:48
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/admin/frontend/components/p-actionbar/actionbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15347985965b34cc10464d69-73412705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '623a6312b8ebcd80bacec21cc288ca0d5010ee4f' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/admin/frontend/components/p-actionbar/actionbar.tpl',
      1 => 1529954537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15347985965b34cc10464d69-73412705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'backUrl' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'backText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc104a4d77_04977583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc104a4d77_04977583')) {function content_5b34cc104a4d77_04977583($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('p-actionbar', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('content','backUrl','backText','mods','classes','attributes')),$_smarty_tpl);?>


<?php if (trim($_smarty_tpl->tpl_vars['content']->value)||$_smarty_tpl->tpl_vars['backUrl']->value){?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 ls-clearfix" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
        <?php if ($_smarty_tpl->tpl_vars['backUrl']->value){?>
            <?php echo smarty_function_component(array('_default_short'=>'admin:button','text'=>(($tmp = @$_smarty_tpl->tpl_vars['backText']->value)===null||$tmp==='' ? 'Назад' : $tmp),'url'=>$_smarty_tpl->tpl_vars['backUrl']->value),$_smarty_tpl);?>

        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
<?php }?><?php }} ?>