<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:37
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/poll/poll.list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18889092695b34cf4d3f4098-01704036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b8ecfe8ebc576d69e8db82a48cb503e0a058da8' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/poll/poll.list.tpl',
      1 => 1529954496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18889092695b34cf4d3f4098-01704036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'polls' => 0,
    'poll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cf4d4024e8_86708233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4d4024e8_86708233')) {function content_5b34cf4d4024e8_86708233($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php  $_smarty_tpl->tpl_vars['poll'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['poll']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['polls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['poll']->key => $_smarty_tpl->tpl_vars['poll']->value){
$_smarty_tpl->tpl_vars['poll']->_loop = true;
?>
    <?php echo smarty_function_component(array('_default_short'=>'poll','poll'=>$_smarty_tpl->tpl_vars['poll']->value),$_smarty_tpl);?>

<?php } ?><?php }} ?>