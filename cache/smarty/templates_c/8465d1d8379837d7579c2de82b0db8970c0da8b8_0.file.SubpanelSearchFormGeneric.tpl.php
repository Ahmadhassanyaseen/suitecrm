<?php
/* Smarty version 4.5.5, created on 2025-10-20 15:24:34
  from 'G:\XAMPP\htdocs\suitecrm7\themes\SuiteP\include\SearchForm\tpls\SubpanelSearchFormGeneric.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68f63812bbfd36_13903385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8465d1d8379837d7579c2de82b0db8970c0da8b8' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\suitecrm7\\themes\\SuiteP\\include\\SearchForm\\tpls\\SubpanelSearchFormGeneric.tpl',
      1 => 1754466940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f63812bbfd36_13903385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.sugar_field.php','function'=>'smarty_function_sugar_field',),));
?>
{*
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
*}
{if !isset($templateMeta.maxColumnsBasic)}
	{assign var="basicMaxColumns" value=$templateMeta.maxColumns}
{else}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumnsBasic}
{/if}
<?php echo '<script'; ?>
>
{literal}
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});

		$('#filterHelp').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});

	});
{/literal}
<?php echo '</script'; ?>
>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>

<?php $_smarty_tpl->_assignInScope('accesskeycount', 0);?>  <?php $_smarty_tpl->_assignInScope('ACCKEY', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formData']->value, 'colData', false, 'col', 'colIteration', array (
));
$_smarty_tpl->tpl_vars['colData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['colData']->value) {
$_smarty_tpl->tpl_vars['colData']->do_else = false;
?>
    <?php echo smarty_function_math(array('assign'=>"accesskeycount",'equation'=>((string)$_smarty_tpl->tpl_vars['accesskeycount']->value)." + 1"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['accesskeycount']->value == 1) {?> <?php $_smarty_tpl->_assignInScope('ACCKEY', $_smarty_tpl->tpl_vars['APP']->value['LBL_FIRST_INPUT_SEARCH_KEY']);?> <?php } else { ?> <?php $_smarty_tpl->_assignInScope('ACCKEY', '');?> <?php }?>

	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}

	<td scope="row" nowrap="nowrap" width='1%' >
	<?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['label']))) {?>
		<label for='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
' >{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['label'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}</label>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]))) {?>
		<label for='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
'> {sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}
	<?php }?>
	</td>


	<td  nowrap="nowrap" width='1%'>
	<?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]) {?>
		<?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']],'accesskey'=>$_smarty_tpl->tpl_vars['ACCKEY']->value,'displayType'=>'searchView','displayParams'=>$_smarty_tpl->tpl_vars['colData']->value['field']['displayParams'],'typeOverride'=>$_smarty_tpl->tpl_vars['colData']->value['field']['type'],'formName'=>$_smarty_tpl->tpl_vars['form_name']->value),$_smarty_tpl);?>

   	<?php }?>
   	</td>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    {if $formData|@count >= $basicMaxColumns+1}
    </tr>
    <tr>
	<td colspan="{$searchTableColumnCount}">
    {else}
	<td class="sumbitButtons">
    {/if}
        <input tabindex='2' title='{$APP.LBL_SEARCH_BUTTON_TITLE}' onclick='submitSearch("{$subpanel}");' class='button' type='button' name='search' id='search_form_search' value='{$APP.LBL_SEARCH_BUTTON_TITLE}'/>
	    <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}' onclick='clearSearch("{$subpanel}");'  class='button' type='button' name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
			{$subpanelPageOffset}
		</td>
	</tr>
</table>
<?php }
}
