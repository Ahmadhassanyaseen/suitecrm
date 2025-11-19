<?php
/* Smarty version 4.5.5, created on 2025-10-18 12:12:57
  from 'G:\XAMPP\htdocs\suitecrm7\include\utils\recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68f36829c1afa1_34580668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0223c3f1f0bb7be14aa049cb2a278dbf84efc8a9' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\suitecrm7\\include\\utils\\recaptcha_disabled.tpl',
      1 => 1754466940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f36829c1afa1_34580668 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
