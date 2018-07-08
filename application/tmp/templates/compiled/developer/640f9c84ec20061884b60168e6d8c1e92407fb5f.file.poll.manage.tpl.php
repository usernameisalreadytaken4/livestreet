<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:32
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/poll/poll.manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12346985045b34cfc0c72574-78801386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '640f9c84ec20061884b60168e6d8c1e92407fb5f' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/poll/poll.manage.tpl',
      1 => 1529954496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12346985045b34cfc0c72574-78801386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'targetType' => 0,
    'targetId' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cfc0c9eda2_09826574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfc0c9eda2_09826574')) {function content_5b34cfc0c9eda2_09826574($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_insert_block')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/insert.block.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('targetId','targetType')),$_smarty_tpl);?>


<div class="fieldset ls-poll-manage js-poll-manage" data-type="<?php echo $_smarty_tpl->tpl_vars['targetType']->value;?>
" data-target-id="<?php echo $_smarty_tpl->tpl_vars['targetId']->value;?>
">
    <header class="fieldset-header">
        <h3 class="fieldset-title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['poll']['polls'];?>
</h3>
    </header>

    <div class="fieldset-body">
        
        <?php echo smarty_function_component(array('_default_short'=>'button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['add'],'type'=>'button','classes'=>'ls-poll-manage-add js-poll-manage-add'),$_smarty_tpl);?>


        
        <?php echo smarty_insert_block(array('block' => "pollFormItems", 'params' => array('target_type'=>$_smarty_tpl->tpl_vars['targetType']->value,'target_id'=>$_smarty_tpl->tpl_vars['targetId']->value)),$_smarty_tpl);?>

    </div>
</div><?php }} ?>