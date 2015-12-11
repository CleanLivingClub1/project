<?php /* Smarty version 3.1.24, created on 2015-12-10 08:26:02
         compiled from "/home1/lovegeni/public_html/dev/view/display/templates_admin/mealiteams.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4964469885669998a110f09_99297006%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07db4c12c5c22689e4400795364f5e22c853af7f' => 
    array (
      0 => '/home1/lovegeni/public_html/dev/view/display/templates_admin/mealiteams.tpl',
      1 => 1449756936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4964469885669998a110f09_99297006',
  'variables' => 
  array (
    'ADMIN_TEMPLATE' => 0,
    'mealiteams' => 0,
    'key' => 0,
    'val' => 0,
    'TEMPLATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5669998a21a4f5_41787749',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5669998a21a4f5_41787749')) {
function content_5669998a21a4f5_41787749 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4964469885669998a110f09_99297006';
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
				
               <div class="row">
			   <div class="col-md-10"></div>
			   <div class="col-md-2 pull-right">
			   <button id="newtestimonial" class="btn btn-info" >Add New</button>
			   </div>
			   </div>
			<div id="addnewloadpage"></div>
            <div class="row">
                <div class="col-md-12">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            <big><b>Meal Items</b></big>
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="row">
                                        <div class="col-md-12 bg-info">
                                            <div class="col-md-1"><b>S.no</b></div>
                                            <div class="col-md-2"><b>Meal Type Name</b></div>
											<div class="col-md-1"><b>Title</b></div>
											<div class="col-md-2"><b>Description</b></div>
											<div class="col-md-1"><b>picture</b></div>
											<div class="col-md-1"><b>video</b></div>
                                            <div class="col-md-2"><b>Edit</b></div>
											<div class="col-md-2"><b>Delete</b></div>
									    </div>
                                   <?php
$_from = $_smarty_tpl->tpl_vars['mealiteams']->value;
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
									<?php if (!(1 & $_smarty_tpl->tpl_vars['key']->value)) {?>
                                        <div class="col-md-12 bg-warning">
									<?php } else { ?>	
										<div class="col-md-12 bg-success">
									<?php }?>
                                            <div class="col-md-1"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</div>
                                            <div class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['val']->value['mealtypename'];?>
</div>
                                            <div class="col-md-1"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</div>
                                            <div class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
</div>
                                            <div class="col-md-1"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
upload/<?php echo $_smarty_tpl->tpl_vars['val']->value['picture'];?>
" class="image"/></div>
                                            <div class="col-md-1"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
upload/<?php echo $_smarty_tpl->tpl_vars['val']->value['video'];?>
" class="image"/></div>
                                            <div class="col-md-2"><button id="edit<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="btn btn-success">Edit</button><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" id="editVal<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"/></div>
											<div class="col-md-2"><button id="delete<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="btn btn-danger">Delete</button><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" id="deleteVal<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"/></div>
                                        </div>
									<div id="editvalue<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"></div>
									<div id="deletevalue<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"></div>
										<?php echo '<script'; ?>
 type="text/javascript">
										$(document).ready(function()
										{
											$("#edit<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
").click(function(){
											
												var mid	= $("#editVal<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
").val();
												
												$("#editvalue<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
").load("mealiteams.php?editmealitem="+mid);
											});
											
											$("#delete<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
").click(function(){
											var mid		= $("#editVal<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
").val();
											var check	=	confirm("Are you sure to delete?");
												if (check == true)
												{							
										
													$("#deletevalue<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
").load("mealiteams.php?deletemealitem="+mid);
												}
											});
										});
										<?php echo '</script'; ?>
>
								<?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
								</div>
                            </div>
                        </div>
                    </div>
					
                    <!--  end  Context Classes  -->
                </div>
            </div>
			
			
			<?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function()
				{
				$("#newtestimonial").click(function(){
							$("#addnewloadpage").load("mealiteams.php?addnewtype");
			});
			
				});
			<?php echo '</script'; ?>
>
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