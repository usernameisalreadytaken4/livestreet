<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:04:03
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/wall/wall.posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9808856805b34ceb3c3ab26-69769869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cba591189be3921d39f70b5fd47d30b7e331302b' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/wall/wall.posts.tpl',
      1 => 1529954503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9808856805b34ceb3c3ab26-69769869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
    'comments' => 0,
    'postId' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34ceb3cb2187_69618219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ceb3cb2187_69618219')) {function content_5b34ceb3cb2187_69618219($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('posts')),$_smarty_tpl);?>


<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['comments'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value->getLastReplyWall(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['postId'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value->getId(), null, 0);?>

    
    <?php echo smarty_function_component(array('_default_short'=>'wall','template'=>'entry','entry'=>$_smarty_tpl->tpl_vars['post']->value,'showReply'=>!$_smarty_tpl->tpl_vars['comments']->value,'classes'=>'wall-post js-wall-post','type'=>'post'),$_smarty_tpl);?>


    
    <div class="wall-comments js-wall-comment-wrapper" data-id="<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
">
        
        <?php if (count($_smarty_tpl->tpl_vars['comments']->value)<$_smarty_tpl->tpl_vars['post']->value->getCountReply()){?>
            <?php echo smarty_function_component(array('_default_short'=>'more','classes'=>'wall-more-comments js-wall-more-comments','count'=>$_smarty_tpl->tpl_vars['post']->value->getCountReply()-Config::Get('module.wall.count_last_reply'),'target'=>".js-wall-entry-container[data-id=".((string)$_smarty_tpl->tpl_vars['postId']->value)."]",'ajaxParams'=>array('last_id'=>$_smarty_tpl->tpl_vars['comments']->value[0]->getId(),'target_id'=>$_smarty_tpl->tpl_vars['postId']->value)),$_smarty_tpl);?>

        <?php }?>

        
        <div class="js-wall-entry-container" data-id="<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
">
            <?php if ($_smarty_tpl->tpl_vars['comments']->value){?>
                <?php echo smarty_function_component(array('_default_short'=>'wall','template'=>'comments','comments'=>$_smarty_tpl->tpl_vars['comments']->value),$_smarty_tpl);?>

            <?php }?>
        </div>

        
        <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
            <?php echo smarty_function_component(array('_default_short'=>'wall','template'=>'form','id'=>$_smarty_tpl->tpl_vars['postId']->value,'display'=>$_smarty_tpl->tpl_vars['comments']->value,'placeholder'=>$_smarty_tpl->tpl_vars['aLang']->value['wall']['form']['fields']['text']['placeholder_reply']),$_smarty_tpl);?>

        <?php }?>
    </div>
<?php } ?><?php }} ?>