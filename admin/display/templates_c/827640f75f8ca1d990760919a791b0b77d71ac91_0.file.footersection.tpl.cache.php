<?php /* Smarty version 3.1.24, created on 2015-12-11 04:02:49
         compiled from "C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/footersection.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32564566a3cd974e4f0_94774016%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827640f75f8ca1d990760919a791b0b77d71ac91' => 
    array (
      0 => 'C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/footersection.tpl',
      1 => 1448742308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32564566a3cd974e4f0_94774016',
  'variables' => 
  array (
    'ADMIN_TEMPLATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_566a3cd9758138_33063593',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566a3cd9758138_33063593')) {
function content_566a3cd9758138_33063593 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32564566a3cd974e4f0_94774016';
?>

    <div id="footer-sec">
        &copy; 2015 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ADMIN_TEMPLATE']->value;?>
assets/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <!-- BOOTSTRAP SCRIPTS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ADMIN_TEMPLATE']->value;?>
assets/js/bootstrap.js"><?php echo '</script'; ?>
>
    <!-- METISMENU SCRIPTS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ADMIN_TEMPLATE']->value;?>
assets/js/jquery.metisMenu.js"><?php echo '</script'; ?>
>
       <!-- CUSTOM SCRIPTS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ADMIN_TEMPLATE']->value;?>
assets/js/custom.js"><?php echo '</script'; ?>
>
    


</body>
</html><?php }
}
?>