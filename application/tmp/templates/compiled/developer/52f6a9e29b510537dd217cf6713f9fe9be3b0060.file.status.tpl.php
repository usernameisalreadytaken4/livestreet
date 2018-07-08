<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 20:06:38
         compiled from "C:\xampp\htdocs\application\plugins\userstatus\frontend\components\p-user\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15769752745b327a5c6885b9-32817205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52f6a9e29b510537dd217cf6713f9fe9be3b0060' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\userstatus\\frontend\\components\\p-user\\status.tpl',
      1 => 1530188540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15769752745b327a5c6885b9-32817205',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b327a5c6c2f47_51684216',
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'user' => 0,
    'status' => 0,
    'sTextStatus' => 0,
    'bCanEdit' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'sPrefixJs' => 0,
    'attributes' => 0,
    'bChooseActivity' => 0,
    'sTextDate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b327a5c6c2f47_51684216')) {function content_5b327a5c6c2f47_51684216($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cfg')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cfg.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_mb_wordwrap')) include 'C:\\xampp\\htdocs\\framework\\libs\\vendor\\Smarty\\libs\\plugins\\shared.mb_wordwrap.php';
if (!is_callable('smarty_function_date_format')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.date_format.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-user-status', null, 0);?>
<?php $_smarty_tpl->tpl_vars['sPrefixJs'] = new Smarty_variable('js-user-status', null, 0);?>

<?php echo smarty_function_component_define_params(array('params'=>array('user','status','mods','classes','attributes')),$_smarty_tpl);?>

<?php echo smarty_function_cfg(array('_default_short'=>'plugin.userstatus.choose_activity','assign'=>"bChooseActivity"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['bCanEdit'] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['user']->value->getId() ? true : false, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['status']->value){?>
    <?php $_smarty_tpl->tpl_vars['sTextStatus'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['status']->value->getText(), ENT_QUOTES, 'UTF-8', true), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sTextDate'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['status']->value->getDate(), ENT_QUOTES, 'UTF-8', true), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sTextStatus']->value||$_smarty_tpl->tpl_vars['bCanEdit']->value){?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>

         <?php if ($_smarty_tpl->tpl_vars['bCanEdit']->value){?><?php echo $_smarty_tpl->tpl_vars['sPrefixJs']->value;?>
<?php }?>"
         <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>

        <?php if ($_smarty_tpl->tpl_vars['bCanEdit']->value){?>
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-editor <?php echo $_smarty_tpl->tpl_vars['sPrefixJs']->value;?>
-editor">
                <form method="POST" class="<?php echo $_smarty_tpl->tpl_vars['sPrefixJs']->value;?>
-form">
                    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'plugin.userstatus.change'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field.textarea','name'=>'text','value'=>$_smarty_tpl->tpl_vars['sTextStatus']->value,'inputClasses'=>((string)$_smarty_tpl->tpl_vars['sPrefixJs']->value)."-form-text",'inputAttributes'=>array('placeholder'=>$_tmp1,'data-value'=>$_smarty_tpl->tpl_vars['sTextStatus']->value)),$_smarty_tpl);?>

                    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'plugin.userstatus.save'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','text'=>$_tmp2,'mods'=>'primary'),$_smarty_tpl);?>


                    <?php if ($_smarty_tpl->tpl_vars['bChooseActivity']->value){?>
                        <?php echo smarty_function_component(array('_default_short'=>'field.checkbox','mods'=>'inline','name'=>'activity','label'=>'Опубликовать в активность','checked'=>true),$_smarty_tpl);?>

                    <?php }?>
                </form>
            </div>
        <?php }?>

        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-block <?php if ($_smarty_tpl->tpl_vars['bCanEdit']->value){?><?php echo $_smarty_tpl->tpl_vars['sPrefixJs']->value;?>
-trigger<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['bCanEdit']->value){?>
                <span class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-text <?php if ($_smarty_tpl->tpl_vars['sTextStatus']->value){?> has<?php }?> <?php if ($_smarty_tpl->tpl_vars['bCanEdit']->value){?><?php echo $_smarty_tpl->tpl_vars['sPrefixJs']->value;?>
-text<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['sTextStatus']->value){?>
                        <?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['sTextStatus']->value,50," ",true);?>

                    <?php }else{ ?>
                        <?php echo smarty_function_lang(array('_default_short'=>'plugin.userstatus.change'),$_smarty_tpl);?>

                    <?php }?>
                </span>
            <?php }else{ ?>
                <?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['sTextStatus']->value,50," ",true);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['sTextStatus']->value&&$_smarty_tpl->tpl_vars['sTextDate']->value){?>
                <span class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-date <?php if ($_smarty_tpl->tpl_vars['bCanEdit']->value){?><?php echo $_smarty_tpl->tpl_vars['sPrefixJs']->value;?>
-date<?php }?>">
                    <?php echo smarty_function_lang(array('_default_short'=>'plugin.userstatus.updated'),$_smarty_tpl);?>

                    <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['sTextDate']->value,'format'=>"F Y",'days_back'=>"365",'hours_back'=>"23",'minutes_back'=>"60",'now'=>"5"),$_smarty_tpl);?>

                </span>
            <?php }?>
        </div>

    </div>
<?php }?><?php }} ?>