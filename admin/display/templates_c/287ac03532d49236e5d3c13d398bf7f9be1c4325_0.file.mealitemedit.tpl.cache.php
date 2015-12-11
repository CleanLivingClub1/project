<?php /* Smarty version 3.1.24, created on 2015-12-11 04:03:37
         compiled from "C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/mealitemedit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12215566a3d09e15db4_73687928%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '287ac03532d49236e5d3c13d398bf7f9be1c4325' => 
    array (
      0 => 'C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/mealitemedit.tpl',
      1 => 1449729246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12215566a3d09e15db4_73687928',
  'variables' => 
  array (
    'tdata' => 0,
    'ADMIN_TEMPLATE' => 0,
    'ADMIN_PATH' => 0,
    'mealtype' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_566a3d09e9aac4_44020812',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566a3d09e9aac4_44020812')) {
function content_566a3d09e9aac4_44020812 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12215566a3d09e15db4_73687928';
?>
 <div id="page<?php echo $_smarty_tpl->tpl_vars['tdata']->value[0]['id'];?>
" class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <span>Edit Item Type</span><span class="pull-right"><button id="close<?php echo $_smarty_tpl->tpl_vars['tdata']->value[0]['id'];?>
" class="btn-danger"><b>X</b></button>
		   	 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ADMIN_TEMPLATE']->value;?>
assets/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
		   
		   <?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function()
				{
				$("#close<?php echo $_smarty_tpl->tpl_vars['tdata']->value[0]['id'];?>
").click(function(){$("#page<?php echo $_smarty_tpl->tpl_vars['tdata']->value[0]['id'];?>
").hide();});
				});
			<?php echo '</script'; ?>
>
		   
		   </div>
		
		<div class="panel-body">
			<form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
mealiteams.php">
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
$_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['type']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
$foreach_type_Sav = $_smarty_tpl->tpl_vars['type'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['type'] = $foreach_type_Sav;
}
?>
						</select>
                </div>
				<div class="form-group">
				<label>Title</label>
					<input type="hidden" name='id' value="<?php echo $_smarty_tpl->tpl_vars['tdata']->value[0]['id'];?>
"/>
					<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tdata']->value[0]['title'];?>
" required name="title"  type="text">
				</div>
				<div class="form-group">
				<label>Description</label>
					<textarea class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tdata']->value[0]['description'];?>
" required name="description"  rows="3" 	></textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Picture</label>
					<input class="btn btn-file btn-default" required name="picture" id="picture"  type="file">
				</div>
				<div class="form-group">
					<label>Video</label>
					<input class="btn btn-file btn-default" required name="video" id="video"  type="file">
				</div>
        
			    <input  type="submit" class="btn btn-success" value="save" name="saveeditmealitem"/>
            </form>
        </div>
    </div>
</div>



<?php }
}
?>