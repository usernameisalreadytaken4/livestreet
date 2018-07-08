<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:54
         compiled from "C:\xampp\htdocs\application\frontend\components\topic\topic-preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17110486205b3502b25c0c83-26454376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8ae7a438da2f5cc5c01140670b69f99fa2cf944' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\topic\\topic-preview.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17110486205b3502b25c0c83-26454376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502b25c8982_90159973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502b25c8982_90159973')) {function content_5b3502b25c8982_90159973($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-topic-preview', null, 0);?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
" id="topic-text-preview">
    <header class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-header">
        <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['common']['preview_text'];?>
</h3>
    </header>

    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-body js-topic-preview-content"></div>

    <footer class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-footer">
        <?php echo smarty_function_component(array('_default_short'=>'button','type'=>'button','classes'=>'js-topic-preview-text-hide-button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['cancel']),$_smarty_tpl);?>

    </footer>
</div><?php }} ?>