{include 'headsection.tpl'}
<body>
    
        <!-- /. NAV TOP  -->
			{include 'dashbord_nav.tpl'}
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="main-box mb-red">
                            <a href="{$ADMIN_PATH}meals.php">
                                <i class="fa fa-file fa-2x"></i>
                                <h5>Meal</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-box mb-dull">
                             <a  href="{$ADMIN_PATH}gallery.php">
									<i class="fa fa-paint-brush fa-2x"></i>
									<h5>Goale</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-box mb-pink">
                            <a  href="{$ADMIN_PATH}members.php">
									<i class="fa fa-info fa-2x"></i>
									<h5>Users Management</h5>
                            </a>
                        </div>
                    </div>
					 <div class="col-md-3">
                        <div class="main-box mb-DarkCyan">
                            <a  href="{$ADMIN_PATH}latestnews.php">
									<i class="fa fa-keyboard-o fa-2x"></i>
									<h5>Order Management</h5>
                            </a>
                        </div>
                    </div>
				</div>
                <!-- /. ROW  -->
 
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{$ADMIN_TEMPLATE}assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{$ADMIN_TEMPLATE}assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{$ADMIN_TEMPLATE}assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="{$ADMIN_TEMPLATE}assets/js/custom.js"></script>
    


</body>
</html>
