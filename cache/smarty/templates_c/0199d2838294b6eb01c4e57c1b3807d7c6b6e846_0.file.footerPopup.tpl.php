<?php
/* Smarty version 4.5.5, created on 2025-10-16 12:17:43
  from 'G:\XAMPP\htdocs\suitecrm7\include\SearchForm\tpls\footerPopup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68f0c647cda4f6_87496657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0199d2838294b6eb01c4e57c1b3807d7c6b6e846' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\suitecrm7\\include\\SearchForm\\tpls\\footerPopup.tpl',
      1 => 1754466940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f0c647cda4f6_87496657 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php echo '<script'; ?>
>

    var listViewSearchIcon = {

        searchInfo: <?php echo $_smarty_tpl->tpl_vars['searchInfoJson']->value;?>
,

        selectedSavedSearch: '<?php echo $_smarty_tpl->tpl_vars['savedSearchData']->value['selected'];?>
',

        infoInit: function () {

            $(function () {
                // load qtip
                if (typeof $.qtip == 'undefined') {
                    $.getScript('include/javascript/qtip/jquery.qtip.min.js');
                    $("<link/>", {
                        rel: "stylesheet",
                        type: "text/css",
                        href: "include/javascript/qtip/jquery.qtip.min.css"
                    }).appendTo("head");
                }

                // add qtip to search filter icon
                var qtipLoadInterval = setInterval(function () {
                    if (typeof $.qtip != 'undefined') {
                        clearInterval(qtipLoadInterval);

                        var qtipNeeded = false;
                        var qtipContent = '<table>';
                        for (var key in listViewSearchIcon.searchInfo) {
                            qtipContent += '<tr>';
                            qtipContent += '<td><b>' + key + '</b>&nbsp;</td>';
                            qtipContent += '<td>' + listViewSearchIcon.searchInfo[key] + '</td>';
                            qtipContent += '</tr>';
                            qtipNeeded = true;
                        }
                        qtipContent += '</table>';

                        if (qtipNeeded) {
                            $('.searchAppliedAlertLink').qtip({
                                content: qtipContent
                            });
                            $('.searchAppliedAlertLink').removeClass('hidden');
                        }
                    }
                }, 100);

                var switchSearchTabLatestActiveInterval = setInterval(function () {
                    listViewSearchIcon.switchSearchTabLatestActive();
                }, 100);

            });

        },

        onOpen: function () {
        },

        // private
        latestSearchDialogType: '<?php echo $_smarty_tpl->tpl_vars['viewTab']->value;?>
',

        // private
        setLatestSearchDialogType: function (dialogType) {
            $('input[name="selectedSearchTab"]').val(dialogType);
            this.latestSearchDialogType = dialogType;
        },

        // public
        getLatestSearchDialogType: function () {
            return this.latestSearchDialogType;
        },

        toggleSearchDialog: function (dialogType) {
            if (dialogType == 'latest') {
                if (this.selectedSavedSearch != '') {
                    dialogType = 'advanced';
                }
                else {
                    dialogType = this.getLatestSearchDialogType();
                }
            }
            this.setLatestSearchDialogType(dialogType);
            SUGAR.searchForm.searchFormSelect('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|' + dialogType + '_search', '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|' + (dialogType == 'advanced' ? 'basic' : 'advanced') + '_search');
        },

        switchSearchTabLatestActive: function () {
            $('.searchTabHandler').removeClass('active');
            $('.searchTabHandler.' + this.getLatestSearchDialogType()).addClass('active');

            $('.searchTabHeader').removeClass('active');
            $('.searchTabHeader.' + this.getLatestSearchDialogType()).addClass('active');
        }

    };

    listViewSearchIcon.infoInit();


<?php echo '</script'; ?>
>

<?php }
}
