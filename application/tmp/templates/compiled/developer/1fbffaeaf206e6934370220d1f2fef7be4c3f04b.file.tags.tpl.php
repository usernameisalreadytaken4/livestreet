<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:37
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/tags-personal/tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14589864955b34cf4d40c3a6-13564150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fbffaeaf206e6934370220d1f2fef7be4c3f04b' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/tags-personal/tags.tpl',
      1 => 1529954499,
      2 => 'file',
    ),
    'a927e1ab558a80dec2de409f314d44093b737e7b' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/tags/tags.tpl',
      1 => 1529954593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14589864955b34cf4d40c3a6-13564150',
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
  'unifunc' => 'content_5b34cf4d4ab188_88681245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4d4ab188_88681245')) {function content_5b34cf4d4ab188_88681245($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
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