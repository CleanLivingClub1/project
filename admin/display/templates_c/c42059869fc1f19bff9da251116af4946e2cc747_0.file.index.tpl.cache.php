<?php /* Smarty version 3.1.24, created on 2015-12-11 04:03:19
         compiled from "C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16733566a3cf739d257_35088903%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c42059869fc1f19bff9da251116af4946e2cc747' => 
    array (
      0 => 'C:/xampp/htdocs/cleanlivingclub/view/display/templates_admin/index.tpl',
      1 => 1449790598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16733566a3cf739d257_35088903',
  'variables' => 
  array (
    'ADMIN_PATH' => 0,
    'logfail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_566a3cf74e92f9_56549072',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566a3cf74e92f9_56549072')) {
function content_566a3cf74e92f9_56549072 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16733566a3cf739d257_35088903';
echo $_smarty_tpl->getSubTemplate ('headsection.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <h1>Clean Living Club</h1>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form"  action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PATH']->value;?>
index.php" method="post">
                                    <hr />
                                    <?php if (isset($_smarty_tpl->tpl_vars['logfail']->value)) {?><h5 style="color:red"><?php echo $_smarty_tpl->tpl_vars['logfail']->value;?>
</h5><?php } else { ?><h5>Enter Details to Login</h5><?php }?>
                                       <br />
									 
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " required="required"/>
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" required="required"/>
                                        </div>
                                   
                                     <input type="submit" class="btn btn-primary " value='Login Now'  name='login'/>
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
<?php }
}
?>