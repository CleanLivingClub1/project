<?php /* Smarty version 3.1.24, created on 2015-12-10 08:38:36
         compiled from "/home1/lovegeni/public_html/dev/view/display/templates_admin/mealiteamsadd.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:60562911356699c7ca5ec32_85152118%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3798025e4b84066ccebfa6c306766ed83e34357e' => 
    array (
      0 => '/home1/lovegeni/public_html/dev/view/display/templates_admin/mealiteamsadd.tpl',
      1 => 1449756936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60562911356699c7ca5ec32_85152118',
  'variables' => 
  array (
    'ADMIN_TEMPLATE' => 0,
    'ADMIN_PATH' => 0,
    'mealtype' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56699c7cad4df2_71256650',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56699c7cad4df2_71256650')) {
function content_56699c7cad4df2_71256650 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '60562911356699c7ca5ec32_85152118';
?>
 <div id="add" class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <span>Add New Meal Items</span><span class="pull-right"><button id="close" class="btn-danger"><b>X</b></button>
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
		<form role="form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
mealiteams.php" enctype="multipart/form-data">
		<div class="panel-body">
			<div class="form-group">
                    <label> Meal Type</label>
						<select class="form-control" name="mealtype">
							<option value="">-----Select--------</option>
							<?php
$_from = $_smarty_tpl->tpl_vars['mealtype']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['val']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$foreach_val_Sav = $_smarty_tpl->tpl_vars['val'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
						</select>
                </div>
				<div class="form-group">
				<label>Title</label>
					<input class="form-control" required name="title"  type="text">
				</div>
				<div class="form-group">
				<label>Description</label>
					<textarea class="form-control" required name="description"  rows="3" 	></textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Picture</label>
					<input class="btn btn-file btn-default" required name="picture" id="picture"  type="file">
				</div>
				<div class="form-group">
					<label>Video</label>
					<input class="btn btn-file btn-default" required name="video" id="video"  type="file">
				</div>
                <input  type="submit" class="btn btn-success" value="save" name="savenewmealiteams"/>
            </form>
        </div>
    </div>
</div>



<?php }
}
?>