<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:21
         compiled from "C:\xampp\htdocs\application\frontend\components\blog\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15884836135b35029183a116-23272167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '936c9fbd866d03d06e33509cfdd42d1a5943dab2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\blog\\add.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15884836135b35029183a116-23272167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    '_aRequest' => 0,
    'oUserCurrent' => 0,
    'blog' => 0,
    'sEvent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b350291874aa4_87965266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b350291874aa4_87965266')) {function content_5b350291874aa4_87965266($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_hook')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_insert_block')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\insert.block.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('blog')),$_smarty_tpl);?>


<form method="post" enctype="multipart/form-data" class="js-blog-add js-form-validate">
    <?php echo smarty_function_hook(array('run'=>'form_add_blog_begin'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'blog_title','rules'=>array('required'=>true,'length'=>"[2,200]"),'note'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['title']['note'],'label'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['title']['label']),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'blog_url','rules'=>array('required'=>true,'regexp'=>'^[\w- ]{2,50}$'),'isDisabled'=>$_smarty_tpl->tpl_vars['_aRequest']->value['blog_id']&&!$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator(),'note'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['url']['note'],'label'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['url']['label']),$_smarty_tpl);?>


    
    <?php if (Config::Get('module.blog.category_allow')&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||!Config::Get('module.blog.category_only_admin'))){?>
        
        <?php echo smarty_insert_block(array('block' => 'fieldCategory', 'params' => array('target'=>$_smarty_tpl->tpl_vars['blog']->value,'entity'=>'ModuleBlog_EntityBlog')),$_smarty_tpl);?>

    <?php }?>

    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'select','name'=>'blog_type','label'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['type']['label'],'note'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['type']['note_open'],'classes'=>'js-blog-add-field-type','inputClasses'=>'ls-width-200 js-blog-add-type','selectedValue'=>$_smarty_tpl->tpl_vars['_aRequest']->value['blog_type'],'items'=>array(array('value'=>'open','text'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['type']['value_open']),array('value'=>'close','text'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['type']['value_close']))),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'editor','mediaTargetType'=>'blog','mediaTargetId'=>$_smarty_tpl->tpl_vars['_aRequest']->value['blog_id'],'name'=>'blog_description','rules'=>array('required'=>true,'length'=>'[10,3000]'),'inputClasses'=>'js-editor-default','label'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['description']['label']),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'blog_limit_rating_topic','rules'=>array('required'=>true,'type'=>'number'),'value'=>$_smarty_tpl->tpl_vars['_aRequest']->value ? $_smarty_tpl->tpl_vars['_aRequest']->value['blog_limit_rating_topic'] : '0','inputClasses'=>'ls-width-100','note'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['rating']['note'],'label'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['rating']['label']),$_smarty_tpl);?>


    
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'blog_skip_index','note'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['skip_index']['note'],'label'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['add']['fields']['skip_index']['label']),$_smarty_tpl);?>

    <?php }?>


    <?php echo smarty_function_hook(array('run'=>'form_add_blog_end'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden.security-key'),$_smarty_tpl);?>


    
    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>((string)($_smarty_tpl->tpl_vars['sEvent']->value=='add' ? 'common.create' : 'common.save'))),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_blog_add','text'=>$_tmp1,'mods'=>'primary'),$_smarty_tpl);?>

</form><?php }} ?>