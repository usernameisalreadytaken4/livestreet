<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 21:07:23
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\p-dashboard\actionbar-stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5153757965b3280db9f7c60-62781217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '861de7c8a7b4e2f2ec5c2fa107753573648b0b89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\p-dashboard\\actionbar-stats.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5153757965b3280db9f7c60-62781217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aStats' => 0,
    'aUserGrowth' => 0,
    'iTotalTopicsCount' => 0,
    'iTotalBlogsCount' => 0,
    'iTotalCommentsCount' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'data' => 0,
    'item' => 0,
    'change' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3280dba26a78_50890099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3280dba26a78_50890099')) {function content_5b3280dba26a78_50890099($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('p-dashboard-actionbar-stats', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('mods','classes','attributes')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'plugin.admin.actionbar.users','count'=>$_smarty_tpl->tpl_vars['aStats']->value['count_all'],'plural'=>true),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'plugin.admin.actionbar.registrations','count'=>$_smarty_tpl->tpl_vars['aUserGrowth']->value['now_items'],'plural'=>true),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'plugin.admin.actionbar.topics','count'=>$_smarty_tpl->tpl_vars['iTotalTopicsCount']->value,'plural'=>true),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'plugin.admin.actionbar.blogs','count'=>$_smarty_tpl->tpl_vars['iTotalBlogsCount']->value,'plural'=>true),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'plugin.admin.actionbar.comments','count'=>$_smarty_tpl->tpl_vars['iTotalCommentsCount']->value,'plural'=>true),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable(array(array('text'=>$_tmp1,'count'=>$_smarty_tpl->tpl_vars['aStats']->value['count_all']),array('text'=>$_tmp2,'count'=>$_smarty_tpl->tpl_vars['aUserGrowth']->value['now_items'],'growth'=>$_smarty_tpl->tpl_vars['aUserGrowth']->value['growth']),array('text'=>$_tmp3,'count'=>$_smarty_tpl->tpl_vars['iTotalTopicsCount']->value),array('text'=>$_tmp4,'count'=>$_smarty_tpl->tpl_vars['iTotalBlogsCount']->value),array('text'=>$_tmp5,'count'=>$_smarty_tpl->tpl_vars['iTotalCommentsCount']->value)), null, 0);?>

<ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['item']->value['count'])){?>
            <?php $_smarty_tpl->tpl_vars['change'] = new Smarty_variable(null, null, 0);?>

            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['growth'])&&$_smarty_tpl->tpl_vars['item']->value['growth']!==0){?>
                <?php $_smarty_tpl->tpl_vars['change'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['growth']>0 ? 'up' : 'down', null, 0);?>
            <?php }?>

			<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php if ($_smarty_tpl->tpl_vars['change']->value){?><?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item--<?php echo $_smarty_tpl->tpl_vars['change']->value;?>
<?php }?>">
				<h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-title">
					<?php echo abs(number_format($_smarty_tpl->tpl_vars['item']->value['count'],0,'.',' '));?>


					
					<?php if ($_smarty_tpl->tpl_vars['change']->value){?>
						<i class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-change p-icon-stats-<?php echo $_smarty_tpl->tpl_vars['change']->value;?>
" title="<?php echo smarty_function_lang(array('_default_short'=>"plugin.admin.actionbar.".((string)$_smarty_tpl->tpl_vars['change']->value)),$_smarty_tpl);?>
: <?php echo abs($_smarty_tpl->tpl_vars['item']->value['growth']);?>
"></i>
					<?php }?>
				</h3>
				<p class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</p>
			</li>
		<?php }?>
	<?php } ?>
</ul><?php }} ?>