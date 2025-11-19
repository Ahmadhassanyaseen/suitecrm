<?php
/* Smarty version 4.5.5, created on 2025-10-21 11:57:44
  from 'G:\XAMPP\htdocs\suitecrm7\include\SuiteEditor\tpls\SuiteEditorConnector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68f75918072705_21025485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e689b55edbf175bb8ea628d17e44a702b436deb' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\suitecrm7\\include\\SuiteEditor\\tpls\\SuiteEditorConnector.tpl',
      1 => 1754466940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f75918072705_21025485 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    if(!SuiteEditor) {

        /**
         * Suite Editor interface
         */
        var SuiteEditor = {
            interfaceError: function() {
                throw 'function is not implemented';
            }
        };

        /**
         * connector function for get value from suite editors
         */
        SuiteEditor.getValue = function() { SuiteEditor.interfaceError(); };

        /**
         * connector function for set value in suite editors
         */
        SuiteEditor.apply = function(html) { SuiteEditor.interfaceError(); };

        /**
         * connector function for insert a text value
         * at the current cursor position into suite editors
         */
        SuiteEditor.insert = function(text, elemId) { SuiteEditor.interfaceError(); };
    }
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['editor']->value;
}
}
