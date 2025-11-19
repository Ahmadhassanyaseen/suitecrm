<?php
/* Smarty version 4.5.5, created on 2025-10-16 12:17:44
  from 'G:\XAMPP\htdocs\suitecrm7\themes\SuiteP\include\ListView\ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68f0c6485ee229_57292646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '571aeb095784abd8dc38cde424e579627ec20810' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\suitecrm7\\themes\\SuiteP\\include\\ListView\\ListViewSelectObjects.tpl',
      1 => 1754466940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f0c6485ee229_57292646 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
