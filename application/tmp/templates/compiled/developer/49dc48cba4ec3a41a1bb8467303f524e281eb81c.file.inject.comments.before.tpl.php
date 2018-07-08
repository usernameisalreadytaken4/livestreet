<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:46:38
         compiled from "C:\xampp\htdocs\application\plugins\topicsimilar\frontend\skin\default\inject.comments.before.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20099183725b3502de030ef6-12727076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49dc48cba4ec3a41a1bb8467303f524e281eb81c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\topicsimilar\\frontend\\skin\\default\\inject.comments.before.tpl',
      1 => 1530188540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20099183725b3502de030ef6-12727076',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502de034d70_36321772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502de034d70_36321772')) {function content_5b3502de034d70_36321772($_smarty_tpl) {?><?php if (!is_callable('smarty_function_show_blocks')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.show_blocks.php';
?><div class="ls-topic-similar">
    <?php echo smarty_function_show_blocks(array('group'=>'comments_before'),$_smarty_tpl);?>

</div>
<?php }} ?>