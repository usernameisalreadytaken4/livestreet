<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:28:03
         compiled from "E:\XAMPP\htdocs\framework\frontend\components\more\more.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3184258575b4257b39e9144-18625979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75c950cecac3af0f3bc7fd6966499dd211385a13' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\framework\\frontend\\components\\more\\more.tpl',
      1 => 1530188566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3184258575b4257b39e9144-18625979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'ajaxParams' => 0,
    'append' => 0,
    'target' => 0,
    'count' => 0,
    'text_count' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b3a00842_93281308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b3a00842_93281308')) {function content_5b4257b3a00842_93281308($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_lang')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-more', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('text','text_count','target','count','append','mods','classes','attributes','ajaxParams')),$_smarty_tpl);?>




<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
"
    tabindex="0"
    <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>

    <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['ajaxParams']->value,'prefix'=>'data-param-'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['append']->value){?>data-lsmore-append="<?php echo $_smarty_tpl->tpl_vars['append']->value;?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['target']->value){?>data-lsmore-target="<?php echo $_smarty_tpl->tpl_vars['target']->value;?>
"<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['count']->value)){?>data-lsmore-count="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
"<?php }?>>

    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-loader ls-loading"></div>

    
    
        <span class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-text js-more-text">
            <?php if (isset($_smarty_tpl->tpl_vars['count']->value)){?>
                <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'more.text_count','count'=>$_smarty_tpl->tpl_vars['count']->value,'plural'=>true),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['text_count']->value)===null||$tmp==='' ? $_tmp1 : $tmp);?>

            <?php }else{ ?>
                <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'more.text'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? $_tmp2 : $tmp);?>

            <?php }?>
        </span>
    
</div><?php }} ?>