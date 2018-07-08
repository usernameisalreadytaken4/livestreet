<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:26:48
         compiled from "C:\xampp\htdocs\application\frontend\components\wall\wall.form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18027941215b326948cae6a0-31892457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c257c22b4dfea7752750af0788814256f9111337' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\wall\\wall.form.tpl',
      1 => 1493631808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18027941215b326948cae6a0-31892457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'classes' => 0,
    'id' => 0,
    'display' => 0,
    'placeholder' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b326948cba229_74468685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b326948cba229_74468685')) {function content_5b326948cba229_74468685($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('classes','id','display','placeholder')),$_smarty_tpl);?>


<form class="wall-form js-wall-form <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" data-id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? 0 : $tmp);?>
" <?php if (!(($tmp = @$_smarty_tpl->tpl_vars['display']->value)===null||$tmp==='' ? true : $tmp)){?>style="display: none"<?php }?>>
    
    <?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['placeholder']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['aLang']->value['wall']['form']['fields']['text']['placeholder'] : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'textarea','placeholder'=>$_tmp1,'inputClasses'=>'ls-width-full js-wall-form-text'),$_smarty_tpl);?>


    
    <footer class="wall-form-footer">
        <?php echo smarty_function_component(array('_default_short'=>'button','type'=>'submit','mods'=>'primary','classes'=>'js-wall-form-submit','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['add']),$_smarty_tpl);?>

    </footer>
</form><?php }} ?>