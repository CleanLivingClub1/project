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
                           <big><b>Meal Type</big></b>
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="row">
                                        <div class="col-md-12 bg-info">
                                            <div class="col-md-2"><b>S.no</b></div>
                                            <div class="col-md-2"><b>Meal Type Name</b></div>
                                            <div class="col-md-2"><b>Edit</b></div>
											<div class="col-md-2"><b>Delete</b></div>
									    </div>
                                   
									
									{foreach $mealtype as $key=>$val}
									{if $key is even}
                                        <div class="col-md-12 bg-warning">
									{else}	
										<div class="col-md-12 bg-success">
									{/if}
                                            <div class="col-md-2">{$key+1}</div>
                                            <div class="col-md-2">{$val.name}</div>
                                            <div class="col-md-2"><button id="edit{$val.id}" class="btn btn-success">Edit</button><input type="hidden" value="{$val.id}" id="editVal{$val.id}"/></div>
											<div class="col-md-2"><button id="delete{$val.id}" class="btn btn-danger">Delete</button><input type="hidden" value="{$val.id}" id="deleteVal{$val.id}"/></div>
                                        </div>
									<div id="editvalue{$val.id}"></div>
									<div id="deletevalue{$val.id}"></div>
										<script type="text/javascript">
										$(document).ready(function()
										{
											$("#edit{$val.id}").click(function(){
												var tid	= $("#editVal{$val.id}").val();
												$("#editvalue{$val.id}").load("mealstypes.php?edittype="+tid);
											});
											
											$("#delete{$val.id}").click(function(){
											var tid		= $("#editVal{$val.id}").val();
											var check	=	confirm("Are you sure to delete?");
												if (check == true)
												{											
													$("#deletevalue{$val.id}").load("mealstypes.php?deletetype="+tid);
												}
											});
										});
										</script>
								{/foreach}
								</div>
                            </div>
                        </div>
                    </div>
					
                    <!--  end  Context Classes  -->
                </div>
            </div>
			
			
			<script type="text/javascript">
				$(document).ready(function()
				{
				$("#newtestimonial").click(function(){
							$("#addnewloadpage").load("mealstypes.php?addnewtype");
			});
			
				});
			</script>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

   {include 'footersection.tpl'}