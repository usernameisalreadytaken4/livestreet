<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:32
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/topic/topic-preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13199839935b34cfc0cfdc13-99631960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d42a78674148e04c89ac258e02f69c1059829c8' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/topic/topic-preview.tpl',
      1 => 1529954500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13199839935b34cfc0cfdc13-99631960',
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
  'unifunc' => 'content_5b34cfc0d20966_69698374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfc0d20966_69698374')) {function content_5b34cfc0d20966_69698374($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
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