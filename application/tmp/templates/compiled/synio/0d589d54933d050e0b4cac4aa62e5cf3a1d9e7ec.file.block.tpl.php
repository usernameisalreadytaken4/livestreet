<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:26:46
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\block\block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18323521345b3269463d4367-66753719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d589d54933d050e0b4cac4aa62e5cf3a1d9e7ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\block\\block.tpl',
      1 => 1493631808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18323521345b3269463d4367-66753719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show' => 0,
    'tabs' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'titleUrl' => 0,
    'content' => 0,
    'list' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3269463ff2f2_65158531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3269463ff2f2_65158531')) {function content_5b3269463ff2f2_65158531($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-block', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('title','content','show','footer','list','tabs','mods','classes','attributes')),$_smarty_tpl);?>




<?php $_smarty_tpl->tpl_vars['show'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['tabs']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." has-tabs", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show']->value){?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
        
        <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
            <header class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-header">
                
                    <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title">
                        <?php if ($_smarty_tpl->tpl_vars['titleUrl']->value){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['titleUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                        <?php }?>
                    </h3>
                
            </header>
        <?php }?>

        

        
        <?php if ($_smarty_tpl->tpl_vars['content']->value){?>
            
                <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-content">
                    
                        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                    
                </div>
            
        <?php }?>

        

        
        <?php if (is_array($_smarty_tpl->tpl_vars['list']->value)){?>
            <?php echo smarty_function_component(array('_default_short'=>'item','template'=>'group','params'=>$_smarty_tpl->tpl_vars['list']->value),$_smarty_tpl);?>

        <?php }elseif($_smarty_tpl->tpl_vars['list']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

        <?php }?>

        
        <?php if (is_array($_smarty_tpl->tpl_vars['tabs']->value)){?>
            <?php echo smarty_function_component(array('_default_short'=>'tabs','classes'=>'js-tabs-block','params'=>$_smarty_tpl->tpl_vars['tabs']->value),$_smarty_tpl);?>

        <?php }elseif($_smarty_tpl->tpl_vars['tabs']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['tabs']->value;?>

        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['footer']->value){?>
            
                <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-footer">
                    
                        <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

                    
                </div>
            
        <?php }?>

        
    </div>
<?php }?><?php }} ?>