<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:37
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/topicsimilar/frontend/skin/default/blocks/block.similar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11363142875b34cf4d739250-32070096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c892bc61a8baaf16e00f8bf814e786f499c71a0a' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/topicsimilar/frontend/skin/default/blocks/block.similar.tpl',
      1 => 1529958468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11363142875b34cf4d739250-32070096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aSimilarTopics' => 0,
    'oSimilarTopic' => 0,
    'oSimilarTopicUser' => 0,
    'topic' => 0,
    'similarItems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cf4d7e0326_38642883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4d7e0326_38642883')) {function content_5b34cf4d7e0326_38642883($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
?>


<?php $_smarty_tpl->_capture_stack[0][] = array('similar_content', null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['aSimilarTopics']->value){?>
        <?php $_smarty_tpl->tpl_vars['similarItems'] = new Smarty_variable(array(), null, 0);?>

        <?php  $_smarty_tpl->tpl_vars['oSimilarTopic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oSimilarTopic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aSimilarTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oSimilarTopic']->key => $_smarty_tpl->tpl_vars['oSimilarTopic']->value){
$_smarty_tpl->tpl_vars['oSimilarTopic']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['oSimilarTopicUser'] = new Smarty_variable($_smarty_tpl->tpl_vars['oSimilarTopic']->value->getUser(), null, 0);?>

            <?php $_smarty_tpl->_capture_stack[0][] = array('item_content', null, null); ob_start(); ?>
                <ul class="ls-topic-similar-info">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['oSimilarTopicUser']->value->getUserWebPath();?>
" class="ls-topic-similar-user"><?php echo $_smarty_tpl->tpl_vars['oSimilarTopicUser']->value->getDisplayName();?>
</a>
                    </li>
                    <li>
                        <time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oSimilarTopic']->value->getDatePublish(),'format'=>'c'),$_smarty_tpl);?>
" class="ls-topic-similar-date">
                            <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oSimilarTopic']->value->getDatePublish(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y"),$_smarty_tpl);?>

                        </time>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['topic']->value->getUrl();?>
#comments" class="ls-topic-similar-comments">
                            <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'comments'),$_smarty_tpl);?>

                            <?php echo smarty_function_lang(array('_default_short'=>'comments.comments_declension','count'=>$_smarty_tpl->tpl_vars['oSimilarTopic']->value->getCountComment(),'plural'=>true),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['oSimilarTopic']->value->getCountCommentNew()){?><span>+<?php echo $_smarty_tpl->tpl_vars['oSimilarTopic']->value->getCountCommentNew();?>
</span><?php }?>
                        </a>
                    </li>
                </ul>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php $_smarty_tpl->createLocalArrayVariable('similarItems', null, 0);
$_smarty_tpl->tpl_vars['similarItems']->value[] = array('element'=>'li','mods'=>'image-rounded','title'=>$_smarty_tpl->tpl_vars['oSimilarTopic']->value->getTitle(),'titleUrl'=>$_smarty_tpl->tpl_vars['oSimilarTopic']->value->getUrl(),'content'=>Smarty::$_smarty_vars['capture']['item_content'],'image'=>array('path'=>$_smarty_tpl->tpl_vars['oSimilarTopicUser']->value->getProfileAvatarPath(48),'url'=>$_smarty_tpl->tpl_vars['oSimilarTopicUser']->value->getUserWebPath()));?>
        <?php } ?>

        <?php echo smarty_function_component(array('_default_short'=>'item','template'=>'group','items'=>$_smarty_tpl->tpl_vars['similarItems']->value),$_smarty_tpl);?>

    <?php }else{ ?>
        <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.empty'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'blankslate','text'=>$_tmp1,'mods'=>'no-background'),$_smarty_tpl);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'plugin.topicsimilar.block.title'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'similar-topics','classes'=>'js-block-default','title'=>$_tmp2,'content'=>Smarty::$_smarty_vars['capture']['similar_content']),$_smarty_tpl);?>

<?php }} ?>