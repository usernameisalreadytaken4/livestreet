<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:52:56
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/field/field.hidden.security-key.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5568749575b34cc181d9988-52881640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '122c95bb064959218c384139ea9dbcc04e7addf3' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/field/field.hidden.security-key.tpl',
      1 => 1529954577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5568749575b34cc181d9988-52881640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc181e2205_66262372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc181e2205_66262372')) {function content_5b34cc181e2205_66262372($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'security_ls_key','value'=>$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value),$_smarty_tpl);?>
<?php }} ?>