<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:24
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/jumbotron/jumbotron.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7497088745b34cc347df8e2-82286723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c1f9aea148c346173248e4d367341fa4e282fa5' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/jumbotron/jumbotron.tpl',
      1 => 1529954586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7497088745b34cc347df8e2-82286723',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc34835a81_31569834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc34835a81_31569834')) {function content_5b34cc34835a81_31569834($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
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