<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:55
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/sort/sort.ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10871388095b34cfd74c3467-41606967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '117cc7dbbc459175073d316d74f6fedb99482e9f' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/sort/sort.ajax.tpl',
      1 => 1529954498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10871388095b34cfd74c3467-41606967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'classes' => 0,
    'component' => 0,
    'items' => 0,
    'item' => 0,
    'params' => 0,
    'label' => 0,
    'aLang' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cfd7527667_15358536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfd7527667_15358536')) {function content_5b34cfd7527667_15358536($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-sort', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('items','text','label','mods','classes','attributes')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." ".((string)$_smarty_tpl->tpl_vars['component']->value), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->key]['attributes'] = array_merge((($tmp = @$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->key]['attributes'])===null||$tmp==='' ? array() : $tmp),array('data-name'=>'sort_by','data-value'=>$_smarty_tpl->tpl_vars['item']->value['name'],'data-order'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['order'])===null||$tmp==='' ? 'desc' : $tmp)));?>
<?php } ?>

<?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'dropdown','text'=>(($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? '...' : $tmp),'classes'=>'js-dropdown-default','attributes'=>array('data-lsdropdown-selectable'=>'true'),'menu'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','template'=>'group','classes'=>$_smarty_tpl->tpl_vars['classes']->value,'params'=>$_smarty_tpl->tpl_vars['params']->value,'buttons'=>array(array('text'=>(($tmp = @$_smarty_tpl->tpl_vars['label']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['aLang']->value['sort']['label'] : $tmp),'isDisabled'=>true),$_tmp1)),$_smarty_tpl);?>
<?php }} ?>