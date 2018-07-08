<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:24
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/tags/tag-cloud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1052735495b34cc345b8641-75179980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '931aefaf2c4841bae54e40ebdad944435fda1f0f' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/tags/tag-cloud.tpl',
      1 => 1529954593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1052735495b34cc345b8641-75179980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'component' => 0,
    'tag' => 0,
    'active' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc34601f88_41287449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc34601f88_41287449')) {function content_5b34cc34601f88_41287449($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-tag-cloud', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('tags','acitve')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['tags']->value){?>
    <ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 ls-word-wrap">
        <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
            <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php if ($_smarty_tpl->tpl_vars['tag']->value->getText()&&$_smarty_tpl->tpl_vars['active']->value==$_smarty_tpl->tpl_vars['tag']->value->getText()){?>active<?php }?>">
                <a class="ls-tag-size-<?php echo $_smarty_tpl->tpl_vars['tag']->value->getSize();?>
" href="<?php echo $_smarty_tpl->tpl_vars['tag']->value->getUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['tag']->value->getCount();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value->getText(), ENT_QUOTES, 'UTF-8', true);?>
</a>
            </li>
        <?php } ?>
    </ul>
<?php }else{ ?>
    <?php echo smarty_function_component(array('_default_short'=>'blankslate','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['empty']),$_smarty_tpl);?>

<?php }?><?php }} ?>