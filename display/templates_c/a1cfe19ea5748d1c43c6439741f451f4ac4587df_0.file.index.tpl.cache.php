<?php /* Smarty version 3.1.24, created on 2015-12-10 07:18:33
         compiled from "view/display/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:161299675566989b9c7e007_28568984%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1cfe19ea5748d1c43c6439741f451f4ac4587df' => 
    array (
      0 => 'view/display/templates/index.tpl',
      1 => 1449756921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161299675566989b9c7e007_28568984',
  'variables' => 
  array (
    'TEMPLATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_566989b9f3a0b7_86174979',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566989b9f3a0b7_86174979')) {
function content_566989b9f3a0b7_86174979 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '161299675566989b9c7e007_28568984';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Clean Living Club</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="DV Tech Services Pvt Ltd">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
css/bootstrap.min.css" rel="stylesheet">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
css/settings.css" rel="stylesheet">		
		<!-- FlexSlider Css -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
css/flexslider.css" media="screen" />
		<!-- Portfolio CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
css/font-awesome.min.css" rel="stylesheet">	
		<!-- Custom Less -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
css/less-style.css" rel="stylesheet">	
		<!-- Custom CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
css/style.css" rel="stylesheet">
		<!--[if IE]><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
css/ie-style.css"><![endif]-->
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
		
			
		<!-- Shopping cart Modal -->
		<div class="modal fade" id="shoppingcart1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Shopping Cart</h4>
					</div>
					<div class="modal-body">
						<!-- Items table -->
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Quantity</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="#">Exception Reins Evocative</a></td>
									<td>2</td>
									<td>$200</td>
								</tr>
								<tr>
									<td><a href="#">Taut Mayoress Alias Appendicitis</a></td>
									<td>1</td>
									<td>$190</td>
								</tr>
								<tr>
									<td><a href="#">Sinter et Molests Perfectionist</a></td>
									<td>4</td>
									<td>$99</td>
								</tr>
								<tr>
									<th></th>
									<th>Total</th>
									<th>$489</th>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" href="<?php echo @constant('INDEX_URL');?>
view/items.php">Continue Shopping</button>
						<button type="button" class="btn btn-info">Checkout</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- Model End -->
		
		<!-- Page Wrapper -->
		<div class="wrapper">
		
			<!-- Header Start -->
			
			<div class="header">
				<div class="container">
					<!-- Header top area content -->
					<div class="header-top">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<!-- Header top left content contact -->
								<div class="header-contact">
									<!-- Contact number -->
									<span><i class="fa fa-phone red"></i> 888-888-8888</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Header top right content search box -->
								<div class=" header-search">
									<form class="form" role="form">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Search...">
										  <span class="input-group-btn">
											<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
										  </span>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Button Kart -->
								<div class="btn-cart-md">
									<a class="cart-link" href="#">
										<!-- Image -->
										<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/cart.png" alt="" />
										<!-- Heading -->
										<h4>Shopping Cart</h4>
										<span>3 items $489/-</span>
										<div class="clearfix"></div>
									</a>
									<ul class="cart-dropdown" role="menu">
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<!-- Item remove icon -->
												<a href="#"><i class="fa fa-times"></i></a>
												<!-- Image -->
												<img class="img-responsive img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/nav-menu/nav1.jpg" alt="" />
												<!-- Title for purchase item -->
												<span class="cart-title"><a href="#">Exception Reins Evocative</a></span>
												<!-- Cart item price -->
												<span class="cart-price pull-right red">$200/-</span>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<!-- Item remove icon -->
												<a href="#"><i class="fa fa-times"></i></a>
												<!-- Image -->
												<img class="img-responsive img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/nav-menu/nav2.jpg" alt="" />
												<!-- Title for purchase item -->
												<span class="cart-title"><a href="#">Taut Mayoress Alias Appendicitis</a></span>
												<!-- Cart item price -->
												<span class="cart-price pull-right red">$190/-</span>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<!-- Item remove icon -->
												<a href="#"><i class="fa fa-times"></i></a>
												<!-- Image -->
												<img class="img-responsive img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/nav-menu/nav3.jpg" alt="" />
												<!-- Title for purchase item -->
												<span class="cart-title"><a href="#">Sinter et Molests Perfectionist</a></span>
												<!-- Cart item price -->
												<span class="cart-price pull-right red">$99/-</span>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<a class="btn btn-danger" data-toggle="modal" href="#shoppingcart1">Checkout</a>
											</div>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-5">
							<!-- Link -->
							<a href="<?php echo @constant('INDEX_URL');?>
index.php">
								<!-- Logo area -->
								<div class="logo">
									<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/logo.png" alt="" />
									<!-- Heading -->
									<h1>Clean Living Club</h1>
									<!-- Paragraph -->
									<p>Facility ester expedite instinct.</p>
								</div>
							</a>
						</div>
						<div class="col-md-8 col-sm-7">
							<!-- Navigation -->
							<nav class="navbar navbar-default navbar-right" role="navigation">
								<div class="container-fluid">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<li><a href="<?php echo @constant('INDEX_URL');?>
index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/nav-menu/nav1.jpg" class="img-responsive" alt="" /> Home</a></li>
											<li class="dropdown hidden-xs">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/nav-menu/nav2.jpg" class="img-responsive" alt="" /> Menu <b class="caret"></b></a>
												<ul class="dropdown-menu dropdown-md">
													<li>
														<div class="row">
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h3>Vegetarian</h3>
																	<!-- Image -->
																	<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish1.jpg" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Sea nut perspicacity under omni piste natures mirror of there with consequent.</p>
																	<!-- Button -->
																	<a href="<?php echo @constant('INDEX_URL');?>
view/menu.php" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h3>Non-Vegetarian</h3>
																	<!-- Image -->
																	<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish2.jpg" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Sea nut perspicacity under omni piste natures mirror as precode consequent.</p>
																	<!-- Button -->
																	<a href="<?php echo @constant('INDEX_URL');?>
view/menu.php" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h3>Special Menu</h3>
																	<!-- Image -->
																	<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish3.jpg" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Sea nut perspicacity under omni piste natures mirror consequent.</p>
																	<!-- Button -->
																	<a href="<?php echo @constant('INDEX_URL');?>
view/menu.php" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li class="dropdown visible-xs">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/menu.php">Vegetarian</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/menu.php">Non Vegetarian</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/menu.php">Special Menu</a></li>
												</ul>
											</li>
											<li><a href="<?php echo @constant('INDEX_URL');?>
view/gallery.php"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/nav-menu/nav3.jpg" class="img-responsive" alt="" /> Gallery</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/nav-menu/nav4.jpg" class="img-responsive" alt="" /> Shop <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/items.php">Shopping</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/item-single.php">Order Now</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/checkout.php">Checkout</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/reserve-seats.php">Reservation</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/contact.php">Contact Us</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/nav-menu/nav5.jpg" class="img-responsive" alt="" /> Pages <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/error.php">404 Error</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/0-base.php">Blank Page</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/blog.php">Blog</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/blog-single.php">Blog Single</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/components.php">Components</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/general.php">General</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/nutrition-info.php">Nutrition Info</a></li>
													<li><a href="<?php echo @constant('INDEX_URL');?>
view/recipe.php">Recipes</a></li>
												</ul>
											</li>
											<li><a href="<?php echo @constant('INDEX_URL');?>
view/aboutus.php"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/nav-menu/nav6.jpg" class="img-responsive" alt="" /> About</a></li>
										</ul>
									</div><!-- /.navbar-collapse -->
								</div><!-- /.container-fluid -->
							</nav>
						</div>
					</div>
				</div> <!-- / .container -->
			</div>
			
			<!-- Header End -->
			
			<!-- Slider Start 
			#################################
				- THEMEPUNCH BANNER -
			#################################	-->

			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
							<!-- MAIN IMAGE -->
							<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/slide2.jpg"  alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
							
							<!-- LAYERS -->
							<!-- LAYER NR. 1 -->
							<div class="tp-caption lfl largeblackbg br-red"
								data-x="20" 
								data-y="100"
								data-speed="1500"
								data-start="1200"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 3">We Make Delicious...
							</div>
							<!-- LAYER NR. 2.0 -->
							<div class="tp-caption lfl medium_bg_darkblue br-green"
								data-x="20"
								data-y="200"
								data-speed="1500"
								data-start="1800"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off">Consectetur Adipisicing
							</div>
							<!-- LAYER NR. 2.1 -->
							<div class="tp-caption lfl medium_bg_darkblue br-lblue"
								data-x="20" 
								data-y="250"
								data-speed="1500"
								data-start="2100"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 3">Sed do Seusmod
							</div>
							<!-- LAYER NR. 2.2 -->
							<div class="tp-caption lfl medium_bg_darkblue br-purple"
								data-x="20" 
								data-y="300"
								data-speed="1500"
								data-start="2400"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 3">Incididunt ut Labore
							</div>
							<!-- LAYER NR. 2.3 -->
							<div class="tp-caption lfl medium_bg_darkblue br-orange"
								data-x="20" 
								data-y="350"
								data-speed="1500"
								data-start="2700"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 3">Excepteur Sint 
							</div>
							<!-- LAYER NR. 3.0 -->
							<div class="tp-caption customin customout"
								data-x="right" data-hoffset="-50"
								data-y="100"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="400"
								data-start="3600"
								data-easing="Power3.easeInOut"
								data-endspeed="300"
								style="z-index: 5"><img class="slide-img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/s21.png" alt="" />
							</div>
							<!-- LAYER NR. 3.1 -->
							<div class="tp-caption customin customout"
								data-x="right" data-hoffset="-120"
								data-y="130"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="400"
								data-start="3900"
								data-easing="Power3.easeInOut"
								data-endspeed="300"
								style="z-index: 6"><img class="slide-img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/s22.png" alt="" />
							</div>
							<!-- LAYER NR. 3.2 -->
							<div class="tp-caption customin customout"
								data-x="right" data-hoffset="-10"
								data-y="160"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="400"
								data-start="4200"
								data-easing="Power3.easeInOut"
								data-endspeed="300"
								style="z-index: 7"><img class="slide-img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/s23.png" alt="" />
							</div>
							<!-- LAYER NR. 3.3 -->
							<div class="tp-caption customin customout"
								data-x="right" data-hoffset="-80"
								data-y="190"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="400"
								data-start="4500"
								data-easing="Power3.easeInOut"
								data-endspeed="300"
								style="z-index: 8"><img class="slide-img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/s24.png" alt="" />
							</div>
						</li>
						<li data-transition="zoomin" data-slotamount="6" data-masterspeed="400" >
							<!-- MAIN IMAGE -->
							<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/transparent.png" style="background-color:#fff" alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
							
							<!-- LAYERS -->
							<!-- LAYER NR. 1 -->
							<div class="tp-caption sfl modern_medium_light"
								data-x="20" 
								data-y="90"
								data-speed="800"
								data-start="1000"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 3">The New
							</div>
							<!-- LAYER NR. 1.1 -->
							<div class="tp-caption large_bold_grey heading customin customout"
								data-x="10"
								data-y="125"
								data-splitin="chars"
								data-splitout="chars"
								data-elementdelay="0.05"
								data-start="1500"
								data-speed="900"
								data-easing="Back.easeOut"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-endspeed="500"
								data-endeasing="Power3.easeInOut"
								data-captionhidden="on"
								style="z-index:5">Clean Living Club
							</div>
							<!-- LAYER NR. 2 -->
							<div class="tp-caption customin customout"
								data-x="right" 
								data-y="100"
								data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="800"
								data-start="2000"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 3"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/s11.png" alt="" />
							</div>
							<!-- LAYER NR. 2.1 -->
							<div class="tp-caption customin customout"
								data-x="right" 
								data-y="100"
								data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="800"
								data-start="2300"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 3"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/s12.png" alt="" />
							</div>
							<!-- LAYER NR. 2.2 -->
							<div class="tp-caption customin customout"
								data-x="right" 
								data-y="100"
								data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="800"
								data-start="2600"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 3"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/s13.png" alt="" />
							</div>
							<!-- LAYER NR. 2.3 -->
							<div class="tp-caption sft"
								data-x="right" data-hoffset="-400"
								data-y="80"
								data-speed="1000"
								data-start="3000"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 10"><span class="price-tag br-white">30%<br />Off</span>
							</div>
							<!-- LAYER NR. 3 -->
							<div class="tp-caption finewide_verysmall_white_mw paragraph customin customout tp-resizeme"
								data-x="20"
								data-y="210" 
								data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="3600"
								data-easing="Power3.easeInOut"
								data-splitin="lines"
								data-splitout="lines"
								data-elementdelay="0.2"
								data-endelementdelay="0.08"
								data-endspeed="300"
								style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum dolor sit amet, consetetur<br/>  sadipscing elitr, sed diam nonumy<br/>  eirmod tempor invidunt ut labore et<br/>  dolore magna aliquyam erat, sed diam <br/> voluptua. At vero eos et accusam.
							</div>
							<!-- LAYER NR. 4 -->
							<div class="tp-caption sfb"
								data-x="20" 
								data-y="335"
								data-speed="800"
								data-start="4500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 11"><a class="btn btn-danger" href="#">Download</a> <a class="btn btn-success hidden-xs" href="#">Purchase Now</a>
							</div>
						</li>
						<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="600" >
							<!-- MAIN IMAGE -->
							<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/transparent.png" style="background-color:#fea501" alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
							<!-- LAYERS NR. 1 -->
							<div class="tp-caption lfl"
								data-x="left"
								data-y="100"
								data-speed="800"
								data-start="1200"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/s35.png" alt="" />
							</div>
							<!-- LAYERS NR. 2 -->
							<div class="tp-caption lfr large_bold_grey heading white"
								data-x="right" data-hoffset="-10"
								data-y="120"
								data-speed="800"
								data-start="2000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">Tasty Yammi
							</div>
							<!-- LAYER NR. 3 -->
							<div class="tp-caption whitedivider3px customin customout tp-resizeme"
								data-x="right" data-hoffset="-20"
								data-y="210" data-voffset="0"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="2300"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="500"
								style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
							</div>
							<!-- LAYER NR. 4 -->
							<div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
								data-x="right" data-hoffset="-10"
								data-y="245" data-voffset="0"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="2700"
								data-easing="Power3.easeInOut"
								data-splitin="chars"
								data-splitout="chars"
								data-elementdelay="0.08"
								data-endelementdelay="0.08"
								data-endspeed="500"
								style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">Hamburger
							</div>
							<!-- LAYER NR. 5 -->
							<div class="tp-caption finewide_verysmall_white_mw white customin customout tp-resizeme text-right paragraph"
								data-x="right" data-hoffset="-10"
								data-y="300" 
								data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="3500"
								data-easing="Power3.easeInOut"
								data-splitin="lines"
								data-splitout="lines"
								data-elementdelay="0.2"
								data-endelementdelay="0.08"
								data-endspeed="300"
								style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum dolor sit amet, consetetur  sadipscing elitr,<br/> nonumy voluptu ansetetur  sadipscing elit. <br/> sed diam quisquam est nonumy voluptu vero eos et.
							</div>
						</li>
						<li data-transition="cube" data-slotamount="7" data-masterspeed="600" >
							<!-- MAIN IMAGE -->
							<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/slide2.jpg"  alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
							<!-- LAYERS NR. 1 -->
							<div class="tp-caption lfl"
								data-x="110"
								data-y="130"
								data-speed="800"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/s31.png" class="img-responsive" alt="" />
							</div>
							<!-- LAYERS NR. 2 -->
							<div class="tp-caption lfl"
								data-x="80"
								data-y="265"
								data-speed="800"
								data-start="2200"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/s33.png" class="img-responsive" alt="" />
							</div>
							<!-- LAYERS NR. 3 -->
							<div class="tp-caption lfl"
								data-x="450"
								data-y="312"
								data-speed="800"
								data-start="2700"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/slider/s34.png" class="img-responsive" alt="" />
							</div>
							<!-- LAYERS NR. 4 -->
							<div class="tp-caption sfr  thinheadline_dark white"
								data-x="right" data-hoffset="-10" 
								data-y="90"
								data-speed="800"
								data-start="3200"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 3">Online
							</div>
							<!-- LAYERS NR. 4.1 -->
							<div class="tp-caption lfr largepinkbg br-green"
								data-x="right" data-hoffset="-10"
								data-y="135"
								data-speed="800"
								data-start="3500"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">Seats Reserve
							</div>
							<!-- LAYERS NR. 5 -->
							<div class="tp-caption skewfromright medium_text text-right paragraph"
								data-x="right" data-hoffset="-10"
								data-y="225"
								data-speed="800"
								data-start="3800"
								data-easing="Power4.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeOut"
								data-captionhidden="off">At vero eos etntium accu amet, adipisicing samus iusto<br />praese  delen itieos etconsectetur atque corrupti<br />praese etntiumder delen itierrupti.
							</div>
							<!-- LAYERS NR. 6 // -->
							<div class="tp-caption lfr modern_big_redbg br-red"
								data-x="right"
								data-hoffset="-10"
								data-y="315"
								data-speed="1500"
								data-start="4100"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">Desktop or Laptop
							</div>	
							<!-- LAYERS NR. 6.1 // -->
							<div class="tp-caption lfr modern_big_redbg br-yellow"
								data-x="right"
								data-hoffset="-10"
								data-y="375"
								data-speed="1500"
								data-start="4400"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">Tablet or Phone
							</div>
						</li>
					</ul>
					<!-- Banner Timer -->
					<div class="tp-bannertimer"></div>
				</div>
			</div>
			<!-- Slider End -->
			
			
			
			<!-- Main Content -->
			<div class="main-content">
			
				<!-- Showcase Start -->
				
				<div class="showcase">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- Showcase section item -->
								<div class="showcase-item">
									<!-- Image -->
									<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/fruit2.png" alt="" />
									<!-- Heading -->
									<h3><a href="#">Equine Porno Sumos</a></h3>
									<!-- Paragraph -->
									<p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- Showcase section item -->
								<div class="showcase-item">
									<!-- Image -->
									<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/fruit3.png" alt="" />
									<!-- Heading -->
									<h3><a href="#">Equine Porno Sumos</a></h3>
									<!-- Paragraph -->
									<p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Showcase End -->
				
				<!-- Dishes Start -->
					
				<div class="dishes padd">
					<div class="container">
						<!-- Default Heading -->
						<div class="default-heading">
							<!-- Crown image -->
							<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/crown.png" alt="" />
							<!-- Heading -->
							<h2>New Dishes</h2>
							<!-- Paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<!-- Border -->
							<div class="border"></div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6">	
								<div class="dishes-item-container">
									<!-- Image Frame -->
									<div class="img-frame">
										<!-- Image -->
										<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish5.jpg" class="img-responsive" alt="" />
										<!-- Block for on hover effect to image -->
										<div class="img-frame-hover">
											<!-- Hover Icon -->
											<a href="#"><i class="fa fa-cutlery"></i></a>
										</div>
									</div>
									<!-- Dish Details -->
									<div class="dish-details">
										<!-- Heading -->
										<h3>Delicious Chinese</h3>
										<!-- Paragraph -->
										<p>At vero eos et accusal gusto for ides residuum lores.</p>
										<!-- Button -->
										<a href="#" class="btn btn-danger btn-sm">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="dishes-item-container">
									<!-- Image Frame -->
									<div class="img-frame">
										<!-- Image -->
										<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish6.jpg" class="img-responsive" alt="" />
										<!-- Block for on hover effect to image -->
										<div class="img-frame-hover">
											<!-- Hover Icon -->
											<a href="#"><i class="fa fa-cutlery"></i></a>
										</div>
									</div>
									<!-- Dish Details -->
									<div class="dish-details">
										<!-- Heading -->
										<h3>Spicy Onion Rings</h3>
										<!-- Paragraph -->
										<p>At vero eos et accusal gusto for ides residuum lores.</p>
										<!-- Button -->
										<a href="#" class="btn btn-danger btn-sm">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="dishes-item-container">
									<!-- Image Frame -->
									<div class="img-frame">
										<!-- Image -->
										<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish7.jpg" class="img-responsive" alt="" />
										<!-- Block for on hover effect to image -->
										<div class="img-frame-hover">
											<!-- Hover Icon -->
											<a href="#"><i class="fa fa-cutlery"></i></a>
										</div>
									</div>
									<!-- Dish Details -->
									<div class="dish-details">
										<!-- Heading -->
										<h3>Cream Cheese Cup</h3>
										<!-- Paragraph -->
										<p>At vero eos et accusal gusto for ides residuum lores.</p>
										<!-- Button -->
										<a href="#" class="btn btn-danger btn-sm">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="dishes-item-container">
									<!-- Image Frame -->
									<div class="img-frame">
										<!-- Image -->
										<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish8.jpg" class="img-responsive" alt="" />
										<!-- Block for on hover effect to image -->
										<div class="img-frame-hover">
											<!-- Hover Icon -->
											<a href="#"><i class="fa fa-cutlery"></i></a>
										</div>
									</div>
									<!-- Dish Details -->
									<div class="dish-details">
										<!-- Heading -->
										<h3>Spicy Cheese Pizza</h3>
										<!-- Paragraph -->
										<p>At vero eos et accusal gusto for ides residuum lores.</p>
										<!-- Button -->
										<a href="#" class="btn btn-danger btn-sm">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
				
				<!-- Dishes End -->
				
				<!-- menu Start -->
				
				<div class="menu padd">
					<div class="container">
						<!-- Default Heading -->
						<div class="default-heading">
							<!-- Crown image -->
							<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/crown.png" alt="" />
							<!-- Heading -->
							<h2>Menu</h2>
							<!-- Paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<!-- Border -->
							<div class="border"></div>
						</div>
						<!-- Menu content container -->
						<div class="menu-container">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<!-- Menu header -->
									<div class="menu-head">
										<!-- Image for menu item -->
										<img class="menu-img img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/menu/menu1.jpg" alt="" />
										<!-- Menu title / Heading -->
										<h3>Seafood</h3>
										<!-- Border for above heading -->
										<div class="title-border br-red"></div>
									</div>
									<!-- Menu item details -->
									<div class="menu-details br-red">
										<!-- Menu list -->
										<ul class="list-unstyled">
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Fish</a> 
													<!-- Price badge -->
													<span class="pull-right">$12</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Consequent</a>
													<!-- Price badge -->
													<span class="pull-right">$9</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Praising Pain</a>
													<!-- Price badge -->
													<span class="pull-right">$19</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Exception Tint</a>
													<!-- Price badge -->
													<span class="pull-right">$6</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Laborious Rhys</a>
													<!-- Price badge -->
													<span class="pull-right">$29</span>
													<div class="clearfix"></div>
												</div>
											</li>
										</ul>
									</div><!-- / Menu details end -->
								</div>
								<div class="col-md-4 col-sm-4">
									<!-- Menu header -->
									<div class="menu-head">
										<!-- Image for menu item -->
										<img class="menu-img img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/menu/menu2.jpg" alt="" />
										<!-- Menu title / Heading -->
										<h3>Chicken</h3>
										<!-- Border for above heading -->
										<div class="title-border br-green"></div>
									</div>
									<!-- Menu item details -->
									<div class="menu-details br-green">
										<!-- Menu list -->
										<ul class="list-unstyled">
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Fried Chicken</a>
													<!-- Price badge -->
													<span class="pull-right">$29</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Chicken Curie</a>
													<!-- Price badge -->
													<span class="pull-right">$49</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Praising Pain</a>
													<!-- Price badge -->
													<span class="pull-right">$19</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Exception Tint</a>
													<!-- Price badge -->
													<span class="pull-right">$6</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Laborious Rhys</a>
													<!-- Price badge -->
													<span class="pull-right">$29</span>
													<div class="clearfix"></div>
												</div>
											</li>
										</ul>
									</div><!-- / Menu details end -->
								</div>
								<div class="col-md-4 col-sm-4">
									<!-- Menu header -->
									<div class="menu-head">
										<!-- Image for menu item -->
										<img class="menu-img img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/menu/menu3.jpg" alt="" />
										<!-- Menu title / Heading -->
										<h3>Dessert</h3>
										<!-- Border for above heading -->
										<div class="title-border br-lblue"></div>
									</div>
									<!-- Menu item details -->
									<div class="menu-details br-lblue">
										<!-- Menu list -->
										<ul class="list-unstyled">
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Choco Nuts</a>
													<!-- Price badge -->
													<span class="pull-right">$2</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Venial Cup</a>
													<!-- Price badge -->
													<span class="pull-right">$4</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Praising Pain</a>
													<!-- Price badge -->
													<span class="pull-right">$9</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Exception Tint</a>
													<!-- Price badge -->
													<span class="pull-right">$6</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Laborious Rhys</a>
													<!-- Price badge -->
													<span class="pull-right">$5</span>
													<div class="clearfix"></div>
												</div>
											</li>
										</ul>
									</div><!-- / Menu details end -->
								</div>
							</div>
						</div> <!-- /Menu container end -->
					</div>
				</div>
				
				<!-- Menu End -->
				
				<!-- Pricing Start -->
				
				<div class="pricing padd">
					<div class="container">
						<!-- Default Heading -->
						<div class="default-heading">
							<!-- Crown image -->
							<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/crown.png" alt="" />
							<!-- Heading -->
							<h2>Offer Price</h2>
							<!-- Paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<!-- Border -->
							<div class="border"></div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- Pricing list Item -->
								<div class="pricing-item">
									<!-- Image -->
									<a href="#"><img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish3.jpg" alt="" /></a>
									<!-- Pricing item details -->
									<div class="pricing-item-details">
										<!-- Heading -->
										<h3><a href="#">Mix-Veg Fried Rice</a></h3>
										<!-- Paragraph -->
										<p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
										<!-- Buy link -->
										<a class="btn btn-danger pull-right" href="#">Order now</a>
										<div class="clearfix"></div>
									</div>
									<!-- Tag -->
									<span class="hot-tag br-red">$45</span>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- Pricing list Item -->
								<div class="pricing-item">
									<!-- Image -->
									<a href="#"><img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish2.jpg" alt="" /></a>
									<!-- Pricing item details -->
									<div class="pricing-item-details">
										<!-- Heading -->
										<h3><a href="#">Spicy Fried Chicken</a></h3>
										<!-- Paragraph -->
										<p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
										<!-- Buy link -->
										<a class="btn btn-danger pull-right" href="#">Order now</a>
										<div class="clearfix"></div>
									</div>
									<!-- Tag -->
									<span class="hot-tag br-lblue">$19</span>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix visible-md"></div>
							<div class="col-md-6 col-sm-6">
								<!-- Pricing list Item -->
								<div class="pricing-item">
									<!-- Image -->
									<a href="#"><img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish4.jpg" alt="" /></a>
									<!-- Pricing item details -->
									<div class="pricing-item-details">
										<!-- Heading -->
										<h3><a href="#">Chinese Chicken Momo</a></h3>
										<!-- Paragraph -->
										<p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
										<!-- Buy link -->
										<a class="btn btn-danger pull-right" href="#">Order now</a>
										<div class="clearfix"></div>
									</div>
									<!-- Tag -->
									<span class="hot-tag br-green">$49</span>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- Pricing list Item -->
								<div class="pricing-item">
									<!-- Image -->
									<a href="#"><img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish1.jpg" alt="" /></a>
									<!-- Pricing item details -->
									<div class="pricing-item-details">
										<!-- Heading -->
										<h3><a href="#">Sushi</a></h3>
										<!-- Paragraph -->
										<p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
										<!-- Buy link -->
										<a class="btn btn-danger pull-right" href="#">Order now</a>
										<div class="clearfix"></div>
									</div>
									<!-- Tag -->
									<span class="hot-tag br-red">$29</span>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Pricing End -->
				
				<!-- Chefs Start -->
				
				<div class="chefs padd">
					<div class="container">
						<!-- Default Heading -->
						<div class="default-heading">
							<!-- Crown image -->
							<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/crown.png" alt="" />
							<!-- Heading -->
							<h2>Our Chefs</h2>
							<!-- Paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<!-- Border -->
							<div class="border"></div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<!-- Chef Member -->
								<div class="chefs-member">
									<!-- Chefs member header -->
									<div class="chefs-head">
										<!-- Member background image -->
										<img class="chefs-back img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/chef/c-back2.jpg" alt="" />
										<!-- chef member image -->
										<img class="chefs-img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/chef/4.jpg" alt="" />
									</div>
									<!--Name / Heading -->
									<h3><a href="#">Venison Gorky</a></h3>
									<!-- Member designation -->
									<span>Chefs Incharge</span>
									<!-- Social media links -->
									<div class="social">
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Chef Member -->
								<div class="chefs-member">
									<!-- Chefs member header -->
									<div class="chefs-head">
										<!-- Member background image -->
										<img class="chefs-back img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/chef/c-back1.jpg" alt="" />
										<!-- chef member image -->
										<img class="chefs-img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/chef/7.jpg" alt="" />
									</div>
									<!--Name / Heading -->
									<h3><a href="#">Million Carey</a></h3>
									<!-- Member designation -->
									<span>Chefs Incharge</span>
									<!-- Social media links -->
									<div class="social">
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Chef Member -->
								<div class="chefs-member">
									<!-- Chefs member header -->
									<div class="chefs-head">
										<!-- Member background image -->
										<img class="chefs-back img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/chef/c-back3.jpg" alt="" />
										<!-- chef member image -->
										<img class="chefs-img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/chef/2.jpg" alt="" />
									</div>
									<!--Name / Heading -->
									<h3><a href="#">Juliet Watson</a></h3>
									<!-- Member designation -->
									<span>Chefs Incharge</span>
									<!-- Social media links -->
									<div class="social">
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Chefs End -->
				
				<!-- Testimonial Start -->
				
				<div class="testimonial padd">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<!-- BLock heading -->
								<h3>Recent Dishes</h3>
								<!-- Flex slider Content -->
								<div class="flexslider-recent flexslider">
									<ul class="slides">
										<li>
											<!-- Image for background -->
											<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish9.jpg" alt="" />
											<!-- Slide content -->
											<div class="slider-content">
												<!-- Heading -->
												<h4>Healthy Salad</h4>
												<!-- Paragraph -->
												<p>Sed ut perspiciatis unde omnis iste natus error sitvolua rchitecto beatae vitae dicta sunt explicabo eaque ipsa quae ab illo inventore.</p>
											</div>
										</li>
										<li>
											<!-- Image for background -->
											<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish10.jpg" alt="" />
											<!-- Slide content -->
											<div class="slider-content">
												<!-- Heading -->
												<h4>White Vanilla Cake</h4>
												<!-- Paragraph -->
												<p>Sed ut perspiciatis unde omnis iste natus error sitvolua rchitecto beatae vitae dicta sunt explicabo eaque ipsa quae ab illo inventore.</p>
											</div>
										</li>
										<li>
											<!-- Image for background -->
											<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish11.jpg" alt="" />
											<!-- Slide content -->
											<div class="slider-content">
												<!-- Heading -->
												<h4>Tasty Fried Fish</h4>
												<!-- Paragraph -->
												<p>Sed ut perspiciatis unde omnis iste natus error sitvolua rchitecto beatae vitae dicta sunt explicabo eaque ipsa quae ab illo inventore.</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<!-- BLock heading -->
								<h3>Our Client Says</h3>
								<!-- Flex slider Content -->
								<div class="flexslider-testimonial flexslider">
									<ul class="slides">
										<li>
											<!-- Testimonial Content -->
											<div class="testimonial-item">
												<!-- Quote -->
												<span class="quote lblue">&#8220;</span> 
												<!-- Your comments -->
												<blockquote>
													<!-- Paragraph -->
													<p>Sed ut perspiciatis unde omnis iste natus error sitvolu accusative ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
												</blockquote>
												<!-- Heading with image -->
												<h4><img class="img-responsive img-circle" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/user.jpg" alt="" /> Jhon Doe<span>, your designation</span></h4>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Testimonial Content -->
											<div class="testimonial-item">
												<!-- Quote -->
												<span class="quote lblue">&#8220;</span> 
												<!-- Your comments -->
												<blockquote>
													<!-- Paragraph -->
													<p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the dislikes.</p>
												</blockquote>
												<!-- Heading with image -->
												<h4><img class="img-responsive img-circle" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/user.jpg" alt="" /> Marten<span>, your designation</span></h4>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Testimonial Content -->
											<div class="testimonial-item">
												<!-- Quote -->
												<span class="quote lblue">&#8220;</span> 
												<!-- Your comments -->
												<blockquote>
													<!-- Paragraph -->
													<p>At vero eos et accusamus et iusto odio dignis simos ducimus qui bland itiis praes entium volup tatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non laboratory.</p>
												</blockquote>
												<!-- Heading with image -->
												<h4><img class="img-responsive img-circle" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/user.jpg" alt="" /> Katrina Doe<span>, your designation</span></h4>
												<div class="clearfix"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial End -->
				
				
			</div><!-- / Main Content End -->	
			
			<!-- Footer Start -->
			
			<div class="footer padd">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Logo area -->
								<div class="logo">
									<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/logo.png" alt="" />
									<!-- Heading -->
									<h1>Clean Living Club</h1>
								</div>
								<!-- Paragraph -->
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
								<hr />
								<!-- Heading -->
								<h6>On-line Payment Clients</h6>
								<!-- Images -->
								<a href="#"><img class="payment img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/payment/2co.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/payment/authorizenet.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/payment/discover.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/payment/egold.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/payment/mastercard.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/payment/paypal.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/payment/visa.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/payment/worldpay.gif" alt="" /></a>
							</div> <!--/ Footer widget end -->
						</div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h4>Famous Dishes</h4>
								<!-- Images -->
								<a href="#"><img class="dish img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
img/dish/dish1.jpg" alt="" /></a>
							</div> <!--/ Footer widget end -->
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h4>Join Us Today</h4>
								<!-- Paragraph -->
								<p>There is no one who loves pain itself, who seeks after it and wants to have it.</p>
								<!-- Subscribe form -->
								<form role="form">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Your name" />
									</div>
									<div class="form-group">
										<input class="form-control" type="email" placeholder="Your email" />
									</div>
									<button class="btn btn-danger" type="button">Subscribe</button>
								</form>
							</div> <!--/ Footer widget end -->
						</div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h4>Contact Us</h4>
								<div class="contact-details">
									<!-- Address / Icon -->
									<i class="fa fa-map-marker br-red"></i> <span>#768, 5th floor, N S Building,<br />Csm Block, Park Road,<br /> Bangalore - 234567</span>
									<div class="clearfix"></div>
									<!-- Contact Number / Icon -->
									<i class="fa fa-phone br-green"></i> <span>+91 88-88-888888</span>
									<div class="clearfix"></div>
									<!-- Email / Icon -->
									<i class="fa fa-envelope-o br-lblue"></i> <span><a href="#">abc@example.com</a></span>
									<div class="clearfix"></div>
								</div>
								<!-- Social media icon -->
								<div class="social">
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
									<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
									<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
									<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
								</div>
							</div> <!--/ Footer widget end -->
						</div>
					</div>
					<!-- Copyright -->
					<div class="footer-copyright">
						<!-- Paragraph -->
						<p>&copy; Copyright 2015 <a href="#">Clean Living Club</a></p>
					</div>
				</div>
			</div>
			
			<!-- Footer End -->
			
		</div><!-- / Wrapper End -->
		
		
		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 
		
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
js/jquery.js"><?php echo '</script'; ?>
>
		<!-- Bootstrap JS -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
js/jquery.themepunch.tools.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
js/jquery.themepunch.revolution.min.js"><?php echo '</script'; ?>
>
		<!-- FLEX SLIDER SCRIPTS  -->
		<?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
js/jquery.flexslider-min.js"><?php echo '</script'; ?>
>
		<!-- Pretty Photo JS -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
js/jquery.prettyPhoto.js"><?php echo '</script'; ?>
>
		<!-- Respond JS for IE8 -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
js/respond.min.js"><?php echo '</script'; ?>
>
		<!-- HTML5 Support for IE -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
js/html5shiv.js"><?php echo '</script'; ?>
>
		<!-- Custom JS -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
js/custom.js"><?php echo '</script'; ?>
>
		<!-- JS code for this page -->
		<?php echo '<script'; ?>
>
		/* ******************************************** */
		/*  JS for SLIDER REVOLUTION  */
		/* ******************************************** */
				jQuery(document).ready(function() {
					   jQuery('.tp-banner').revolution(
						{
							delay:9000,
							startheight:500,
							
							hideThumbs:10,
							
							navigationType:"bullet",	
														
							hideArrowsOnMobile:"on",
							
							touchenabled:"on",
							onHoverStop:"on",
							
							navOffsetHorizontal:0,
							navOffsetVertical:20,
							
							stopAtSlide:-1,
							stopAfterLoops:-1,

							shadow:0,
							
							fullWidth:"on",
							fullScreen:"off"
						});
				});
		/* ******************************************** */
		/*  JS for FlexSlider  */
		/* ******************************************** */
		
			$(window).load(function(){
				$('.flexslider-recent').flexslider({
					animation:		"fade",
					animationSpeed:	1000,
					controlNav:		true,
					directionNav:	false
				});
				$('.flexslider-testimonial').flexslider({
					animation: 		"fade",
					slideshowSpeed:	5000,
					animationSpeed:	1000,
					controlNav:		true,
					directionNav:	false
				});
			});
		
		/* Gallery */

		jQuery(".gallery-img-link").prettyPhoto({
		   overlay_gallery: false, social_tools: false
		});
		
		<?php echo '</script'; ?>
>
	</body>	
</html><?php }
}
?>