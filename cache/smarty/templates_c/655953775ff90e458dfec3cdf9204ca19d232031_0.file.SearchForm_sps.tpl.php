<?php
/* Smarty version 4.5.5, created on 2025-10-20 15:24:36
  from 'G:\XAMPP\htdocs\suitecrm7\cache\themes\SuiteP\modules\Meetings\SearchForm_sps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68f63814abe875_78724474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '655953775ff90e458dfec3cdf9204ca19d232031' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\suitecrm7\\cache\\themes\\SuiteP\\modules\\Meetings\\SearchForm_sps.tpl',
      1 => 1760966676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f63814abe875_78724474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'G:\\XAMPP\\htdocs\\suitecrm7\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<?php if (!(isset($_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic']))) {?>
	<?php $_smarty_tpl->_assignInScope('basicMaxColumns', $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('basicMaxColumns', $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic']);
}
echo '<script'; ?>
>

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

<?php echo '</script'; ?>
>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>

      
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['basicMaxColumns']->value == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
		</tr><tr>
	<?php }?>

	<td scope="row" nowrap="nowrap" width='1%' >
			<label for='collection_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_COLLECTION_TYPE','module'=>'Meetings'),$_smarty_tpl);?>
</label>
    	</td>


	<td  nowrap="nowrap" width='1%'>
			
<?php echo smarty_function_html_options(array('id'=>'collection_basic','name'=>'collection_basic[]','options'=>$_smarty_tpl->tpl_vars['fields']->value['collection_basic']['options'],'size'=>"6",'class'=>"templateGroupChooser",'multiple'=>"1",'selected'=>$_smarty_tpl->tpl_vars['fields']->value['collection_basic']['value']),$_smarty_tpl);?>


   	   	</td>
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['basicMaxColumns']->value == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
		</tr><tr>
	<?php }?>

	<td scope="row" nowrap="nowrap" width='1%' >
			<label for='name_basic'> <?php echo smarty_function_sugar_translate(array('label'=>'LBL_SUBJECT','module'=>'Meetings'),$_smarty_tpl);?>

		</td>


	<td  nowrap="nowrap" width='1%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name_basic']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name_basic']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name_basic']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name_basic']['name'];?>
'
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name_basic']['name'];?>
' size='30'
    maxlength='50'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='-1'      >

   	   	</td>
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['basicMaxColumns']->value == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
		</tr><tr>
	<?php }?>

	<td scope="row" nowrap="nowrap" width='1%' >
			<label for='current_user_only_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_CURRENT_USER_FILTER','module'=>'Meetings'),$_smarty_tpl);?>
</label>
    	</td>


	<td  nowrap="nowrap" width='1%'>
			
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['name'];?>
" 
value="1" title='' tabindex="-1" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >

   	   	</td>
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['basicMaxColumns']->value == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
		</tr><tr>
	<?php }?>

	<td scope="row" nowrap="nowrap" width='1%' >
			<label for='date_modified_basic'> <?php echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_MODIFIED','module'=>'Meetings'),$_smarty_tpl);?>

		</td>


	<td  nowrap="nowrap" width='1%'>
			
<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['fields']->value['date_modified_basic']['name']);?>

<?php if ((isset($_REQUEST['date_modified_basic_range_choice']))) {
$_smarty_tpl->_assignInScope('starting_choice', $_REQUEST['date_modified_basic_range_choice']);
} else {
$_smarty_tpl->_assignInScope('starting_choice', "=");
}?>

<div class="clear hidden dateTimeRangeChoiceClear"></div>
<div class="dateTimeRangeChoice" style="white-space:nowrap !important;">
<select id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_choice" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_choice" onchange="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change(this.value);">
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['date_modified_basic']['options'],'selected'=>$_smarty_tpl->tpl_vars['starting_choice']->value),$_smarty_tpl);?>

</select>
</div>

<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div" style="<?php if (preg_match('/^\[/',$_REQUEST['range_date_modified_basic']) || $_smarty_tpl->tpl_vars['starting_choice']->value == 'between') {?>display:none<?php } else { ?>display:''<?php }?>;">
<input autocomplete="off" type="text" name="range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value='<?php if (empty($_REQUEST['range_date_modified_basic']) && !empty($_REQUEST['date_modified_basic'])) {
echo $_REQUEST['date_modified_basic'];
} else {
echo $_REQUEST['range_date_modified_basic'];
}?>' title=''   tabindex='-1'  size="11" class="dateRangeInput">
    <button id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger" type="button" onclick="return false;" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar"  alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span></button>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger",
singleClick : true,
dateStr : "<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
",
startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
step : 1,
weekNumbers:false
}
);
<?php echo '</script'; ?>
>
    
</div>

<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div" style="<?php if ($_smarty_tpl->tpl_vars['starting_choice']->value == 'between') {?>display:'';<?php } else { ?>display:none;<?php }?>">
<?php $_smarty_tpl->_assignInScope('date_value', $_smarty_tpl->tpl_vars['fields']->value['date_modified_basic']['value']);?>
<input autocomplete="off" type="text" name="start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value='<?php echo $_REQUEST['start_range_date_modified_basic'];?>
' title=''  tabindex='-1' size="11" class="dateRangeInput">
    <button id="start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger" type="button" onclick="return false" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span></button>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger",
singleClick : true,
dateStr : "<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
",
step : 1,
startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
weekNumbers:false
}
);
<?php echo '</script'; ?>
>
 
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_AND'];?>

<?php $_smarty_tpl->_assignInScope('date_value', $_smarty_tpl->tpl_vars['fields']->value['date_modified_basic']['value']);?>
<input autocomplete="off" type="text" name="end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value='<?php echo $_REQUEST['end_range_date_modified_basic'];?>
' title=''  tabindex='-1' size="11" class="dateRangeInput" maxlength="10">
    <button id="end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger" type="button" onclick="return false" class="btn btn-danger">
        <span class="suitepicon suitepicon-module-calendar" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span>
    </button>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger",
singleClick : true,
dateStr : "<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
",
step : 1,
startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
weekNumbers:false
}
);
<?php echo '</script'; ?>
>
 
</div>


<?php echo '<script'; ?>
 type='text/javascript'>

function <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change(val) 
{
  if(val == 'between') {
     document.getElementById("range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';  
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div").style.display = 'none';
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div").style.display = ''; 
  } else if (val == '=' || val == 'not_equal' || val == 'greater_than' || val == 'less_than') {
     if((/^\[.*\]$/).test(document.getElementById("range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value))
     {
     	document.getElementById("range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
     }
     document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
     document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div").style.display = '';
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div").style.display = 'none';
  } else {
     document.getElementById("range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '[' + val + ']';    
     document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
     document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = ''; 
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div").style.display = 'none';
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div").style.display = 'none';         
  }
}

var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset = function()
{
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change('=');
}

YAHOO.util.Event.onDOMReady(function() {
if(document.getElementById('search_form_clear'))
{
YAHOO.util.Event.addListener('search_form_clear', 'click', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset);
}

});

YAHOO.util.Event.onDOMReady(function() {
 	if(document.getElementById('search_form_clear_advanced'))
 	 {
 	     YAHOO.util.Event.addListener('search_form_clear_advanced', 'click', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset);
 	 }

});

YAHOO.util.Event.onDOMReady(function() {
    //register on basic search form button if it exists
    if(document.getElementById('search_form_submit'))
     {
         YAHOO.util.Event.addListener('search_form_submit', 'click',<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate);
     }
    //register on advanced search submit button if it exists
   if(document.getElementById('search_form_submit_advanced'))
    {
        YAHOO.util.Event.addListener('search_form_submit_advanced', 'click',<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate);
    }

});

// this function is specific to range date searches and will check that both start and end date ranges have been
// filled prior to submitting search form.  It is called from the listener added above.
function <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate(e){
    if (
            (document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length >0 && document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0)
          ||(document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length >0 && document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0)
       )
    {
        e.preventDefault();
        alert('<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHOOSE_START_AND_END_DATES'];?>
');
        if (document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0) {
            document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").focus();
        }
        else {
            document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").focus();
        }
    }

}

<?php echo '</script'; ?>
>

   	   	</td>
    <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['formData']->value )) >= $_smarty_tpl->tpl_vars['basicMaxColumns']->value+1) {?>
    </tr>
    <tr>
	<td colspan="<?php echo $_smarty_tpl->tpl_vars['searchTableColumnCount']->value;?>
">
    <?php } else { ?>
	<td class="sumbitButtons">
    <?php }?>
        <input tabindex='2' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_TITLE'];?>
' onclick='submitSearch("<?php echo $_smarty_tpl->tpl_vars['subpanel']->value;?>
");' class='button' type='button' name='search' id='search_form_search' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_TITLE'];?>
'/>
	    <input tabindex='2' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_TITLE'];?>
' onclick='clearSearch("<?php echo $_smarty_tpl->tpl_vars['subpanel']->value;?>
");'  class='button' type='button' name='clear' id='search_form_clear' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_LABEL'];?>
'/>
			<?php echo $_smarty_tpl->tpl_vars['subpanelPageOffset']->value;?>

		</td>
	</tr>
</table>
<?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_sps']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_sps","modified_user_id_sps"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_created_by_name_sps']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_sps","created_by_sps"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_assigned_user_name_sps']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_sps","assigned_user_id_sps"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_contact_name_sps']={"form":"search_form","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["contact_name_sps","contact_id_sps","contact_id_sps","contact_id_sps"],"required_list":["contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_parent_name_sps']={"form":"search_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name_sps","parent_id_sps"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
><?php }
}
