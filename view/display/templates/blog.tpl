<!DOCTYPE html>
<html>
	<head>	
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Blog - Clean Living Club</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="{$TEMPLATE}css/bootstrap.min.css" rel="stylesheet">
		<!-- Portfolio CSS -->
		<link href="{$TEMPLATE}css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="{$TEMPLATE}css/font-awesome.min.css" rel="stylesheet">	
		<!-- Custom Less -->
		<link href="{$TEMPLATE}css/less-style.css" rel="stylesheet">	
		<!-- Custom CSS -->
		<link href="{$TEMPLATE}css/style.css" rel="stylesheet">
		<!--[if IE]><link rel="stylesheet" href="{$TEMPLATE}css/ie-style.css"><![endif]-->
		
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
						<button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
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
										<img class="img-responsive" src="{$TEMPLATE}img/cart.png" alt="" />
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
												<img class="img-responsive img-rounded" src="{$TEMPLATE}img/nav-menu/nav1.jpg" alt="" />
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
												<img class="img-responsive img-rounded" src="{$TEMPLATE}img/nav-menu/nav2.jpg" alt="" />
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
												<img class="img-responsive img-rounded" src="{$TEMPLATE}img/nav-menu/nav3.jpg" alt="" />
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
							<a href="{$smarty.const.INDEX_URL}index.php">
								<!-- Logo area -->
								<div class="logo">
									<img class="img-responsive" src="{$TEMPLATE}img/logo.png" alt="" />
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
											<li><a href="{$smarty.const.INDEX_URL}index.php"><img src="{$TEMPLATE}img/nav-menu/nav1.jpg" class="img-responsive" alt="" /> Home</a></li>
											<li class="dropdown hidden-xs">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{$TEMPLATE}img/nav-menu/nav2.jpg" class="img-responsive" alt="" /> Menu <b class="caret"></b></a>
												<ul class="dropdown-menu dropdown-md">
													<li>
														<div class="row">
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h3>Vegetarian</h3>
																	<!-- Image -->
																	<img src="{$TEMPLATE}img/dish/dish1.jpg" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Sea nut perspicacity under omni piste natures mirror of there with consequent.</p>
																	<!-- Button -->
																	<a href="{$smarty.const.INDEX_URL}view/menu.php" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h3>Non-Vegetarian</h3>
																	<!-- Image -->
																	<img src="{$TEMPLATE}img/dish/dish2.jpg" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Sea nut perspicacity under omni piste natures mirror as precode consequent.</p>
																	<!-- Button -->
																	<a href="{$smarty.const.INDEX_URL}view/menu.php" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h3>Special Menu</h3>
																	<!-- Image -->
																	<img src="{$TEMPLATE}img/dish/dish3.jpg" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Sea nut perspicacity under omni piste natures mirror consequent.</p>
																	<!-- Button -->
																	<a href="{$smarty.const.INDEX_URL}view/menu.php" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li class="dropdown visible-xs">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="{$smarty.const.INDEX_URL}view/menu.php">Vegetarian</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/menu.php">Non Vegetarian</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/menu.php">Special Menu</a></li>
												</ul>
											</li>
											<li><a href="{$smarty.const.INDEX_URL}view/gallery.php"><img src="{$TEMPLATE}img/nav-menu/nav3.jpg" class="img-responsive" alt="" /> Gallery</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{$TEMPLATE}img/nav-menu/nav4.jpg" class="img-responsive" alt="" /> Shop <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="{$smarty.const.INDEX_URL}view/items.php">Shopping</a></li>
													<li><a href="item-single.php">Order Now</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/checkout.php">Checkout</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/reserve-seats.php">Reservation</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/contact.php">Contact Us</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{$TEMPLATE}img/nav-menu/nav5.jpg" class="img-responsive" alt="" /> Pages <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="{$smarty.const.INDEX_URL}view/error.php">404 Error</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/0-base.php">Blank Page</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/blog.php">Blog</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/blog-single.php">Blog Single</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/components.php">Components</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/general.php">General</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/nutrition-info.php">Nutrition Info</a></li>
													<li><a href="{$smarty.const.INDEX_URL}view/recipe.php">Recipes</a></li>
												</ul>
											</li>
											<li><a href="{$smarty.const.INDEX_URL}view/aboutus.php"><img src="{$TEMPLATE}img/nav-menu/nav6.jpg" class="img-responsive" alt="" /> About</a></li>
										</ul>
									</div><!-- /.navbar-collapse -->
								</div><!-- /.container-fluid -->
							</nav>
						</div>
					</div>
				</div> <!-- / .container -->
			</div>
			
			<!-- Header End -->
			
			<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="{$TEMPLATE}img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">Blog</h2>
					<ol class="breadcrumb">
						<li><a href="{$smarty.const.INDEX_URL}index.php">Home</a></li>
						<li class="active">Blog</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- Blog Start -->
					
				<div class="blog">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<!-- The new post done by user's all in the post block -->
								<div class="blog-post">
									<!-- Entry is the one post for each user -->
									<div class="entry">
										<!-- Post Images -->
										<div class="blog-img pull-left">
											<img src="{$TEMPLATE}img/blog/blog1.jpg" class="img-responsive img-thumbnail" alt="" />
										</div>
										<!-- Meta for this block -->
										<div class="meta">
											<i class="fa fa-calendar"></i>&nbsp; Jan 13, 2014
											<span class="pull-right"><i class="fa fa-comment"></i> <a href="#">&nbsp;2 Comments</a></span>
										</div>
										<!-- Heading of the  post -->
										<h3><a href="{$smarty.const.INDEX_URL}view/blog-single.php">Contrary to popular belief horem purse</a></h3>
										<hr /><!-- Horizontal line -->
										<!-- Paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Ut <strong>commodo ullamcorper risus nec</strong> viverra, dignissim eget est.</p>
										<div class="clearfix"></div>
									</div>
									<!-- Entry is the one post for each user -->
									<div class="entry">
										<!-- Post Images -->
										<div class="blog-img pull-left">
											<img src="{$TEMPLATE}img/blog/blog2.jpg" class="img-responsive img-thumbnail" alt="" />
										</div>
										<!-- Meta for this block -->
										<div class="meta">
											<i class="fa fa-calendar"></i>&nbsp; Jan 29, 2014
											<span class="pull-right"><i class="fa fa-comment"></i> <a href="#">&nbsp;0 Comments</a></span>
										</div>
										<!-- Heading of the  post -->
										<h3><a href="{$smarty.const.INDEX_URL}view/blog-single.php">Suspended portrait cretinous perimeter</a></h3>
										<hr /><!-- Horizontal line -->
										<!-- Paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Ut <strong>commodo ullamcorper risus nec</strong> viverra, dignissim eget est.</p>
										<div class="clearfix"></div>
									</div>
									<!-- Entry is the one post for each user -->
									<div class="entry">
										<!-- Post Images -->
										<div class="blog-img pull-left">
											<img src="{$TEMPLATE}img/blog/blog3.jpg" class="img-responsive img-thumbnail" alt="" />
										</div>
										<!-- Meta for this block -->
										<div class="meta">
											<i class="fa fa-calendar"></i>&nbsp; Feb 14, 2014
											<span class="pull-right"><i class="fa fa-comment"></i> <a href="#">&nbsp;0 Comments</a></span>
										</div>
										<!-- Heading of the  post -->
										<h3><a href="{$smarty.const.INDEX_URL}view/blog-single.php">Placerat semper quis in urna risus</a></h3>
										<hr /><!-- Horizontal line -->
										<!-- Paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Ut <strong>commodo ullamcorper risus nec</strong> viverra, dignissim eget est.</p>
										<div class="clearfix"></div>
									</div>
									<!-- Pagination -->
									<ul class="pagination">
										<li class="disabled"><a href="#">&laquo;</a></li>
										<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">&raquo;</a></li>
									</ul>
									<!-- Pagination end-->
								</div>
							</div> <!--/ Main blog column end -->
							<div class="col-md-4">
								<!-- Blog page sidebar -->
								<div class="blog-sidebar">
									<div class="row">
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>Search</h4>
												<!-- search button and input box -->
												<form role="form" class="form-inline">
													<div class="input-group">
														<input type="text" class="form-control" placeholder="Type to search">
														<span class="input-group-btn">
															<button class="btn btn-danger" type="button"><i class="fa fa-search"></i></button>
														</span>
													</div>
												</form><!--/ Form end -->
											</div><!--/ Widget end -->
										</div>
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>Recent Post</h4>
												<!-- Recent post list -->
												<ul class="list-unstyled">
													<li><i class="fa fa-angle-double-right"></i> <a href="#">Delicious Pizza recipe, soluta nobqual blame betum rutrum allongs to this est eligend.</a></li>
													<li><i class="fa fa-angle-double-right"></i> <a href="#">Chicken recipe, luta nobisest hyelqual bltum rutrum alame belongs to thigend.</a></li>
													<li><i class="fa fa-angle-double-right"></i> <a href="#">Hot Cake recipe, jueilqual blame belongs to thuta ntum rutrum alobist hyeleniurd.</a></li>
													<li><i class="fa fa-angle-double-right"></i> <a href="#">French Food recipe, rsiqual blame belongs to thlutum rutrum alta nobniurd.</a></li>
												</ul>
											</div><!--/ Widget end -->
										</div>
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>Tags</h4>
												<a href="#" class="btn btn-warning btn-sm">Dessert</a>
												<a href="#" class="btn btn-danger btn-sm">Spicy Non-Veg</a>
												<a href="#" class="btn btn-default btn-sm">Drinks</a>
												<a href="#" class="btn btn-success btn-sm">Seafood</a>
												<a href="#" class="btn btn-info btn-sm">Globalist</a>
												<a href="#" class="btn btn-warning btn-sm">Cake</a>
												<a href="#" class="btn btn-success btn-sm">French</a>
												<a href="#" class="btn btn-info btn-sm">Indigent</a>
												<a href="#" class="btn btn-success btn-sm">Strum</a>
												<a href="#" class="btn btn-default btn-sm">Squalor</a>
												<a href="#" class="btn btn-warning btn-sm">Nobelium</a>
											</div><!--/ Widget end -->
										</div>
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>About Us</h4>
												<!-- Paragraph -->
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna consequat.</p>
												<!-- Social media icon -->
												<div class="social">
													<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
													<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
													<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
													<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
												</div>
											</div><!--/ Widget end -->
										</div>
									</div><!--/ Inner row end -->
								</div><!--/ Page sidebar end -->
							</div>
						</div><!--/ Row end -->
					</div>
				</div>
				
				<!-- Blog End -->
			
				<!-- Showcase Start -->
				
				<div class="showcase">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- Showcase section item -->
								<div class="showcase-item">
									<!-- Image -->
									<img class="img-responsive" src="{$TEMPLATE}img/fruit2.png" alt="" />
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
									<img class="img-responsive" src="{$TEMPLATE}img/fruit3.png" alt="" />
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
				
			</div><!-- / Inner Page Content End -->	
			
			<!-- Footer Start -->
			
			<div class="footer padd">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Logo area -->
								<div class="logo">
									<img class="img-responsive" src="{$TEMPLATE}img/logo.png" alt="" />
									<!-- Heading -->
									<h1>Clean Living Club</h1>
								</div>
								<!-- Paragraph -->
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
								<hr />
								<!-- Heading -->
								<h6>On-line Payment Clients</h6>
								<!-- Images -->
								<a href="#"><img class="payment img-responsive" src="{$TEMPLATE}img/payment/2co.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="{$TEMPLATE}img/payment/authorizenet.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="{$TEMPLATE}img/payment/discover.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="{$TEMPLATE}img/payment/egold.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="{$TEMPLATE}img/payment/mastercard.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="{$TEMPLATE}img/payment/paypal.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="{$TEMPLATE}img/payment/visa.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="{$TEMPLATE}img/payment/worldpay.gif" alt="" /></a>
							</div> <!--/ Footer widget end -->
						</div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h4>Famous Dishes</h4>
								<!-- Images -->
								<a href="#"><img class="dish img-responsive" src="{$TEMPLATE}img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="{$TEMPLATE}img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="{$TEMPLATE}img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="{$TEMPLATE}img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="{$TEMPLATE}img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="{$TEMPLATE}img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="{$TEMPLATE}img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="{$TEMPLATE}img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="{$TEMPLATE}img/dish/dish1.jpg" alt="" /></a>
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
		<script src="{$TEMPLATE}js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="{$TEMPLATE}js/bootstrap.min.js"></script>
		<!-- Pretty Photo JS -->
		<script src="{$TEMPLATE}js/jquery.prettyPhoto.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="{$TEMPLATE}js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="{$TEMPLATE}js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="{$TEMPLATE}js/custom.js"></script>
		<!-- JS code for this page -->
		<script>
		
		</script>
	</body>	
</html>