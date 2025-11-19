<?php
/* Smarty version 4.5.5, created on 2025-10-20 14:04:02
  from 'G:\XAMPP\htdocs\suitecrm7\modules\ModuleBuilder\tpls\MBModule\dropdowns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68f625328f4d90_25764038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cffa08c70870fbc61228f75192c9a8a6077e7e4' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\suitecrm7\\modules\\ModuleBuilder\\tpls\\MBModule\\dropdowns.tpl',
      1 => 1754466940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ModuleBuilder/tpls/assistantJavascript.tpl' => 1,
  ),
),false)) {
function content_68f625328f4d90_25764038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

<div id='dropdowns'>
<input type='button' name='adddropdownbtn'
	value='<?php echo $_smarty_tpl->tpl_vars['LBL_BTN_ADDDROPDOWN']->value;?>
' class='button'
	onclick='ModuleBuilder.getContent("module=ModuleBuilder&action=dropdown&refreshTree=1");'>&nbsp;

<hr>
<table width='100%'>
	<colgroup span='3' width='33%'>
	
	
	<tr>
		<?php echo smarty_function_counter(array('name'=>'items','assign'=>'items','start'=>0),$_smarty_tpl);?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropdowns']->value, 'def', false, 'name');
$_smarty_tpl->tpl_vars['def']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['def']->value) {
$_smarty_tpl->tpl_vars['def']->do_else = false;
?> <?php if ($_smarty_tpl->tpl_vars['items']->value%3 == 0 && $_smarty_tpl->tpl_vars['items']->value != 0) {?>
	</tr>
	<tr>
		<?php }?>
		<td><a class='mbLBLL' href='javascript:void(0)'
			onclick='ModuleBuilder.getContent("module=ModuleBuilder&action=dropdown&dropdown_name=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
")'><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></td>
		<?php echo smarty_function_counter(array('name'=>'items'),$_smarty_tpl);?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php if ($_smarty_tpl->tpl_vars['items']->value == 0) {?>
		<td class='mbLBLL'><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_NONE'];?>
</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['items']->value%3 == 1) {?>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['items']->value%3 == 2) {?>
		<td>&nbsp;</td>
		<?php }?>
	</tr>
</table>

<?php echo '<script'; ?>
>
ModuleBuilder.helpRegisterByID('dropdowns', 'input');
ModuleBuilder.helpSetup('dropdowns','default');
<?php echo '</script'; ?>
> <?php $_smarty_tpl->_subTemplateRender('file:modules/ModuleBuilder/tpls/assistantJavascript.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
