<?php /* Smarty version 3.1.24, created on 2015-12-11 04:02:49
         compiled from "C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/mealdashbord.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4615566a3cd9731039_45764869%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dda2db79e3a32091457b4c4c29b160cf8d8d36d' => 
    array (
      0 => 'C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/mealdashbord.tpl',
      1 => 1449712370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4615566a3cd9731039_45764869',
  'variables' => 
  array (
    'ADMIN_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_566a3cd973ac79_13127139',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566a3cd973ac79_13127139')) {
function content_566a3cd973ac79_13127139 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4615566a3cd9731039_45764869';
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