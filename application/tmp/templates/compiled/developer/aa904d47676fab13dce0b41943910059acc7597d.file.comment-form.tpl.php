<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:37
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/comment/comment-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16520580125b34cf4d88cca9-18916054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa904d47676fab13dce0b41943910059acc7597d' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/comment/comment-form.tpl',
      1 => 1529954493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16520580125b34cf4d88cca9-18916054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'targetId' => 0,
    'targetType' => 0,
    'attributes' => 0,
    'params' => 0,
    'editorSet' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cf4d91a080_76979955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4d91a080_76979955')) {function content_5b34cf4d91a080_76979955($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_hook')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-comment-form', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('editorSet','targetId','targetType','mods','classes','attributes')),$_smarty_tpl);?>



<form method           = "post"
      class            = "<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
"
      enctype          = "multipart/form-data"
      data-target-id   = "<?php echo $_smarty_tpl->tpl_vars['targetId']->value;?>
"
      data-target-type = "<?php echo $_smarty_tpl->tpl_vars['targetType']->value;?>
"
      <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
        
        <?php echo smarty_function_hook(array('run'=>'comment_form_begin','params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>


        
            
            <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'reply','value'=>'0','inputClasses'=>'js-comment-form-id'),$_smarty_tpl);?>

            <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'comment_target_id','value'=>$_smarty_tpl->tpl_vars['targetId']->value),$_smarty_tpl);?>


            
            <?php echo smarty_function_component(array('_default_short'=>'editor','set'=>(($tmp = @$_smarty_tpl->tpl_vars['editorSet']->value)===null||$tmp==='' ? 'light' : $tmp),'name'=>'comment_text','inputClasses'=>'js-comment-form-text','help'=>false,'mediaTargetType'=>'comment'),$_smarty_tpl);?>

        

        
        <?php echo smarty_function_hook(array('run'=>'comment_form_fields_after','params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>


        

        
        <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_comment','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['add'],'mods'=>'primary','classes'=>'js-comment-form-submit'),$_smarty_tpl);?>


        
        <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_comment','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['save'],'mods'=>'primary','classes'=>'js-comment-form-update-submit hide'),$_smarty_tpl);?>

        <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_comment','type'=>'button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['cancel'],'classes'=>'js-comment-form-update-cancel ls-fl-r'),$_smarty_tpl);?>


        
        <?php echo smarty_function_component(array('_default_short'=>'button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['preview_text'],'type'=>'button','classes'=>'js-comment-form-preview'),$_smarty_tpl);?>


        
        <?php echo smarty_function_hook(array('run'=>'comment_form_end','params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>

    
</form><?php }} ?>