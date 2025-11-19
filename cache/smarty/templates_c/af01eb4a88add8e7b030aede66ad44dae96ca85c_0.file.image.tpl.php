<?php
/* Smarty version 4.5.5, created on 2025-10-16 12:27:14
  from 'G:\XAMPP\htdocs\suitecrm7\modules\DynamicFields\templates\Fields\Forms\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68f0c8828ba167_11371159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af01eb4a88add8e7b030aede66ad44dae96ca85c' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\suitecrm7\\modules\\DynamicFields\\templates\\Fields\\Forms\\image.tpl',
      1 => 1754466940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl' => 1,
    'file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl' => 1,
  ),
),false)) {
function content_68f0c8828ba167_11371159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.sugar_help.php','function'=>'smarty_function_sugar_help',),));
?>


<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_IMAGE_WIDTH"),$_smarty_tpl);?>
:</td>
	<td>
		<input id ="width" type="text" name="width" 
		<?php if (!$_smarty_tpl->tpl_vars['vardef']->value['width'] && !$_smarty_tpl->tpl_vars['vardef']->value['height']) {?>
			value="120"
		<?php } else { ?>
			value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['width'];?>
"
		<?php }?>
		>
		<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_IMAGE_WIDTH'],'FIXX'=>300,'FIXY'=>200),$_smarty_tpl);?>

	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_IMAGE_HEIGHT"),$_smarty_tpl);?>
:</td>
	<td>
		<input id ="height" type="text" name="height" 
		<?php if (!$_smarty_tpl->tpl_vars['vardef']->value['width'] && !$_smarty_tpl->tpl_vars['vardef']->value['height']) {?>
			value=""
		<?php } else { ?>
			value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['height'];?>
"
		<?php }?>
		>
		<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_IMAGE_HEIGHT'],'FIXX'=>300,'FIXY'=>220),$_smarty_tpl);?>

	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_IMAGE_BORDER"),$_smarty_tpl);?>
:</td>
	<td>	
		<input type="checkbox" id ="border" name="border" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['border'])) {?>checked<?php }?>/>
	</td>
</tr>
<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
