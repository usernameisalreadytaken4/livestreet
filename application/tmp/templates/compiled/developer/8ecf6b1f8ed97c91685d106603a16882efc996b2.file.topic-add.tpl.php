<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:54
         compiled from "C:\xampp\htdocs\application\frontend\components\topic\topic-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3631956255b3502b238a572-00937304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ecf6b1f8ed97c91685d106603a16882efc996b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\topic\\topic-add.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3631956255b3502b238a572-00937304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'classes' => 0,
    'topic' => 0,
    'skipBlogs' => 0,
    'blogs' => 0,
    'blogItems' => 0,
    'blog' => 0,
    'blogType' => 0,
    'blogsSelectOptions' => 0,
    'blogsSelectId' => 0,
    '_aRequest' => 0,
    'aLang' => 0,
    'blogsSelectedId' => 0,
    'chosenOrder' => 0,
    'blogsSelect' => 0,
    'oUserCurrent' => 0,
    'type' => 0,
    'tagsCountMin' => 0,
    'tagsCountMax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502b2416f91_53752286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502b2416f91_53752286')) {function content_5b3502b2416f91_53752286($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_hook')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_json')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.json.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_insert_block')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\insert.block.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('topic','type','skipBlogs','blogs','classes')),$_smarty_tpl);?>


<form action="" method="POST" enctype="multipart/form-data" id="topic-add-form" class="<?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 js-form-validate" data-content-action="<?php echo $_smarty_tpl->tpl_vars['topic']->value ? 'edit' : 'add';?>
">
    <?php echo smarty_function_hook(array('run'=>"form_add_topic_begin",'topic'=>$_smarty_tpl->tpl_vars['topic']->value),$_smarty_tpl);?>

    

    
    <?php if (!$_smarty_tpl->tpl_vars['skipBlogs']->value){?>
        <?php $_smarty_tpl->tpl_vars['blogsSelect'] = new Smarty_variable(array(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['blogsSelectId'] = new Smarty_variable(array(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['blogsSelectedId'] = new Smarty_variable(array(), null, 0);?>

        <?php  $_smarty_tpl->tpl_vars['blogItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogItems']->_loop = false;
 $_smarty_tpl->tpl_vars['blogType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blogItems']->key => $_smarty_tpl->tpl_vars['blogItems']->value){
$_smarty_tpl->tpl_vars['blogItems']->_loop = true;
 $_smarty_tpl->tpl_vars['blogType']->value = $_smarty_tpl->tpl_vars['blogItems']->key;
?>
            <?php $_smarty_tpl->tpl_vars['blogsSelectOptions'] = new Smarty_variable(array(), null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
                <?php $_smarty_tpl->createLocalArrayVariable('blogsSelectOptions', null, 0);
$_smarty_tpl->tpl_vars['blogsSelectOptions']->value[] = array('text'=>htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true),'value'=>$_smarty_tpl->tpl_vars['blog']->value->getId());?>
                <?php $_smarty_tpl->createLocalArrayVariable('blogsSelectId', null, 0);
$_smarty_tpl->tpl_vars['blogsSelectId']->value[] = $_smarty_tpl->tpl_vars['blog']->value->getId();?>
            <?php } ?>

            <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>"blog.types.".((string)$_smarty_tpl->tpl_vars['blogType']->value)),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('blogsSelect', null, 0);
$_smarty_tpl->tpl_vars['blogsSelect']->value[] = array('text'=>$_tmp1,'value'=>$_smarty_tpl->tpl_vars['blogsSelectOptions']->value);?>
        <?php } ?>

        <?php if ($_smarty_tpl->tpl_vars['topic']->value){?>
            <?php echo smarty_function_json(array('var'=>array_intersect($_smarty_tpl->tpl_vars['topic']->value->getBlogsId(),$_smarty_tpl->tpl_vars['blogsSelectId']->value),'assign'=>'chosenOrder'),$_smarty_tpl);?>

            <?php $_smarty_tpl->tpl_vars['blogsSelectedId'] = new Smarty_variable($_smarty_tpl->tpl_vars['topic']->value->getBlogsId(), null, 0);?>
        <?php }else{ ?>
            <?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['blog_id']){?>
                <?php $_smarty_tpl->createLocalArrayVariable('blogsSelectedId', null, 0);
$_smarty_tpl->tpl_vars['blogsSelectedId']->value[] = $_smarty_tpl->tpl_vars['_aRequest']->value['blog_id'];?>
            <?php }?>
        <?php }?>

        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['chosenOrder']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field.autocomplete','label'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['fields']['blog']['label'],'name'=>'','placeholder'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['fields']['blog']['placeholder'],'inputClasses'=>'js-topic-add-blogs ls-hidden','isMultiple'=>true,'selectedValue'=>$_smarty_tpl->tpl_vars['blogsSelectedId']->value,'inputAttributes'=>array('data-chosen-order'=>$_tmp2),'items'=>$_smarty_tpl->tpl_vars['blogsSelect']->value),$_smarty_tpl);?>

    <?php }?>


    
    <?php ob_start();?><?php echo ($_smarty_tpl->tpl_vars['topic']->value ? $_smarty_tpl->tpl_vars['topic']->value->getTitle() : '');?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'topic[topic_title]','value'=>$_tmp3,'entityField'=>'topic_title','entity'=>'ModuleTopic_EntityTopic','label'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['fields']['title']['label']),$_smarty_tpl);?>


    
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
        <?php ob_start();?><?php echo ($_smarty_tpl->tpl_vars['topic']->value ? $_smarty_tpl->tpl_vars['topic']->value->getSlug() : '');?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'topic.add.fields.slug.note'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'topic.add.fields.slug.label'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'topic[topic_slug_raw]','value'=>$_tmp4,'note'=>$_tmp5,'label'=>$_tmp6),$_smarty_tpl);?>

    <?php }?>

    


    
    <?php if ($_smarty_tpl->tpl_vars['type']->value->getParam('allow_text')){?>
        <?php echo smarty_function_component(array('_default_short'=>'editor','name'=>'topic[topic_text_source]','value'=>($_smarty_tpl->tpl_vars['topic']->value ? $_smarty_tpl->tpl_vars['topic']->value->getTextSource() : ''),'label'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['fields']['text']['label'],'entityField'=>'topic_text_source','entity'=>'ModuleTopic_EntityTopic','inputClasses'=>'js-editor-default','mediaTargetType'=>'topic','mediaTargetId'=>$_smarty_tpl->tpl_vars['topic']->value ? $_smarty_tpl->tpl_vars['topic']->value->getId() : ''),$_smarty_tpl);?>

    <?php }?>

    


    
    <?php if ($_smarty_tpl->tpl_vars['type']->value->getParam('allow_tags')){?>
        <?php $_smarty_tpl->tpl_vars['tagsCountMin'] = new Smarty_variable(Config::Get('module.topic.tags_count_min'), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['tagsCountMax'] = new Smarty_variable(Config::Get('module.topic.tags_count_max'), null, 0);?>
        <?php ob_start();?><?php echo ($_smarty_tpl->tpl_vars['topic']->value ? $_smarty_tpl->tpl_vars['topic']->value->getTags() : '');?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'topic.add.fields.tags.label'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'topic.add.fields.tags.note'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'topic[topic_tags]','value'=>$_tmp7,'rules'=>array('required'=>!Config::Get('module.topic.tags_allow_empty'),'rangetags'=>"[".((string)$_smarty_tpl->tpl_vars['tagsCountMin']->value).",".((string)$_smarty_tpl->tpl_vars['tagsCountMax']->value)."]"),'label'=>$_tmp8,'note'=>$_tmp9,'inputClasses'=>'ls-width-full autocomplete-tags-sep'),$_smarty_tpl);?>

    <?php }?>


    
    <?php echo smarty_insert_block(array('block' => 'propertyUpdate', 'params' => array('target'=>$_smarty_tpl->tpl_vars['topic']->value,'entity'=>'ModuleTopic_EntityTopic','target_type'=>"topic_".((string)$_smarty_tpl->tpl_vars['type']->value->getCode()))),$_smarty_tpl);?>



    
    <?php if ($_smarty_tpl->tpl_vars['type']->value->getParam('allow_preview')){?>
        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'image-ajax','label'=>'Превью','modalTitle'=>'Выбор превью для топика','targetType'=>'topic','targetId'=>$_smarty_tpl->tpl_vars['topic']->value ? $_smarty_tpl->tpl_vars['topic']->value->getId() : '','classes'=>'js-topic-add-field-image-preview'),$_smarty_tpl);?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['type']->value->getParam('allow_poll')){?>
        <?php echo smarty_function_component(array('_default_short'=>'poll','template'=>'manage','targetType'=>'topic','targetId'=>$_smarty_tpl->tpl_vars['topic']->value ? $_smarty_tpl->tpl_vars['topic']->value->getId() : ''),$_smarty_tpl);?>

    <?php }?>


    
    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['topic']->value&&$_smarty_tpl->tpl_vars['topic']->value->getForbidComment() ? true : false;?>
