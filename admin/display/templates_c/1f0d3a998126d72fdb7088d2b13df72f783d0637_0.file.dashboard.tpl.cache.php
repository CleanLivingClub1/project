<?php /* Smarty version 3.1.24, created on 2015-12-10 08:22:00
         compiled from "/home1/lovegeni/public_html/dev/view/display/templates_admin/dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:65492492856699898348c84_76405994%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f0d3a998126d72fdb7088d2b13df72f783d0637' => 
    array (
      0 => '/home1/lovegeni/public_html/dev/view/display/templates_admin/dashboard.tpl',
      1 => 1449756931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65492492856699898348c84_76405994',
  'variables' => 
  array (
    'ADMIN_PATH' => 0,
    'ADMIN_TEMPLATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5669989840b861_86218067',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5669989840b861_86218067')) {
function content_5669989840b861_86218067 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '65492492856699898348c84_76405994';
echo $_smarty_tpl->getSubTemplate ('headsection.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body>
    
        <!-- /. NAV TOP  -->
			<?php echo $_smarty_tpl->getSubTemplate ('dashbord_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="main-box mb-red">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
meals.php">
                                <i class="fa fa-file fa-2x"></i>
                                <h5>Meal</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-box mb-dull">
                             <a  href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
gallery.php">
									<i class="fa fa-paint-brush fa-2x"></i>
									<h5>Goale</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-box mb-pink">
                            <a  href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
members.php">
									<i class="fa fa-info fa-2x"></i>
									<h5>Users Management</h5>
                            </a>
                        </div>
                    </div>
					 <div class="col-md-3">
                        <div class="main-box mb-DarkCyan">
                            <a  href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
latestnews.php">
									<i class="fa fa-keyboard-o fa-2x"></i>
									<h5>Order Management</h5>
                            </a>
                        </div>
                    </div>
				</div>
                <!-- /. ROW  -->
 
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
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
</html>
<?php }
}
?>