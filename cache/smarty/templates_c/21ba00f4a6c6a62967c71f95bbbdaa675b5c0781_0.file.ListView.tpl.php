<?php
/* Smarty version 4.5.5, created on 2025-10-16 12:46:39
  from 'G:\XAMPP\htdocs\suitecrm7\include\SugarFields\Fields\Base\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68f0cd0f508102_32735534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21ba00f4a6c6a62967c71f95bbbdaa675b5c0781' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\suitecrm7\\include\\SugarFields\\Fields\\Base\\ListView.tpl',
      1 => 1754466940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f0cd0f508102_32735534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
