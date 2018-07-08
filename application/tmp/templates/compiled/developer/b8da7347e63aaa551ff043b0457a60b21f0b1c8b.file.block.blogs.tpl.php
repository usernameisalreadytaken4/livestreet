<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:24
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/blog/blocks/block.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7177207225b34cc342fed10-64088997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8da7347e63aaa551ff043b0457a60b21f0b1c8b' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/blog/blocks/block.blogs.tpl',
      1 => 1529954492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7177207225b34cc342fed10-64088997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sBlogsTop' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc3433d571_11451495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc3433d571_11451495')) {function content_5b34cc3433d571_11451495($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_router')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'blog.blocks.blogs.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'blog.blocks.blogs.nav.top'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'ajax'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'blog.blocks.blogs.nav.joined'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'ajax'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'blog.blocks.blogs.nav.self'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'ajax'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'blogs','classes'=>'blog-block-blogs js-block-default','title'=>$_tmp1,'titleUrl'=>$_tmp2,'tabs'=>array('classes'=>'js-tabs-block','tabs'=>array(array('text'=>$_tmp3,'url'=>$_tmp4."blogs/top",'list'=>$_smarty_tpl->tpl_vars['sBlogsTop']->value),array('text'=>$_tmp5,'url'=>$_tmp6."blogs/join",'is_enabled'=>!!$_smarty_tpl->tpl_vars['oUserCurrent']->value),array('text'=>$_tmp7,'url'=>$_tmp8."blogs/self",'is_enabled'=>!!$_smarty_tpl->tpl_vars['oUserCurrent']->value)))),$_smarty_tpl);?>
<?php }} ?>