<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:24:57
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\p-topic\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10189048635b3268d91c7d45-24526697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9429342d19f71f3b9451641bc8f0c6fbac15eed6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\p-topic\\list.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10189048635b3268d91c7d45-24526697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'types' => 0,
    'type' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3268d91e32d6_46676042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3268d91e32d6_46676042')) {function content_5b3268d91e32d6_46676042($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('p-property-list', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('types')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['types']->value){?>
    <script>
        jQuery(function($){
            ls.admin_topic.initTableType();
        });
    </script>

    <table class="ls-table" id="type-list">
        <thead>
            <tr>
                <th>Название</th>
                <th>Идентификатор</th>
                <th>Состояние</th>
                <th class="ls-table-cell-actions">Действие</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
                <tr data-type-id="<?php echo $_smarty_tpl->tpl_vars['type']->value->getId();?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['type']->value->getName();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['type']->value->getCode();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['type']->value->getStateText();?>
</td>
                    <td class="ls-table-cell-actions">
                        <a href="<?php echo smarty_function_router(array('page'=>"admin/settings/topic-type/update"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['type']->value->getId();?>
/" class="fa fa-edit" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['edit'];?>
"></a>
                        <a href="<?php echo smarty_function_router(array('page'=>"admin/properties"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['type']->value->getPropertyTargetType();?>
/" class="fa fa-th-list" title="Настройка дополнительных полей"></a>
                        <?php if ($_smarty_tpl->tpl_vars['type']->value->getAllowRemove()){?>
                            <a href="<?php echo smarty_function_router(array('page'=>"admin/settings/topic-type/remove"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['type']->value->getId();?>
/" class="fa fa-trash-o" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['delete'];?>
"></a>
                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }else{ ?>
    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.empty'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'admin:blankslate','text'=>$_tmp1),$_smarty_tpl);?>

<?php }?><?php }} ?>