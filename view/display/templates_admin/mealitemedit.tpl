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
			<form role="form" method="post" action="{$ADMIN_PATH}mealiteams.php">
			<div class="panel-body">
			<div class="form-group">
                    <label> Meal Type</label>
						<select class="form-control" name="mealtype">
							<option value="">-----Select--------</option>
							{foreach $mealtype as $key=>$type}
								<option value="{$type.id}">{$type.name}</option>
							{/foreach}
						</select>
                </div>
				<div class="form-group">
				<label>Title</label>
					<input type="hidden" name='id' value="{$tdata.0.id}"/>
					<input class="form-control" value="{$tdata.0.title}" required name="title"  type="text">
				</div>
				<div class="form-group">
				<label>Description</label>
					<textarea class="form-control" value="{$tdata.0.description}" required name="description"  rows="3" 	></textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Picture</label>
					<input class="btn btn-file btn-default" required name="picture" id="picture"  type="file">
				</div>
				<div class="form-group">
					<label>Video</label>
					<input class="btn btn-file btn-default" required name="video" id="video"  type="file">
				</div>
        
			    <input  type="submit" class="btn btn-success" value="save" name="saveeditmealitem"/>
            </form>
        </div>
    </div>
</div>



