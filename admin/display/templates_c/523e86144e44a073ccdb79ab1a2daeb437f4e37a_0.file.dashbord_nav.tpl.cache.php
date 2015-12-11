<?php /* Smarty version 3.1.24, created on 2015-12-10 08:22:00
         compiled from "/home1/lovegeni/public_html/dev/view/display/templates_admin/dashbord_nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:163923947656699898414ec6_69398624%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '523e86144e44a073ccdb79ab1a2daeb437f4e37a' => 
    array (
      0 => '/home1/lovegeni/public_html/dev/view/display/templates_admin/dashbord_nav.tpl',
      1 => 1449756932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163923947656699898414ec6_69398624',
  'variables' => 
  array (
    'INDEX_URL' => 0,
    'ADMIN_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5669989842d476_16950572',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5669989842d476_16950572')) {
function content_5669989842d476_16950572 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '163923947656699898414ec6_69398624';
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