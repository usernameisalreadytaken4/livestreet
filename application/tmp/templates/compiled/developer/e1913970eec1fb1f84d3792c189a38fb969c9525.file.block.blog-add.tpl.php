<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:03
         compiled from "C:\xampp\htdocs\application\frontend\components\blog\blocks\block.blog-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20892775975b327a67e149d6-42735320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1913970eec1fb1f84d3792c189a38fb969c9525' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\blog\\blocks\\block.blog-add.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20892775975b327a67e149d6-42735320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b327a67e2c0d4_13635577',
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b327a67e2c0d4_13635577')) {function content_5b327a67e2c0d4_13635577($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('block_content', null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAllowCreateBlog()){?>
            <p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog']['can_add'];?>
</p>

            <?php ob_start();?><?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','url'=>$_tmp1."add/",'mods'=>'primary large','text'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['create_blog']),$_smarty_tpl);?>

        <?php }else{ ?>
            <p><?php echo smarty_function_lang(array('name'=>'blog.cant_add','rating'=>Config::Get('acl.create.blog.rating')),$_smarty_tpl);?>
</p>

            <?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary large','text'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['create_blog'],'isDisabled'=>true),$_smarty_tpl);?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'blog-add','content'=>Smarty::$_smarty_vars['capture']['block_content']),$_smarty_tpl);?>

<?php }?><?php }} ?>