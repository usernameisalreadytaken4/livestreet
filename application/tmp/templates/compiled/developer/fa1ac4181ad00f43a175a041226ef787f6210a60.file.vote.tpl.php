<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:24
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/vote/vote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7834311295b34cc34bfb9c0-55344356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa1ac4181ad00f43a175a041226ef787f6210a60' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/vote/vote.tpl',
      1 => 1529954503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7834311295b34cc34bfb9c0-55344356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showRating' => 0,
    'target' => 0,
    'rating' => 0,
    'vote' => 0,
    'oUserCurrent' => 0,
    'isLocked' => 0,
    'mods' => 0,
    'component' => 0,
    'classes' => 0,
    'attributes' => 0,
    'useAbstain' => 0,
    'aLang' => 0,
    'iconMod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc34d12fc5_24680659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc34d12fc5_24680659')) {function content_5b34cc34d12fc5_24680659($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-vote', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('showRating','target','isLocked','useAbstain','mods','classes','attributes')),$_smarty_tpl);?>



<?php $_smarty_tpl->tpl_vars['showRating'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['showRating']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>


<?php $_smarty_tpl->tpl_vars['rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['target']->value->getRating(), null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['showRating']->value){?>
    <?php if ($_smarty_tpl->tpl_vars['rating']->value>0){?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." count-positive", null, 0);?>
    <?php }elseif($_smarty_tpl->tpl_vars['rating']->value<0){?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." count-negative", null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." count-zero", null, 0);?>
    <?php }?>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['vote'])) $_smarty_tpl->tpl_vars['vote'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['vote']->value = $_smarty_tpl->tpl_vars['target']->value->getVote()){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." voted", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['vote']->value->getDirection()>0){?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." voted-up", null, 0);?>
    <?php }elseif($_smarty_tpl->tpl_vars['vote']->value->getDirection()<0){?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." voted-down", null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." voted-zero", null, 0);?>
    <?php }?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." not-voted", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value||$_smarty_tpl->tpl_vars['isLocked']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." locked", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['showRating']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." rating-hidden", null, 0);?>
<?php }?>


<?php $_smarty_tpl->tpl_vars['iconMod'] = new Smarty_variable(in_array('small',explode(' ',$_smarty_tpl->tpl_vars['mods']->value)) ? 'white' : '', null, 0);?>



<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
 data-param-i-target-id="<?php echo $_smarty_tpl->tpl_vars['target']->value->getId();?>
">
    
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-body">
        
            
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-rating js-vote-rating">
                <?php if ($_smarty_tpl->tpl_vars['showRating']->value){?>
                    <?php echo $_smarty_tpl->tpl_vars['rating']->value;?>

                <?php }else{ ?>
                    ?
                <?php }?>
            </div>

            
            <?php if ($_smarty_tpl->tpl_vars['useAbstain']->value){?>
                <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-abstain js-vote-item" <?php if (!$_smarty_tpl->tpl_vars['vote']->value){?>title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value[$_smarty_tpl->tpl_vars['component']->value]['abstain'];?>
"<?php }?> data-vote-value="0">
                    <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'eye','mods'=>$_smarty_tpl->tpl_vars['iconMod']->value),$_smarty_tpl);?>

                </div>
            <?php }?>

            
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-up js-vote-item" <?php if (!$_smarty_tpl->tpl_vars['vote']->value){?>title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value[$_smarty_tpl->tpl_vars['component']->value]['up'];?>
"<?php }?> data-vote-value="1">
                <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'plus','mods'=>$_smarty_tpl->tpl_vars['iconMod']->value),$_smarty_tpl);?>

            </div>

            
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-down js-vote-item" <?php if (!$_smarty_tpl->tpl_vars['vote']->value){?>title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value[$_smarty_tpl->tpl_vars['component']->value]['down'];?>
"<?php }?> data-vote-value="-1">
                <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'minus','mods'=>$_smarty_tpl->tpl_vars['iconMod']->value),$_smarty_tpl);?>

            </div>
        
    </div>
</div><?php }} ?>