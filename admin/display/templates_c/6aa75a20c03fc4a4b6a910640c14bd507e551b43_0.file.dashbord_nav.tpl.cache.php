<?php /* Smarty version 3.1.24, created on 2015-12-11 04:02:49
         compiled from "C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/dashbord_nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12358566a3cd97002f9_91651379%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aa75a20c03fc4a4b6a910640c14bd507e551b43' => 
    array (
      0 => 'C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/dashbord_nav.tpl',
      1 => 1449790380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12358566a3cd97002f9_91651379',
  'variables' => 
  array (
    'INDEX_URL' => 0,
    'ADMIN_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_566a3cd9713b70_21207441',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566a3cd9713b70_21207441')) {
function content_566a3cd9713b70_21207441 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12358566a3cd97002f9_91651379';
?>
 <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['INDEX_URL']->value;?>
index.php">Clean Living Club</a>
            </div>

            <div class="header-right">
				
                <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
/ulogout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x">&nbsp; 	Logout</i></a>

            </div>
        </nav>
		<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
					<li>
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
					<li>
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
meals.php"><i class="fa fa-file "></i>Meal</a>
                    </li>
                    <li>
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
gallery.php"><i class="fa fa-paint-brush "></i>Goal</a>
                    </li>
					<li>
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
members.php"><i class="fa fa-info "></i>User Management</a>
                    </li>
					<li>
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
latestnews.php"><i class="fa fa-keyboard-o "></i>Order Management</a>
                    </li>
                    
                  
                </ul>

            </div>

        </nav>
       <?php }
}
?>