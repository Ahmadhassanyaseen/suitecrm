<?php
/* Smarty version 4.5.5, created on 2025-10-20 07:45:31
  from 'G:\XAMPP\htdocs\suitecrm7\include\SugarFields\Fields\Phone\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68f5cc7b1ec8b6_39973841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0ca89803b200e8e0c9f8fa7cb9e08dfef66e04f' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\suitecrm7\\include\\SugarFields\\Fields\\Phone\\ListView.tpl',
      1 => 1754466940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f5cc7b1ec8b6_39973841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),1=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'getPhone', 'phone', null);
echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone']->value,'usa_format'=>$_smarty_tpl->tpl_vars['usa_format']->value),$_smarty_tpl);
}
}
