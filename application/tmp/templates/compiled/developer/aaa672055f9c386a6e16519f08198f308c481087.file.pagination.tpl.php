<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 21:07:43
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\pagination\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7287438365b3280eff0d313-80702524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaa672055f9c386a6e16519f08198f308c481087' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\pagination\\pagination.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7287438365b3280eff0d313-80702524',
  'function' => 
  array (
    'pagination_item' => 
    array (
      'parameter' => 
      array (
        'page' => 0,
        'text' => '',
        'isActive' => false,
        'classes' => '',
        'isPager' => false,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'isPager' => 0,
    'element' => 0,
    'component' => 0,
    'isActive' => 0,
    'classes' => 0,
    'page' => 0,
    'text' => 0,
    'linkClasses' => 0,
    'url' => 0,
    'padding' => 0,
    'showSingle' => 0,
    'total' => 0,
    'current' => 0,
    'mods' => 0,
    'attributes' => 0,
    'next' => 0,
    'prev' => 0,
    'start' => 0,
    'end' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3280f0019124_95851119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3280f0019124_95851119')) {function content_5b3280f0019124_95851119($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-pagination', null, 0);?>



<?php if (!function_exists('smarty_template_function_pagination_item')) {
    function smarty_template_function_pagination_item($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['pagination_item']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['element'] = new Smarty_variable($_smarty_tpl->tpl_vars['isPager']->value ? 'div' : 'li', null, 0);?>

    <<?php echo $_smarty_tpl->tpl_vars['element']->value;?>
 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php if ($_smarty_tpl->tpl_vars['isActive']->value){?>active<?php }?> <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
">
        <?php if ($_smarty_tpl->tpl_vars['isActive']->value||!$_smarty_tpl->tpl_vars['page']->value){?>
            <span class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-inner"><?php if (!$_smarty_tpl->tpl_vars['isPager']->value){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['page']->value : $tmp);?>
<?php }?></span>
        <?php }else{ ?>
            <a class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-inner <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-link <?php echo $_smarty_tpl->tpl_vars['linkClasses']->value;?>
" href="<?php echo str_replace('__page__',$_smarty_tpl->tpl_vars['page']->value,$_smarty_tpl->tpl_vars['url']->value);?>
"><?php if (!$_smarty_tpl->tpl_vars['isPager']->value){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['page']->value : $tmp);?>
<?php }?></a>
        <?php }?>
    </<?php echo $_smarty_tpl->tpl_vars['element']->value;?>
>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php echo smarty_function_component_define_params(array('params'=>array('total','showPager','showSingle','current','url','padding','mods','classes','attributes')),$_smarty_tpl);?>



<?php $_smarty_tpl->tpl_vars['padding'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['padding']->value)===null||$tmp==='' ? 2 : $tmp), null, 0);?>



<?php if (($_smarty_tpl->tpl_vars['showSingle']->value&&$_smarty_tpl->tpl_vars['total']->value&&$_smarty_tpl->tpl_vars['current']->value)||(!$_smarty_tpl->tpl_vars['showSingle']->value&&$_smarty_tpl->tpl_vars['total']->value>1&&$_smarty_tpl->tpl_vars['current']->value)){?>
    
    <?php $_smarty_tpl->tpl_vars['next'] = new Smarty_variable($_smarty_tpl->tpl_vars['current']->value==$_smarty_tpl->tpl_vars['total']->value ? 0 : $_smarty_tpl->tpl_vars['current']->value+1, null, 0);?>

    
    <?php $_smarty_tpl->tpl_vars['prev'] = new Smarty_variable($_smarty_tpl->tpl_vars['current']->value-1, null, 0);?>

    
    <?php $_smarty_tpl->tpl_vars['start'] = new Smarty_variable(1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value, null, 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['padding']->value*2+1){?>
        <?php $_smarty_tpl->tpl_vars['start'] = new Smarty_variable($_smarty_tpl->tpl_vars['current']->value-$_smarty_tpl->tpl_vars['padding']->value<4 ? 1 : $_smarty_tpl->tpl_vars['current']->value-$_smarty_tpl->tpl_vars['padding']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable($_smarty_tpl->tpl_vars['current']->value+$_smarty_tpl->tpl_vars['padding']->value>$_smarty_tpl->tpl_vars['total']->value-3 ? $_smarty_tpl->tpl_vars['total']->value : $_smarty_tpl->tpl_vars['current']->value+$_smarty_tpl->tpl_vars['padding']->value, null, 0);?>
    <?php }?>


    
    <nav class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['next']->value){?>data-pagination-next="<?php echo str_replace('__page__',$_smarty_tpl->tpl_vars['next']->value,$_smarty_tpl->tpl_vars['url']->value);?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prev']->value){?>data-pagination-prev="<?php echo str_replace('__page__',$_smarty_tpl->tpl_vars['prev']->value,$_smarty_tpl->tpl_vars['url']->value);?>
"<?php }?>>

        <?php smarty_template_function_pagination_item($_smarty_tpl,array('page'=>$_smarty_tpl->tpl_vars['prev']->value,'classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-prev",'linkClasses'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-prev",'isPager'=>true));?>


        <ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-list">
            <?php if ($_smarty_tpl->tpl_vars['start']->value>2){?>
                <?php smarty_template_function_pagination_item($_smarty_tpl,array('page'=>1));?>

                <?php smarty_template_function_pagination_item($_smarty_tpl,array('text'=>'...'));?>

            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['name'] = 'pagination';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = (int)$_smarty_tpl->tpl_vars['start']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['end']->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total']);
?>
                <?php smarty_template_function_pagination_item($_smarty_tpl,array('page'=>$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index'],'isActive'=>($_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']===$_smarty_tpl->tpl_vars['current']->value)));?>

            <?php endfor; endif; ?>

            <?php if ($_smarty_tpl->tpl_vars['end']->value<$_smarty_tpl->tpl_vars['total']->value-1){?>
                <?php smarty_template_function_pagination_item($_smarty_tpl,array('text'=>'...'));?>

                <?php smarty_template_function_pagination_item($_smarty_tpl,array('page'=>$_smarty_tpl->tpl_vars['total']->value));?>

            <?php }?>
        </ul>

        <?php smarty_template_function_pagination_item($_smarty_tpl,array('page'=>$_smarty_tpl->tpl_vars['next']->value,'classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-next",'linkClasses'=>" js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-next",'isPager'=>true));?>

    </nav>
<?php }?><?php }} ?>