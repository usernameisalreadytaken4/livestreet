<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:12
         compiled from "C:\xampp\htdocs\framework\frontend\components\item\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21273489125b327c7345ffb8-60625198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c03001ca60013cfbd90880d98c855694cd64b3c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\item\\item.tpl',
      1 => 1530188565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21273489125b327c7345ffb8-60625198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b327c73483244_47231702',
  'variables' => 
  array (
    'element' => 0,
    'image' => 0,
    'component' => 0,
    'classes' => 0,
    'mods' => 0,
    'attributes' => 0,
    'title' => 0,
    'titleUrl' => 0,
    'desc' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b327c73483244_47231702')) {function content_5b327c73483244_47231702($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-item', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('image','content','desc','title','titleUrl','element','mods','classes','attributes')),$_smarty_tpl);?>





<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." ls-clearfix", null, 0);?>
<?php $_smarty_tpl->tpl_vars['element'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['element']->value)===null||$tmp==='' ? 'div' : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['image']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." has-image", null, 0);?>
<?php }?>


<<?php echo $_smarty_tpl->tpl_vars['element']->value;?>
 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    <?php if ($_smarty_tpl->tpl_vars['image']->value){?>
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-left">
            <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['alt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value['title'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-image <?php echo $_smarty_tpl->tpl_vars['image']->value['classes'];?>
">
            </a>
        </div>
    <?php }?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-body js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-body">
        <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
            <?php if ($_smarty_tpl->tpl_vars['titleUrl']->value){?>
                <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><a href="<?php echo $_smarty_tpl->tpl_vars['titleUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h3>
            <?php }else{ ?>
                <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['desc']->value){?>
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-description">
                <?php echo $_smarty_tpl->tpl_vars['desc']->value;?>

            </div>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
</<?php echo $_smarty_tpl->tpl_vars['element']->value;?>
><?php }} ?>