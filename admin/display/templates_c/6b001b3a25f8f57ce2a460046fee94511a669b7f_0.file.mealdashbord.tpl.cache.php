<?php /* Smarty version 3.1.24, created on 2015-12-10 08:25:26
         compiled from "/home1/lovegeni/public_html/dev/view/display/templates_admin/mealdashbord.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:213755055566999661113d7_76676614%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b001b3a25f8f57ce2a460046fee94511a669b7f' => 
    array (
      0 => '/home1/lovegeni/public_html/dev/view/display/templates_admin/mealdashbord.tpl',
      1 => 1449756935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213755055566999661113d7_76676614',
  'variables' => 
  array (
    'ADMIN_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56699966143738_47907530',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56699966143738_47907530')) {
function content_56699966143738_47907530 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '213755055566999661113d7_76676614';
?>
<!-- /. ROW  -->
                <div class="row">
					<div class="col-md-3">
                        <div class="main-box mb-DarkCyan">
                            <a  href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
mealstypes.php">
								<h5>Meal Type</h5>
                            </a>
                        </div>
                    </div>
					
					 <div class="col-md-3">
                        <div class="main-box mb-pink">
                            <a  href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
mealiteams.php">
								<h5>Meal Items</h5>
                            </a>
                        </div>
                    </div>
                   
                    <div class="col-md-3">
                        <div class="main-box mb-dull">
                             <a  href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
mealdate.php">
								<h5>Meal Date</h5>
                            </a>
                        </div>
                    </div>
                   
				</div>
                <!-- /. ROW  --><?php }
}
?>