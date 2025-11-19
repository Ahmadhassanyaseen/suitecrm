<?php
/* Smarty version 4.5.5, created on 2025-10-20 15:18:40
  from 'G:\XAMPP\htdocs\suitecrm7\modules\SurveyResponses\tpls\detailquestionresponses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68f636b08c0a22_04394009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ce5729968e7bb1eac325d35f065b014c41b8857' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\suitecrm7\\modules\\SurveyResponses\\tpls\\detailquestionresponses.tpl',
      1 => 1754466940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f636b08c0a22_04394009 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <table id="questionResponseTable" class="table table-bordered">
        <tr>
            <th></th>
            <th>
                <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_QUESTION'];?>

            </th>
            <th>
                <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RESPONSE'];?>

            </th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questionResponses']->value, 'questionResponse');
$_smarty_tpl->tpl_vars['questionResponse']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['questionResponse']->value) {
$_smarty_tpl->tpl_vars['questionResponse']->do_else = false;
?>
            <tr>
                <td>Q<?php echo $_smarty_tpl->tpl_vars['questionResponse']->value['sort_order']+1;?>
</td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['questionResponse']->value['questionName'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['questionResponse']->value['answer'];?>

                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php }
}
