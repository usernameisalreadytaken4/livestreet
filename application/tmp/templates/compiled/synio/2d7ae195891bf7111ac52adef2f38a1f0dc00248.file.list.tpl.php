<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:25:40
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\p-category\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19834261155b32690455bbd9-41583282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d7ae195891bf7111ac52adef2f38a1f0dc00248' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\p-category\\list.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19834261155b32690455bbd9-41583282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'categoryWrapper' => 0,
    'category' => 0,
    'level' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3269045732e3_52254839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3269045732e3_52254839')) {function content_5b3269045732e3_52254839($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('p-category-list', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('categories')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['categories']->value){?>
    <table class="ls-table">
        <thead>
            <tr>
                <th>Название</th>
                <th>URL</th>
                <th>Элементов</th>
                <th class="ls-table-cell-actions">Действие</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['categoryWrapper'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryWrapper']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryWrapper']->key => $_smarty_tpl->tpl_vars['categoryWrapper']->value){
$_smarty_tpl->tpl_vars['categoryWrapper']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['category'] = new Smarty_variable($_smarty_tpl->tpl_vars['categoryWrapper']->value['entity'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['level'] = new Smarty_variable($_smarty_tpl->tpl_vars['categoryWrapper']->value['level'], null, 0);?>

                <tr data-id="<?php echo $_smarty_tpl->tpl_vars['category']->value->getId();?>
">
                    <td>
                        <i class="fa fa-file" style="margin-left: <?php echo $_smarty_tpl->tpl_vars['level']->value*20;?>
px;"></i>

                        <?php if ($_smarty_tpl->tpl_vars['category']->value->getWebUrl()){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value->getWebUrl();?>
" border="0"><?php echo $_smarty_tpl->tpl_vars['category']->value->getTitle();?>
</a>
                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['category']->value->getTitle();?>

                        <?php }?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['category']->value->getUrlFull();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['category']->value->getCountTargetOfDescendants();?>
</td>
                    <td class="ls-table-cell-actions">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value->getUrlAdminUpdate();?>
" class="fa fa-edit" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['edit'];?>
"></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value->getUrlAdminRemove();?>
?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" class="fa fa-trash-o js-confirm-remove" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['delete'];?>
"></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }else{ ?>
    <?php echo smarty_function_component(array('_default_short'=>'admin:blankslate','text'=>'Нет категорий. Вы можете добавить новую.'),$_smarty_tpl);?>

<?php }?><?php }} ?>