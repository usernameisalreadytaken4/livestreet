<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:32
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/poll/poll.manage.list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5215656055b34cfc0ccfc01-14866067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8681877dba1797e07ad209e7bbb33596ebfc2772' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/poll/poll.manage.list.tpl',
      1 => 1529954496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5215656055b34cfc0ccfc01-14866067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPollItems' => 0,
    'poll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cfc0ce4c81_97299164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfc0ce4c81_97299164')) {function content_5b34cfc0ce4c81_97299164($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<ul class="ls-poll-manage-list js-poll-manage-list">
    <?php if ($_smarty_tpl->tpl_vars['aPollItems']->value){?>
        <?php  $_smarty_tpl->tpl_vars['poll'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['poll']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPollItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['poll']->key => $_smarty_tpl->tpl_vars['poll']->value){
$_smarty_tpl->tpl_vars['poll']->_loop = true;
?>
            <?php echo smarty_function_component(array('_default_short'=>'poll','template'=>'manage.item','poll'=>$_smarty_tpl->tpl_vars['poll']->value),$_smarty_tpl);?>

        <?php } ?>
    <?php }?>
</ul><?php }} ?>