<?php $_tmp10=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'topic[topic_forbid_comment]','checked'=>$_tmp10,'note'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['fields']['forbid_comments']['note'],'label'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['fields']['forbid_comments']['label']),$_smarty_tpl);?>



    
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['topic']->value&&$_smarty_tpl->tpl_vars['topic']->value->getPublishIndex() ? true : false;?>
<?php $_tmp11=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'topic[topic_publish_index]','checked'=>$_tmp11,'note'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['fields']['publish_index']['note'],'label'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['fields']['publish_index']['label']),$_smarty_tpl);?>


        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['topic']->value&&$_smarty_tpl->tpl_vars['topic']->value->getSkipIndex() ? true : false;?>
<?php $_tmp12=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'topic[topic_skip_index]','checked'=>$_tmp12,'note'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['fields']['skip_index']['note'],'label'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['fields']['skip_index']['label']),$_smarty_tpl);?>

    <?php }?>


    
    <?php echo smarty_function_hook(array('run'=>"form_add_topic_end",'topic'=>$_smarty_tpl->tpl_vars['topic']->value),$_smarty_tpl);?>



    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'topic_type','value'=>$_smarty_tpl->tpl_vars['type']->value->getCode()),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['topic']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'topic[id]','value'=>$_smarty_tpl->tpl_vars['topic']->value->getId()),$_smarty_tpl);?>

    <?php }?>


    

    
    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['topic']->value ? 'submit-edit-topic-publish' : 'submit-add-topic-publish';?>
<?php $_tmp13=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','id'=>$_tmp13,'mods'=>'primary','classes'=>'ls-fl-r','text'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['button'][!$_smarty_tpl->tpl_vars['topic']->value||($_smarty_tpl->tpl_vars['topic']->value&&$_smarty_tpl->tpl_vars['topic']->value->getPublish()==0) ? 'publish' : 'update']),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'button','type'=>'button','classes'=>'js-topic-preview-text-button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['preview_text']),$_smarty_tpl);?>


    
    <?php if (!$_smarty_tpl->tpl_vars['topic']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'button','type'=>'button','classes'=>'js-topic-draft-button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['button']['save_as_draft']),$_smarty_tpl);?>

    <?php }else{ ?>
        <?php echo smarty_function_component(array('_default_short'=>'button','type'=>'button','classes'=>'js-topic-draft-button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['add']['button'][$_smarty_tpl->tpl_vars['topic']->value->getPublish()!=0 ? 'mark_as_draft' : 'update']),$_smarty_tpl);?>

    <?php }?>
</form>



<?php echo smarty_function_component(array('_default_short'=>'topic','template'=>'preview'),$_smarty_tpl);?>
<?php }} ?>