<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:57:42
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/actionbar/actionbar-button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7189660025b34cd36771889-72345382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f31aa983200e77b412a1626dba3bfda20d750e59' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/actionbar/actionbar-button.tpl',
      1 => 1529954561,
      2 => 'file',
    ),
    'f5578c61c0d14f4c10190aa26950327f93f8fa38' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/button/button.tpl',
      1 => 1529954563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7189660025b34cd36771889-72345382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icon' => 0,
    'text' => 0,
    'url' => 0,
    'type' => 0,
    'tag' => 0,
    'value' => 0,
    'name' => 0,
    '_aRequest' => 0,
    'isDisabled' => 0,
    'form' => 0,
    'id' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'badge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cd368178a3_22407300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cd368178a3_22407300')) {function content_5b34cd368178a3_22407300($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-button', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('type','text','value','url','id','name','badge','isDisabled','form','icon','mods','classes','attributes')),$_smarty_tpl);?>



<?php if ($_smarty_tpl->tpl_vars['icon']->value&&!$_smarty_tpl->tpl_vars['text']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." icon", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['tag'] = new Smarty_variable($_smarty_tpl->tpl_vars['url']->value ? 'a' : 'button', null, 0);?>
<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 'submit' : $tmp), null, 0);?>


<<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>

        <?php if (!$_smarty_tpl->tpl_vars['url']->value){?>
            type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"
            value="<?php if ($_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['name']->value])){?><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['name']->value];?>
<?php }?>"
            <?php if ($_smarty_tpl->tpl_vars['isDisabled']->value){?>disabled<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['form']->value){?>form="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
"<?php }?>
        <?php }else{ ?>
            href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"
            role="button"
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['id']->value){?>id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['name']->value){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>
        class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
"
        <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <?php if ($_smarty_tpl->tpl_vars['icon']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>$_smarty_tpl->tpl_vars['icon']->value,'attributes'=>array('aria-hidden'=>'true')),$_smarty_tpl);?>

    <?php }?>

    
    <?php echo $_smarty_tpl->tpl_vars['text']->value;?>


    <?php if ($_smarty_tpl->tpl_vars['badge']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'badge','params'=>$_smarty_tpl->tpl_vars['badge']->value),$_smarty_tpl);?>

    <?php }?>
</<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
><?php }} ?>