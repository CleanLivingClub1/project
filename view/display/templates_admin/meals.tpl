{include 'headsection.tpl'}

	<body>
	<script src="{$ADMIN_TEMPLATE}assets/js/jquery-1.10.2.js"></script>
        <!-- /. NAV TOP  -->
			{include 'dashbord_nav.tpl'}
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
			{include 'mealdashbord.tpl'}
            <!-- /. ROW  -->
			
		    <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

   {include 'footersection.tpl'}