<?php /* Smarty version 3.1.24, created on 2015-12-11 04:03:30
         compiled from "C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/meals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30390566a3d022b9312_31156699%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf94c2c0e24efbef7535a1f2852e3d9efac6bcc3' => 
    array (
      0 => 'C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/meals.tpl',
      1 => 1449711137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30390566a3d022b9312_31156699',
  'variables' => 
  array (
    'ADMIN_TEMPLATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_566a3d0242c4e0_20358055',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566a3d0242c4e0_20358055')) {
function content_566a3d0242c4e0_20358055 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30390566a3d022b9312_31156699';
echo $_smarty_tpl->getSubTemplate ('headsection.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<body>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ADMIN_TEMPLATE']->value;?>
assets/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
        <!-- /. NAV TOP  -->
			<?php echo $_smarty_tpl->getSubTemplate ('dashbord_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <!-- /. NAV SIDE  -->
		
        <div id="page-wrapper">
            <div id="page-inner">
			<!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Meal</h1>
                    </div>
                </div>
			<!-- /. ROW  -->
			<?php echo $_smarty_tpl->getSubTemplate ('mealdashbord.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <!-- /. ROW  -->
			
		    <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

   <?php echo $_smarty_tpl->getSubTemplate ('footersection.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>