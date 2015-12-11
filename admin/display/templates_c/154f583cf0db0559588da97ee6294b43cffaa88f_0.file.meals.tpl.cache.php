<?php /* Smarty version 3.1.24, created on 2015-12-10 08:25:26
         compiled from "/home1/lovegeni/public_html/dev/view/display/templates_admin/meals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12698913625669996608f9d6_04563162%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154f583cf0db0559588da97ee6294b43cffaa88f' => 
    array (
      0 => '/home1/lovegeni/public_html/dev/view/display/templates_admin/meals.tpl',
      1 => 1449756937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12698913625669996608f9d6_04563162',
  'variables' => 
  array (
    'ADMIN_TEMPLATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56699966107eb7_34407917',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56699966107eb7_34407917')) {
function content_56699966107eb7_34407917 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12698913625669996608f9d6_04563162';
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