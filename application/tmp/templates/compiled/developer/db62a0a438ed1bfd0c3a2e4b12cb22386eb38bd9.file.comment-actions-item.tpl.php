<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:20:04
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/comment/comment-actions-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3508457165b34d2744997d7-20246924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db62a0a438ed1bfd0c3a2e4b12cb22386eb38bd9' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/comment/comment-actions-item.tpl',
      1 => 1529954493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3508457165b34d2744997d7-20246924',
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
  'unifunc' => 'content_5b34d2744d6b54_29915524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34d2744d6b54_29915524')) {function content_5b34d2744d6b54_29915524($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-comment-actions-item', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('text','link','mods','classes','attributes')),$_smarty_tpl);?>


<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    <?php if ($_smarty_tpl->tpl_vars['link']->value){?>
        <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['link']->value['url'])===null||$tmp==='' ? '#' : $tmp);?>
" class="ls-link-dotted <?php echo $_smarty_tpl->tpl_vars['link']->value['classes'];?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['link']->value['attributes']),$_smarty_tpl);?>
>
            <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

        </a>
    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    <?php }?>
</li><?php }} ?>