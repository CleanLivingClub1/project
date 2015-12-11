<?php /* Smarty version 3.1.24, created on 2015-12-11 04:22:15
         compiled from "C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/mealstypeadd.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13961566a41672e21b5_77316695%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17f8e1a6dd4ae9550193dba339928204b00e491c' => 
    array (
      0 => 'C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/mealstypeadd.tpl',
      1 => 1449711518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13961566a41672e21b5_77316695',
  'variables' => 
  array (
    'ADMIN_TEMPLATE' => 0,
    'ADMIN_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_566a4167318cb2_80295523',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566a4167318cb2_80295523')) {
function content_566a4167318cb2_80295523 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13961566a41672e21b5_77316695';
?>
 <div id="add" class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <span>Add New Type</span><span class="pull-right"><button id="close" class="btn-danger"><b>X</b></button>
		   	 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ADMIN_TEMPLATE']->value;?>
assets/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
		   
	
		   <?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function()
				{
				$("#close").click(function(){$("#add").hide();});
				});
			<?php echo '</script'; ?>
>
		   
		   </div>
		
		<div class="panel-body">
			<form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
mealstypes.php">
                <div class="form-group">
                    <label>Enter Name</label>
						<input class="form-control" name="tname" required placeholder="Iteam Name" type="text">
                </div>
                <input  type="submit" class="btn btn-success" value="save" name="savenewtype"/>
            </form>
        </div>
    </div>
</div>



<?php }
}
?>