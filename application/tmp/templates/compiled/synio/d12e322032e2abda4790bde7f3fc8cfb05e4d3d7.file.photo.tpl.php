<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:26:48
         compiled from "C:\xampp\htdocs\application\frontend\components\photo\photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13808917525b3269489e3881-23859645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd12e322032e2abda4790bde7f3fc8cfb05e4d3d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\photo\\photo.tpl',
      1 => 1493631808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13808917525b3269489e3881-23859645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'useAvatar' => 0,
    'hasPhoto' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'targetId' => 0,
    'attributes' => 0,
    'url' => 0,
    'photoPath' => 0,
    'photoAltText' => 0,
    'editable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3269489fee09_21240800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3269489fee09_21240800')) {function content_5b3269489fee09_21240800($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-photo', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('url','photoPath','photoAltText','hasPhoto','useAvatar','targetId','editable','mods','classes','attributes')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['useAvatar'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['useAvatar']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['hasPhoto']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." nophoto", null, 0);?>
<?php }?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
"
    data-target-id="<?php echo $_smarty_tpl->tpl_vars['targetId']->value;?>
"
    <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>

    
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['photoPath']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['photoAltText']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-image js-photo-image" />
    </a>

    
    <?php if ($_smarty_tpl->tpl_vars['editable']->value){?>
        <ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-actions">
            
            <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-actions-upload js-photo-actions-upload">
                <label class="form-input-file">
                    <span class="js-photo-actions-upload-label">
                        <?php if ($_smarty_tpl->tpl_vars['hasPhoto']->value){?>
                            <?php echo smarty_function_lang(array('_default_short'=>'user.photo.actions.change_photo'),$_smarty_tpl);?>

                        <?php }else{ ?>
                            <?php echo smarty_function_lang(array('_default_short'=>'user.photo.actions.upload_photo'),$_smarty_tpl);?>

                        <?php }?>
                    </span>
                    <input type="file" name="photo" class="js-photo-actions-upload-input">
                </label>
            </li>

            
            <?php if ($_smarty_tpl->tpl_vars['useAvatar']->value){?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-actions-crop-avatar js-photo-actions-crop-avatar">
                    <?php echo smarty_function_lang(array('_default_short'=>'user.photo.actions.change_avatar'),$_smarty_tpl);?>

                </li>
            <?php }?>

            
            <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-actions-remove js-photo-actions-remove">
                <?php echo smarty_function_lang(array('_default_short'=>'user.photo.actions.remove'),$_smarty_tpl);?>

            </li>
        </ul>
    <?php }?>
</div><?php }} ?>