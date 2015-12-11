 <div id="add" class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <span>Add New Meal Items</span><span class="pull-right"><button id="close" class="btn-danger"><b>X</b></button>
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
		<form role="form" method="POST" action="{$ADMIN_PATH}mealiteams.php" enctype="multipart/form-data">
		<div class="panel-body">
			<div class="form-group">
                    <label> Meal Type</label>
						<select class="form-control" name="mealtype">
							<option value="">-----Select--------</option>
							{foreach $mealtype as $key=>$val}
								<option value="{$val.id}">{$val.name}</option>
							{/foreach}
						</select>
                </div>
				<div class="form-group">
				<label>Title</label>
					<input class="form-control" required name="title"  type="text">
				</div>
				<div class="form-group">
				<label>Description</label>
					<textarea class="form-control" required name="description"  rows="3" 	></textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Picture</label>
					<input class="btn btn-file btn-default" required name="picture" id="picture"  type="file">
				</div>
				<div class="form-group">
					<label>Video</label>
					<input class="btn btn-file btn-default" required name="video" id="video"  type="file">
				</div>
                <input  type="submit" class="btn btn-success" value="save" name="savenewmealiteams"/>
            </form>
        </div>
    </div>
</div>



