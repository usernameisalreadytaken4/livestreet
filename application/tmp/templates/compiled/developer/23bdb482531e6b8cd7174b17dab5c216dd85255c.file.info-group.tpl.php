<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:04:03
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/info-group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7523332795b34ceb3a1ca18-93582218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23bdb482531e6b8cd7174b17dab5c216dd85255c' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/info-group.tpl',
      1 => 1529954501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7523332795b34ceb3a1ca18-93582218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'name' => 0,
    'items' => 0,
    'itemsHook' => 0,
    'html' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'url' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34ceb3aa55d0_81209774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ceb3aa55d0_81209774')) {function content_5b34ceb3aa55d0_81209774($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_hook')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('user-info-group', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('url','count','html','items','name','title','mods','classes','attributes')),$_smarty_tpl);?>


<?php echo smarty_function_hook(array('run'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-".((string)$_smarty_tpl->tpl_vars['name']->value)."-before"),$_smarty_tpl);?>



<?php echo smarty_function_hook(array('run'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-".((string)$_smarty_tpl->tpl_vars['name']->value)."-items",'assign'=>'itemsHook','items'=>$_smarty_tpl->tpl_vars['items']->value,'array'=>true),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable($_smarty_tpl->tpl_vars['itemsHook']->value ? $_smarty_tpl->tpl_vars['itemsHook']->value : $_smarty_tpl->tpl_vars['items']->value, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['html']->value||$_smarty_tpl->tpl_vars['items']->value){?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
        <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
            <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title">
                <?php if ($_smarty_tpl->tpl_vars['url']->value){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
                <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['count']->value){?>
                    <span class="user-info-group-count"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
                <?php }?>
            </h3>
        <?php }?>

        <div class="user-info-group-content">
            <?php if ($_smarty_tpl->tpl_vars['html']->value){?>
                <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

            <?php }else{ ?>
                <?php echo smarty_function_component(array('_default_short'=>'info-list','list'=>$_smarty_tpl->tpl_vars['items']->value,'classes'=>'user-info-group-items'),$_smarty_tpl);?>

            <?php }?>
        </div>
    </div>
<?php }?>

<?php echo smarty_function_hook(array('run'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-".((string)$_smarty_tpl->tpl_vars['name']->value)."-after"),$_smarty_tpl);?>
<?php }} ?>