 <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{$INDEX_URL}index.php">Clean Living Club</a>
            </div>

            <div class="header-right">
				
                <a href="{$ADMIN_PATH}/ulogout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x">&nbsp; 	Logout</i></a>

            </div>
        </nav>
		<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    {* <li>
                        <div class="user-img">
						<img src="{$ADMIN_TEMPLATE}assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">Welcome 
                               {$smarty.session.admin}
                            </div>
                        </div>

                    </li> *}
					<li>
                        <a  href="{$ADMIN_PATH}dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
					<li>
                        <a  href="{$ADMIN_PATH}meals.php"><i class="fa fa-file "></i>Meal</a>
                    </li>
                    <li>
                        <a  href="{$ADMIN_PATH}gallery.php"><i class="fa fa-paint-brush "></i>Goal</a>
                    </li>
					<li>
                        <a  href="{$ADMIN_PATH}members.php"><i class="fa fa-info "></i>User Management</a>
                    </li>
					<li>
                        <a  href="{$ADMIN_PATH}latestnews.php"><i class="fa fa-keyboard-o "></i>Order Management</a>
                    </li>
                    
                  
                </ul>

            </div>

        </nav>
       