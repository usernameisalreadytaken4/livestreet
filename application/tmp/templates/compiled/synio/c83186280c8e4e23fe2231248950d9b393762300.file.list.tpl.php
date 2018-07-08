<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:26:39
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\p-property\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15973734275b32693f3d2a60-19204754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83186280c8e4e23fe2231248950d9b393762300' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\p-property\\list.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15973734275b32693f3d2a60-19204754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'properties' => 0,
    'property' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b32693f3e62e3_47161694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b32693f3e62e3_47161694')) {function content_5b32693f3e62e3_47161694($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('p-property-list', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('properties')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['properties']->value){?>
    <script>
        jQuery(function($){
            ls.admin_property.initTableProperty();
        });
    </script>

    <table class="ls-table" id="property-list">
        <thead>
            <tr>
                <th>Название</th>
                <th>Идентификатор</th>
                <th>Тип</th>
                <th class="ls-table-cell-actions">Действие</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
                <tr data-id="<?php echo $_smarty_tpl->tpl_vars['property']->value->getId();?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['property']->value->getTitle();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['property']->value->getCode();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['property']->value->getType();?>
</td>
                    <td class="ls-table-cell-actions">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['property']->value->getUrlAdminUpdate();?>
" class="fa fa-edit" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['edit'];?>
"></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['property']->value->getUrlAdminRemove();?>
?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" class="fa fa-trash-o js-confirm-remove" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['delete'];?>
"></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }else{ ?>
    <?php echo smarty_function_component(array('_default_short'=>'admin:blankslate','text'=>'Нет дополнительных полей'),$_smarty_tpl);?>

<?php }?><?php }} ?>