<?php /* Smarty version Smarty-3.1.13, created on 2018-07-03 21:45:32
         compiled from "C:\xampp\htdocs\application\frontend\components\comment\comment-info-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12973549225b3bc44c837c73-20697481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cd9925dab3307e94b07842155f250964a2f4887' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\comment\\comment-info-item.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12973549225b3bc44c837c73-20697481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3bc44c847679_01102296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3bc44c847679_01102296')) {function content_5b3bc44c847679_01102296($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-comment-info-item', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('text','link','mods','classes','attributes')),$_smarty_tpl);?>


<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    <?php if ($_smarty_tpl->tpl_vars['link']->value){?>
        <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['link']->value['url'])===null||$tmp==='' ? '#' : $tmp);?>
" class="<?php echo $_smarty_tpl->tpl_vars['link']->value['classes'];?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['link']->value['attributes']),$_smarty_tpl);?>
>
            <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

        </a>
    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    <?php }?>
</li><?php }} ?>