<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:48
         compiled from "C:\xampp\htdocs\application\frontend\components\blog\modals\modal.blog-delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8439838625b3502acd7c051-95235765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1f884e7f2f7727702f2405c014b5a762433afdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\blog\\modals\\modal.blog-delete.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8439838625b3502acd7c051-95235765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog' => 0,
    'aLang' => 0,
    'blogs' => 0,
    'selectBlogs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502acd975e2_79164753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502acd975e2_79164753')) {function content_5b3502acd975e2_79164753($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('blog','blogs')),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array('modal_content', null, null); ob_start(); ?>
    <form action="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->tpl_vars['blog']->value->getId();?>
/" method="POST" id="js-blog-remove-form">
        
        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden.security-key'),$_smarty_tpl);?>


        
        <?php $_smarty_tpl->tpl_vars['selectBlogs'] = new Smarty_variable(array(array('value'=>-1,'text'=>"-- ".((string)$_smarty_tpl->tpl_vars['aLang']->value['blog']['remove']['remove_topics'])." --")), null, 0);?>

        <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
            <?php $_smarty_tpl->createLocalArrayVariable('selectBlogs', null, 0);
$_smarty_tpl->tpl_vars['selectBlogs']->value[] = array('value'=>$_smarty_tpl->tpl_vars['blog']->value->getId(),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true));?>
        <?php } ?>

        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'select','name'=>'topic_move_to','label'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['remove']['move_to'],'items'=>$_smarty_tpl->tpl_vars['selectBlogs']->value),$_smarty_tpl);?>

    </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'blog.remove.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.remove'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'modal','title'=>$_tmp1,'content'=>Smarty::$_smarty_vars['capture']['modal_content'],'classes'=>'js-modal-default','mods'=>'blog-delete','id'=>'modal-blog-delete','primaryButton'=>array('text'=>$_tmp2,'form'=>'js-blog-remove-form')),$_smarty_tpl);?>
<?php }} ?>