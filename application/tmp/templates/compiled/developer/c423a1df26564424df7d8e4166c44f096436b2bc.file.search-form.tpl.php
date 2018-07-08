<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:37
         compiled from "E:\XAMPP\htdocs\application\frontend\components\search-form\search-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17312840675b4257b015cc84-58185305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c423a1df26564424df7d8e4166c44f096436b2bc' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\search-form\\search-form.tpl',
      1 => 1531074620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17312840675b4257b015cc84-58185305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b0174383_54729478',
  'variables' => 
  array (
    'action' => 0,
    'method' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'placeholder' => 0,
    'aLang' => 0,
    'note' => 0,
    'value' => 0,
    'inputClasses' => 0,
    'inputAttributes' => 0,
    'inputName' => 0,
    'noSubmitButton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b0174383_54729478')) {function content_5b4257b0174383_54729478($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-search-form', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('action','method','placeholder','placeholder','note','value','inputClasses','inputAttributes','inputName','noSubmitButton','mods','classes','attributes')),$_smarty_tpl);?>


<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['method']->value)===null||$tmp==='' ? 'get' : $tmp);?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','placeholder'=>$_smarty_tpl->tpl_vars['placeholder']->value ? $_smarty_tpl->tpl_vars['placeholder']->value : $_smarty_tpl->tpl_vars['aLang']->value['search']['search'],'note'=>$_smarty_tpl->tpl_vars['note']->value,'value'=>$_smarty_tpl->tpl_vars['value']->value,'inputClasses'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-input ".((string)$_smarty_tpl->tpl_vars['inputClasses']->value),'inputAttributes'=>$_smarty_tpl->tpl_vars['inputAttributes']->value,'name'=>(($tmp = @$_smarty_tpl->tpl_vars['inputName']->value)===null||$tmp==='' ? 'q' : $tmp)),$_smarty_tpl);?>


        <?php if (!$_smarty_tpl->tpl_vars['noSubmitButton']->value){?>
            <?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'icon','classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-submit",'icon'=>'search'),$_smarty_tpl);?>

        <?php }?>
    
</form><?php }} ?>