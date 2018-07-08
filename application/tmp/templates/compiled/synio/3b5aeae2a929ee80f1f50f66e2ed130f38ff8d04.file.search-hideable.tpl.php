<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:26:46
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\search\hideable\search-hideable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9309194255b3269465c06e4-54047569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b5aeae2a929ee80f1f50f66e2ed130f38ff8d04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\search\\hideable\\search-hideable.tpl',
      1 => 1493631808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9309194255b3269465c06e4-54047569',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3269465c4568_95648967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3269465c4568_95648967')) {function content_5b3269465c4568_95648967($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?><div class="ls-search-hideable js-search-hideable">
    <div class="ls-search-hideable-toggle js-search-hideable-toggle">
        <i class="ls-search-hideable-toggle-icon"></i>
        <a href="#" class="ls-search-hideable-toggle-text"><?php echo smarty_function_lang(array('_default_short'=>'search.find'),$_smarty_tpl);?>
</a>
    </div>

    <?php echo smarty_function_component(array('_default_short'=>'search.main','classes'=>'ls-search-hideable-search js-search-hideable-search','mods'=>'light'),$_smarty_tpl);?>

</div><?php }} ?>