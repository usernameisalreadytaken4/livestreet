<?php /* Smarty version Smarty-3.1.13, created on 2018-07-03 21:45:19
         compiled from "C:\xampp\htdocs\application\frontend\components\vote\vote.info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12351161725b3bc43f26c510-62340725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '721a4e94125455ed5d7031188fdbf8d23e9ad89a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\vote\\vote.info.tpl',
      1 => 1530188510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12351161725b3bc43f26c510-62340725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'target' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3bc43f2be5b1_90629012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3bc43f2be5b1_90629012')) {function content_5b3bc43f2be5b1_90629012($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_hook')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.hook.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-vote-info', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('target')),$_smarty_tpl);?>


<ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
">
    <li><?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'plus','mods'=>'white'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['target']->value->getCountVoteUp();?>
</li>
    <li><?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'minus','mods'=>'white'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['target']->value->getCountVoteDown();?>
</li>
    <li><?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'eye','mods'=>'white'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['target']->value->getCountVoteAbstain();?>
</li>
    <li><?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'asterisk','mods'=>'white'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['target']->value->getCountVote();?>
</li>

    <?php echo smarty_function_hook(array('run'=>'topic_show_vote_stats','topic'=>$_smarty_tpl->tpl_vars['target']->value),$_smarty_tpl);?>

</ul><?php }} ?>