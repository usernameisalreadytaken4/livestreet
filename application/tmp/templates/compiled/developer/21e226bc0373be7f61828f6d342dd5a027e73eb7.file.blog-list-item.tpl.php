<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:51:22
         compiled from "C:\xampp\htdocs\application\frontend\components\blog\list\blog-list-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16110875705b3503fa77d2f9-47940653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21e226bc0373be7f61828f6d342dd5a027e73eb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\blog\\list\\blog-list-item.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16110875705b3503fa77d2f9-47940653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog' => 0,
    'component' => 0,
    'aLang' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3503fa7daf00_19139063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3503fa7daf00_19139063')) {function content_5b3503fa7daf00_19139063($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\framework\\libs\\vendor\\Smarty\\libs\\plugins\\modifier.truncate.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('blog-list-item', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('blog')),$_smarty_tpl);?>



<?php $_smarty_tpl->_capture_stack[0][] = array('title', null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['blog']->value->getType()=='close'){?>
        <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'blog.private'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'lock','attributes'=>array('title'=>$_tmp1)),$_smarty_tpl);?>

    <?php }?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->_capture_stack[0][] = array('desc', null, null); ob_start(); ?>
    <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['blog']->value->getDescription()),120);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->_capture_stack[0][] = array('content', null, null); ob_start(); ?>
    
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-actions">
        
        <?php echo smarty_function_component(array('_default_short'=>'blog','template'=>'join','blog'=>$_smarty_tpl->tpl_vars['blog']->value),$_smarty_tpl);?>

    </div>

    
    <?php $_smarty_tpl->tpl_vars['info'] = new Smarty_variable(array(array('label'=>((string)$_smarty_tpl->tpl_vars['aLang']->value['blog']['users']['readers_total']).":",'content'=>"<span class=\"js-blog-users-count\" data-blog-id=\"".((string)$_smarty_tpl->tpl_vars['blog']->value->getId())."\">".((string)$_smarty_tpl->tpl_vars['blog']->value->getCountUser())."</span>"),array('label'=>((string)$_smarty_tpl->tpl_vars['aLang']->value['blog']['topics_total']).":",'content'=>$_smarty_tpl->tpl_vars['blog']->value->getCountTopic())), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['blog']->value->category->getCategory()){?>
        <?php $_smarty_tpl->createLocalArrayVariable('info', null, 0);
$_smarty_tpl->tpl_vars['info']->value[] = array('label'=>((string)$_smarty_tpl->tpl_vars['aLang']->value['blog']['categories']['category']).":",'content'=>$_smarty_tpl->tpl_vars['blog']->value->category->getCategory()->getTitle());?>
    <?php }?>

    <?php echo smarty_function_component(array('_default_short'=>'info-list','list'=>$_smarty_tpl->tpl_vars['info']->value,'classes'=>'object-list-item-info'),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_component(array('_default_short'=>'item','title'=>Smarty::$_smarty_vars['capture']['title'],'desc'=>Smarty::$_smarty_vars['capture']['desc'],'content'=>Smarty::$_smarty_vars['capture']['content'],'image'=>array('url'=>$_smarty_tpl->tpl_vars['blog']->value->getUrlFull(),'path'=>$_smarty_tpl->tpl_vars['blog']->value->getAvatarPath(100),'alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl);?>
<?php }} ?>