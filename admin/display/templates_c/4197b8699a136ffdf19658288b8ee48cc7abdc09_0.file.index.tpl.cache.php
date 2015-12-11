<?php /* Smarty version 3.1.24, created on 2015-12-10 10:07:08
         compiled from "/home1/lovegeni/public_html/dev/view/display/templates_admin/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1297513345669b13cd277b2_62702506%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4197b8699a136ffdf19658288b8ee48cc7abdc09' => 
    array (
      0 => '/home1/lovegeni/public_html/dev/view/display/templates_admin/index.tpl',
      1 => 1449767215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1297513345669b13cd277b2_62702506',
  'variables' => 
  array (
    'TEMPLATE' => 0,
    'logfail' => 0,
    'ADMIN_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5669b13cd82ae1_86280034',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5669b13cd82ae1_86280034')) {
function content_5669b13cd82ae1_86280034 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1297513345669b13cd277b2_62702506';
?>

<link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
/css/style1.css" rel="stylesheet" type="text/css" />

<body>
	  <div class="container text-center">
            <div class="col-md-12">
              <h1 class="text-center">Clean Living Club</h1> 
            </div>
        </div>
	  	
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
		  
          <h4 class="text-center">Login</h4>
      </div>
	  
	   <?php if (isset($_smarty_tpl->tpl_vars['logfail']->value)) {?>
     <div class="text-center">
        <?php echo $_smarty_tpl->tpl_vars['logfail']->value;?>

		</div>
		
  	<?php }?>
      <div class="modal-body loginbody">
          <form class="form col-md-12 center-block" action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
index.php" method="POST">
            <div class="form-group">
              <input type="text" name="username" class="form-control input-lg" placeholder="UserName">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" name="login">Sign In</button>
            </div>
          </form>
      </div>

  </div>
  </div> 
   
</body>
</html>
<?php }
}
?>