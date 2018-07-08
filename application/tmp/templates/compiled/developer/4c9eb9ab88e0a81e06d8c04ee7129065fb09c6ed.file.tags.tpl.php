<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:46:37
         compiled from "C:\xampp\htdocs\application\frontend\components\tags-personal\tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10799135935b3502dde36c31-00436238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c9eb9ab88e0a81e06d8c04ee7129065fb09c6ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\tags-personal\\tags.tpl',
      1 => 1530188508,
      2 => 'file',
    ),
    'c4f982235891f13e7a769f1c15dde7b36d232beb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\tags\\tags.tpl',
      1 => 1530188567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10799135935b3502dde36c31-00436238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502dde61bb2_31813150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502dde61bb2_31813150')) {function content_5b3502dde61bb2_31813150($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-tags', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('title','tags','mods','classes','attributes')),$_smarty_tpl);?>



    <?php echo smarty_function_component_define_params(array('params'=>array('targetId','tagsPersonal','isEditable')),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['attributes'] = new Smarty_variable(array_merge((($tmp = @$_smarty_tpl->tpl_vars['attributes']->value)===null||$tmp==='' ? array() : $tmp),array('data-param-target_id'=>$_smarty_tpl->tpl_vars['targetId']->value)), null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['tags']->value){?>
    <ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 ls-clearfix" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
        <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
            <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title">
                <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </li>
        <?php }?>

        
            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->index++;
 $_smarty_tpl->tpl_vars['tag']->first = $_smarty_tpl->tpl_vars['tag']->index === 0;
?>
                <?php echo smarty_function_component(array('_default_short'=>'tags','template'=>'item','text'=>$_smarty_tpl->tpl_vars['tag']->value->getText(),'url'=>$_smarty_tpl->tpl_vars['tag']->value->getUrl(),'isFirst'=>$_smarty_tpl->tpl_vars['tag']->first),$_smarty_tpl);?>

            <?php } ?>
        
    
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
        <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tagsPersonal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
            <?php echo smarty_function_component(array('_default_short'=>'tags','template'=>'item','text'=>$_smarty_tpl->tpl_vars['tag']->value->getText(),'url'=>$_smarty_tpl->tpl_vars['tag']->value->getUrl(),'classes'=>"js-tags-personal-tag",'mods'=>"personal"),$_smarty_tpl);?>

        <?php } ?>

        
        <li class="ls-tags-item ls-tags-personal-edit js-tags-personal-edit" <?php if ($_smarty_tpl->tpl_vars['isEditable']->value){?>style="display:none;"<?php }?>>
            <a href="#" class="ls-link-dotted">
                <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'edit'),$_smarty_tpl);?>

                <?php echo smarty_function_lang(array('_default_short'=>'tags_personal.edit'),$_smarty_tpl);?>

            </a>
        </li>
    <?php }?>

    </ul>
<?php }?><?php }} ?>