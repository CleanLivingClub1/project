 <div id="add" class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <span>Add New Type</span><span class="pull-right"><button id="close" class="btn-danger"><b>X</b></button>
		   	 <script src="{$ADMIN_TEMPLATE}assets/js/jquery-1.10.2.js"></script>
		   {literal}
	
		   <script type="text/javascript">
				$(document).ready(function()
				{
				$("#close").click(function(){$("#add").hide();});
				});
			</script>
		   {/literal}
		   </div>
		
		<div class="panel-body">
			<form role="form" method="post" action="{$ADMIN_PATH}testimonials.php">
                <div class="form-group">
                    <label>Enter Name</label>
						<input class="form-control" name="tname" required type="text">
                </div>
                <div class="form-group">
					<label>Enter Message</label>
						<textarea class="form-control" name="tmessage" required rows="4"></textarea>
                </div> 
                <input  type="submit" class="btn btn-success" value="save" name="savenewtest"/>
            </form>
        </div>
    </div>
</div>



