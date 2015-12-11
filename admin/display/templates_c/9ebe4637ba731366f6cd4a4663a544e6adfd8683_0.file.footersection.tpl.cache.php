<?php /* Smarty version 3.1.24, created on 2015-12-10 08:25:26
         compiled from "/home1/lovegeni/public_html/dev/view/display/templates_admin/footersection.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:48617958656699966148661_11237684%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ebe4637ba731366f6cd4a4663a544e6adfd8683' => 
    array (
      0 => '/home1/lovegeni/public_html/dev/view/display/templates_admin/footersection.tpl',
      1 => 1449756932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48617958656699966148661_11237684',
  'variables' => 
  array (
    'ADMIN_TEMPLATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56699966159171_54693485',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56699966159171_54693485')) {
function content_56699966159171_54693485 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '48617958656699966148661_11237684';
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