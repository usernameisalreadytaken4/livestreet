<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:04:03
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/blocks/block.user-photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18380986685b34ceb3159f09-69532279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08b69619558eff7bd89ec8d0265f835023ecdbe2' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/blocks/block.user-photo.tpl',
      1 => 1529954501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18380986685b34ceb3159f09-69532279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserProfile' => 0,
    'session' => 0,
    'aLang' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34ceb31da607_63381343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ceb31da607_63381343')) {function content_5b34ceb31da607_63381343($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('block_content', null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['session'] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserProfile']->value->getSession(), null, 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['session']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->isOnline()&&time()-strtotime($_smarty_tpl->tpl_vars['session']->value->getDateLast())<60*5){?>
            <div class="user-status user-status--online"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user']['status']['online'];?>
</div>
        <?php }else{ ?>
            <div class="user-status user-status--offline">
                <?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['session']->value->getDateLast(),'hours_back'=>"12",'minutes_back'=>"60",'day_back'=>"8",'now'=>"60*5",'day'=>"day H:i",'format'=>"j F в G:i"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['date'] = new Smarty_variable(mb_strtolower($_tmp1, 'UTF-8'), null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileSex()!='woman'){?>
                    <?php echo smarty_function_lang(array('_default_short'=>'user.status.was_online_male','date'=>$_smarty_tpl->tpl_vars['date']->value),$_smarty_tpl);?>

                <?php }else{ ?>
                    <?php echo smarty_function_lang(array('_default_short'=>'user.status.was_online_female','date'=>$_smarty_tpl->tpl_vars['date']->value),$_smarty_tpl);?>

                <?php }?>
            </div>
        <?php }?>
    <?php }?>

    <?php echo smarty_function_component(array('_default_short'=>'photo','classes'=>'js-user-photo','hasPhoto'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileFoto(),'editable'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->isAllowEdit(),'targetId'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->getId(),'url'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath(),'photoPath'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileFotoPath(),'photoAltText'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->getDisplayName()),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'user-photo','content'=>Smarty::$_smarty_vars['capture']['block_content']),$_smarty_tpl);?>
<?php }} ?>