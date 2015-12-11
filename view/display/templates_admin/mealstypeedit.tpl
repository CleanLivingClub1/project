 <div id="page{$tdata.0.id}" class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <span>Edit Item Type</span><span class="pull-right"><button id="close{$tdata.0.id}" class="btn-danger"><b>X</b></button>
		   	 <script src="{$ADMIN_TEMPLATE}assets/js/jquery-1.10.2.js"></script>
		   {literal}
		   <script type="text/javascript">
				$(document).ready(function()
				{
				$("#close{/literal}{$tdata.0.id}{literal}").click(function(){$("#page{/literal}{$tdata.0.id}{literal}").hide();});
				});
			</script>
		   {/literal}
		   </div>
		
		<div class="panel-body">
			<form role="form" method="post" action="{$ADMIN_PATH}mealstypes.php">
			    <div class="form-group">
                    <label>Enter Name</label>
						<input type="hidden" name='id' value="{$tdata.0.id}"/>
						<input class="form-control" value="{$tdata.0.name}" name="tname"  type="text">
                </div>
                <input  type="submit" class="btn btn-success" value="save" name="saveedittype"/>
            </form>
        </div>
    </div>
</div>



