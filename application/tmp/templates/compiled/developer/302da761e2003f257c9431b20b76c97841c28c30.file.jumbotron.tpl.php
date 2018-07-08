<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:44:40
         compiled from "C:\xampp\htdocs\framework\frontend\components\jumbotron\jumbotron.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13230870905b32695c3544f3-47424927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '302da761e2003f257c9431b20b76c97841c28c30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\jumbotron\\jumbotron.tpl',
      1 => 1530188565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13230870905b32695c3544f3-47424927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b32695c367d75_26167474',
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'titleUrl' => 0,
    'subtitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b32695c367d75_26167474')) {function content_5b32695c367d75_26167474($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-jumbotron', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('title','subtitle','titleUrl','content','mods','classes','attributes')),$_smarty_tpl);?>





<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-inner">
        
            
            <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
                <h1 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title">
                    <?php if ($_smarty_tpl->tpl_vars['titleUrl']->value){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['titleUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <?php }?>
                </h1>
            <?php }?>

            
            <?php if ($_smarty_tpl->tpl_vars['subtitle']->value){?>
                <h2 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-subtitle">
                    <?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>

                </h2>
            <?php }?>
        
    </div>
</div><?php }} ?>