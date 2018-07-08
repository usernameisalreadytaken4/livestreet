<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:04:03
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/wall/wall.form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7838998105b34ceb3ba52b0-52556989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f60af10c7db6c5b02b82a79f1bb4b0192081ebd' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/wall/wall.form.tpl',
      1 => 1529954503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7838998105b34ceb3ba52b0-52556989',
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
  'unifunc' => 'content_5b34ceb3c30737_65886947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ceb3c30737_65886947')) {function content_5b34ceb3c30737_65886947($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
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