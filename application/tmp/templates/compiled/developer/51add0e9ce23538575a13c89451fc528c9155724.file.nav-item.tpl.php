<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:28:00
         compiled from "E:\XAMPP\htdocs\framework\frontend\components\nav\nav-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2192176695b4257b0452a34-76954280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51add0e9ce23538575a13c89451fc528c9155724' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\framework\\frontend\\components\\nav\\nav-item.tpl',
      1 => 1530188566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2192176695b4257b0452a34-76954280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show' => 0,
    'url' => 0,
    'menu' => 0,
    'mods' => 0,
    'count' => 0,
    'isActive' => 0,
    'classes' => 0,
    'target' => 0,
    'component' => 0,
    'attributes' => 0,
    'data' => 0,
    'showZeroCounter' => 0,
    'icon' => 0,
    'text' => 0,
    'isRoot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b04856c2_44429866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b04856c2_44429866')) {function content_5b4257b04856c2_44429866($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-nav-item', null, 0);?>

<?php echo smarty_function_component_define_params(array('params'=>array('menu','url','text','icon','showZeroCounter','activeItem','count','isRoot','isActive','show','data','mods','classes','attributes','target')),$_smarty_tpl);?>



<?php $_smarty_tpl->tpl_vars['show'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['url']->value)===null||$tmp==='' ? '#' : $tmp), null, 0);?>


<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable($_smarty_tpl->tpl_vars['menu']->value ? ((string)$_smarty_tpl->tpl_vars['mods']->value)." has-children" : $_smarty_tpl->tpl_vars['mods']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value ? ((string)$_smarty_tpl->tpl_vars['mods']->value)." has-badge" : $_smarty_tpl->tpl_vars['mods']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable($_smarty_tpl->tpl_vars['isActive']->value ? ((string)$_smarty_tpl->tpl_vars['classes']->value)." active" : $_smarty_tpl->tpl_vars['classes']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['target'] = new Smarty_variable($_smarty_tpl->tpl_vars['target']->value ? "target=\"".((string)$_smarty_tpl->tpl_vars['target']->value)."\"" : '', null, 0);?>





<?php if ($_smarty_tpl->tpl_vars['show']->value){?>
    <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
 role="menuitem"
        <?php  $_smarty_tpl->tpl_vars['dataItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dataItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dataItem']->key => $_smarty_tpl->tpl_vars['dataItem']->value){
$_smarty_tpl->tpl_vars['dataItem']->_loop = true;
?>
            data-<?php echo $_smarty_tpl->tpl_vars['dataItem']->key;?>
=<?php echo $_smarty_tpl->tpl_vars['dataItem']->value;?>

        <?php } ?>>

        
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-link" <?php echo $_smarty_tpl->tpl_vars['target']->value;?>
>
            
            <?php if (isset($_smarty_tpl->tpl_vars['count']->value)&&($_smarty_tpl->tpl_vars['showZeroCounter']->value||(!$_smarty_tpl->tpl_vars['showZeroCounter']->value&&$_smarty_tpl->tpl_vars['count']->value>0))){?>
                <?php echo smarty_function_component(array('_default_short'=>'badge','value'=>$_smarty_tpl->tpl_vars['count']->value,'classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-badge"),$_smarty_tpl);?>

            <?php }?>

            
            <?php if (is_array($_smarty_tpl->tpl_vars['icon']->value)){?>
                <?php echo smarty_function_component(array('_default_short'=>'icon','attributes'=>array('aria-hidden'=>'true'),'params'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);?>

            <?php }elseif($_smarty_tpl->tpl_vars['icon']->value){?>
                <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>$_smarty_tpl->tpl_vars['icon']->value,'attributes'=>array('aria-hidden'=>'true')),$_smarty_tpl);?>

            <?php }?>

            
            <span class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-text">
                <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

            </span>

            
            <?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
                <div class="ls-caret <?php if (!$_smarty_tpl->tpl_vars['isRoot']->value){?>ls-caret--right<?php }?> <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-caret"></div>
            <?php }?>
        </a>

        
        <?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
            <?php echo smarty_function_component(array('_default_short'=>'nav','mods'=>'stacked','isSubnav'=>true,'params'=>$_smarty_tpl->tpl_vars['menu']->value),$_smarty_tpl);?>

        <?php }?>
    </li>
<?php }?>
<?php }} ?>