<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 19:53:58
         compiled from "C:\xampp\htdocs\application\frontend\components\feed\blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:375383935b3512a684b916-65162735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ced83333d27fc3b735dc4c00eb60baf90d311a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\feed\\blogs.tpl',
      1 => 1530188507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '375383935b3512a684b916-65162735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'blogsJoined' => 0,
    'blog' => 0,
    'blogsSubscribed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3512a685b314_18877965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3512a685b314_18877965')) {function content_5b3512a685b314_18877965($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('blogsSubscribed','blogsJoined')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
    <div class="ls-feed-blogs js-feed-blogs">
        <p class="text-help">
            <?php echo $_smarty_tpl->tpl_vars['aLang']->value['feed']['blogs']['note'];?>

        </p>

        <?php if ($_smarty_tpl->tpl_vars['blogsJoined']->value){?>
            <div class="ls-field-checkbox-group">
                <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogsJoined']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','inputClasses'=>'js-feed-blogs-subscribe','inputAttributes'=>array('data-id'=>$_smarty_tpl->tpl_vars['blog']->value->getId()),'checked'=>isset($_smarty_tpl->tpl_vars['blogsSubscribed']->value[$_smarty_tpl->tpl_vars['blog']->value->getId()]),'label'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['blog']->value->getUrlFull())."\">".$_tmp1."</a>"),$_smarty_tpl);?>

                <?php } ?>
            </div>
        <?php }else{ ?>
            <?php echo smarty_function_component(array('_default_short'=>'blankslate','text'=>$_smarty_tpl->tpl_vars['aLang']->value['feed']['blogs']['empty']),$_smarty_tpl);?>

        <?php }?>
    </div>
<?php }?><?php }} ?>