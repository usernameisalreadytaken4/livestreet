<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:20:04
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/comment/comment-info-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12109252675b34d27444d046-55621688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10d2a50695e8a69638611b2c841d70544d494d0d' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/comment/comment-info-item.tpl',
      1 => 1529954493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12109252675b34d27444d046-55621688',
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
  'unifunc' => 'content_5b34d27448b497_23814163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34d27448b497_23814163')) {function content_5b34d27448b497_23814163($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
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