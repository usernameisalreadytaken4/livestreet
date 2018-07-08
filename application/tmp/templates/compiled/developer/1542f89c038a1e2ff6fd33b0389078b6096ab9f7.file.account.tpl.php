<?php /* Smarty version Smarty-3.1.13, created on 2018-07-04 18:32:01
         compiled from "C:\xampp\htdocs\application\frontend\components\user\settings\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16096843865b3ce871ac8ba1-31558690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1542f89c038a1e2ff6fd33b0389078b6096ab9f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\user\\settings\\account.tpl',
      1 => 1530188510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16096843865b3ce871ac8ba1-31558690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3ce871ae7fb7_64735277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3ce871ae7fb7_64735277')) {function content_5b3ce871ae7fb7_64735277($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_hook')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('user')),$_smarty_tpl);?>


<?php echo smarty_function_hook(array('run'=>'settings_account_begin'),$_smarty_tpl);?>


<form method="post" enctype="multipart/form-data" class="js-form-validate">
    
    <?php echo smarty_function_hook(array('run'=>'user_settings_account_begin'),$_smarty_tpl);?>


    <fieldset>
        <legend><?php echo smarty_function_lang(array('name'=>'user.settings.account.account'),$_smarty_tpl);?>
</legend>

        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.settings.account.fields.email.note'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'email','value'=>$_smarty_tpl->tpl_vars['user']->value->getMail(),'note'=>$_tmp1),$_smarty_tpl);?>

    </fieldset>


    <fieldset>
        <legend><?php echo smarty_function_lang(array('name'=>'user.settings.account.password'),$_smarty_tpl);?>
</legend>

        <p class="text-info"><?php echo smarty_function_lang(array('name'=>'user.settings.account.password_note'),$_smarty_tpl);?>
</p>

        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.settings.account.fields.password.label'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'password_now','type'=>'password','inputClasses'=>'ls-width-200','label'=>$_tmp2),$_smarty_tpl);?>


        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.settings.account.fields.password_new.label'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'password','rules'=>array('length'=>'[5,20]'),'type'=>'password','inputClasses'=>'ls-width-200 js-user-settings-password','label'=>$_tmp3),$_smarty_tpl);?>


        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.settings.account.fields.password_confirm.label'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'password_confirm','rules'=>array('length'=>'[5,20]','equalto'=>'.js-user-settings-password'),'type'=>'password','inputClasses'=>'ls-width-200','label'=>$_tmp4),$_smarty_tpl);?>

    </fieldset>

    
    <?php echo smarty_function_hook(array('run'=>'user_settings_account_end'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden.security-key'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['save']),$_smarty_tpl);?>

</form>

<?php echo smarty_function_hook(array('run'=>'settings_account_end'),$_smarty_tpl);?>
<?php }} ?>