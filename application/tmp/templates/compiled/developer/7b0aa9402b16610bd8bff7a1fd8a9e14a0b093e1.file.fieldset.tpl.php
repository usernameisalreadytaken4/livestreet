<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:52:56
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/admin/frontend/components/p-settings/fieldset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13561134815b34cc18367fe2-36414191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b0aa9402b16610bd8bff7a1fd8a9e14a0b093e1' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/admin/frontend/components/p-settings/fieldset.tpl',
      1 => 1529954541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13561134815b34cc18367fe2-36414191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'section' => 0,
    'keys' => 0,
    'text' => 0,
    'key' => 0,
    'parameter' => 0,
    'sectionIteration' => 0,
    'type' => 0,
    'validator' => 0,
    'name' => 0,
    'formid' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc1843d3e4_57710562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc1843d3e4_57710562')) {function content_5b34cc1843d3e4_57710562($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?><?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('p-settings-fieldset', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('section','formid')),$_smarty_tpl);?>


<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <?php if ($_smarty_tpl->tpl_vars['section']->value->getName()){?>
        <h2 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><?php echo $_smarty_tpl->tpl_vars['section']->value->getName();?>
</h2>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['section']->value->getDescription()){?>
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-desc">
            <?php echo $_smarty_tpl->tpl_vars['section']->value->getDescription();?>

        </div>
    <?php }?>

    
    <?php if (Config::Get('plugin.admin.settings.show_section_keys')){?>
        <?php $_smarty_tpl->tpl_vars['keys'] = new Smarty_variable($_smarty_tpl->tpl_vars['section']->value->getAllowedKeys(), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['keys']->value){?>
            <?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable('Ключи, которые показываются для данного раздела: <strong>', null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['keys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['key']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['key']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->iteration++;
 $_smarty_tpl->tpl_vars['key']->last = $_smarty_tpl->tpl_vars['key']->iteration === $_smarty_tpl->tpl_vars['key']->total;
?>
                <?php ob_start();?><?php if (!$_smarty_tpl->tpl_vars['key']->last){?><?php echo ", ";?><?php }?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable(($_smarty_tpl->tpl_vars['text']->value).(((string)$_smarty_tpl->tpl_vars['key']->value).$_tmp1), null, 0);?>
            <?php } ?>

            <?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable(($_smarty_tpl->tpl_vars['text']->value).("</strong>"), null, 0);?>

            <?php echo smarty_function_component(array('_default_short'=>'admin:alert','text'=>$_smarty_tpl->tpl_vars['text']->value,'mods'=>'info'),$_smarty_tpl);?>

        <?php }?>
    <?php }?>

    
    <?php  $_smarty_tpl->tpl_vars['parameter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parameter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value->getSettings(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['parameter']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['parameter']->key => $_smarty_tpl->tpl_vars['parameter']->value){
$_smarty_tpl->tpl_vars['parameter']->_loop = true;
 $_smarty_tpl->tpl_vars['parameter']->iteration++;
?>
        <?php $_smarty_tpl->tpl_vars['settingsExist'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable($_smarty_tpl->tpl_vars['parameter']->value->getType(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['validator'] = new Smarty_variable($_smarty_tpl->tpl_vars['parameter']->value->getValidator(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("Settings_Sec".((string)$_smarty_tpl->tpl_vars['sectionIteration']->value)."_Num".((string)$_smarty_tpl->tpl_vars['parameter']->iteration)."[]", null, 0);?>

        <?php if (in_array($_smarty_tpl->tpl_vars['type']->value,array('array','integer','boolean','string','float'))){?>
            <?php if ($_smarty_tpl->tpl_vars['type']->value=='string'&&$_smarty_tpl->tpl_vars['validator']->value['type']=='Enum'){?>
                <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('enum', null, 0);?>
            <?php }?>
            <?php echo smarty_function_component(array('_default_short'=>'admin:p-settings','template'=>"field-".((string)$_smarty_tpl->tpl_vars['type']->value),'classes'=>'js-settings-field','parameter'=>$_smarty_tpl->tpl_vars['parameter']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value,'key'=>$_smarty_tpl->tpl_vars['parameter']->value->getKey(),'formid'=>$_smarty_tpl->tpl_vars['formid']->value),$_smarty_tpl);?>

        <?php }else{ ?>
            <?php echo smarty_function_component(array('_default_short'=>'admin:alert','text'=>((string)$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['errors']['unknown_parameter_type']).": <b>".((string)$_smarty_tpl->tpl_vars['parameter']->value->getType())."</b>",'mods'=>'error'),$_smarty_tpl);?>

        <?php }?>
    <?php } ?>
</div><?php }} ?>