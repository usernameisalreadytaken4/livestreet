<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:40
         compiled from "E:\XAMPP\htdocs\application\frontend\components\user\list\user-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7678535905b4257b3973e28-06468951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '738a50f84c62166ca94f7aacfedfb8d24288336a' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\user\\list\\user-list.tpl',
      1 => 1531074621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7678535905b4257b3973e28-06468951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b39876a4_20183619',
  'variables' => 
  array (
    'users' => 0,
    'useMore' => 0,
    'hideMore' => 0,
    'pagination' => 0,
    'textEmpty' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b39876a4_20183619')) {function content_5b4257b39876a4_20183619($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_lang')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('users','pagination','users','useMore','hideMore','textEmpty')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['users']->value){?>
    
    <?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'list-loop','users'=>$_smarty_tpl->tpl_vars['users']->value),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'item.group','classes'=>'js-more-users-container','items'=>$_tmp1),$_smarty_tpl);?>


    
    <?php if ($_smarty_tpl->tpl_vars['useMore']->value){?>
        <?php if (!$_smarty_tpl->tpl_vars['hideMore']->value){?>
            <?php echo smarty_function_component(array('_default_short'=>'more','classes'=>'js-more-search','target'=>'.js-more-users-container','ajaxParams'=>array('next_page'=>2)),$_smarty_tpl);?>

        <?php }?>
    <?php }else{ ?>
        <?php echo smarty_function_component(array('_default_short'=>'pagination','total'=>+$_smarty_tpl->tpl_vars['pagination']->value['iCountPage'],'current'=>+$_smarty_tpl->tpl_vars['pagination']->value['iCurrentPage'],'url'=>((string)$_smarty_tpl->tpl_vars['pagination']->value['sBaseUrl'])."/page__page__/"),$_smarty_tpl);?>

    <?php }?>
<?php }else{ ?>
    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.notices.empty'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'blankslate','text'=>(($tmp = @$_smarty_tpl->tpl_vars['textEmpty']->value)===null||$tmp==='' ? $_tmp2 : $tmp)),$_smarty_tpl);?>

<?php }?><?php }} ?>