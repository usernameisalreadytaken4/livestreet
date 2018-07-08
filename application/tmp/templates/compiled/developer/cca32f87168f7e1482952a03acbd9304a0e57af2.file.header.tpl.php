<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:04:03
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21460060565b34ceb33f5178-83872294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cca32f87168f7e1482952a03acbd9304a0e57af2' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/header.tpl',
      1 => 1529954501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21460060565b34ceb33f5178-83872294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'mods' => 0,
    'component' => 0,
    'classes' => 0,
    'attributes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34ceb3497b90_37167971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ceb3497b90_37167971')) {function content_5b34ceb3497b90_37167971($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_hook')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_block_hookb')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/block.hookb.php';
if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('user-profile', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('user','mods','classes','attributes')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileName()){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." has-name", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['user']->value->isOnline()){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." is-online", null, 0);?>
<?php }?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 ls-clearfix" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <?php echo smarty_function_hook(array('run'=>'user_header_begin','user'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>


    
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-user ls-clearfix">
        <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value->getUserWebPath();?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->getProfileAvatarPath(100);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->getProfileName();?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-user-avatar js-user-profile-avatar" itemprop="photo">
        </a>

        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-user-body">
            <h2 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-user-login" itemprop="nickname">
                <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value->getUserWebPath();?>
">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->getLogin();?>

                </a>
            </h2>

            <?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileName()){?>
                <p class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-user-name" itemprop="name">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>

                </p>
            <?php }?>
        </div>
    </div>

    

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookb', array('run'=>'user_rating','user'=>$_smarty_tpl->tpl_vars['user']->value)); $_block_repeat=true; echo smarty_block_hookb(array('run'=>'user_rating','user'=>$_smarty_tpl->tpl_vars['user']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-rating">
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-rating-label"><?php echo smarty_function_lang(array('_default_short'=>'vote.rating'),$_smarty_tpl);?>
</div>
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-rating-value"><?php echo $_smarty_tpl->tpl_vars['user']->value->getRating();?>
</div>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hookb(array('run'=>'user_rating','user'=>$_smarty_tpl->tpl_vars['user']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    
    <?php echo smarty_function_hook(array('run'=>'user_header_end','user'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>

</div><?php }} ?>