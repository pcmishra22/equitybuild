<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="javascript:void(0);">Dashboard</a></li>
			<li><a href="javascript:void(0);">Users</a></li>
			<li><a href="javascript:void(0);">Add Event</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-content">
				<h4 class="page-header">Select User:</h4>
                				<div class="row form-group">
					<div class="col-sm-12">
						<select class="form-control" name="users" onchange="changeUsers(this.value)">
							<option value="all">All User</option>
                            <?php
							foreach($allusers as $user)
							{
								if($user['id']==$id)
								$sel='selected="selected"';
								else
								$sel='';
							?>
                            <option value="<?php echo $user['id']?>" <?php echo $sel;?>><?php echo $user['firstname'].' '.$user['lastname']?></option>
							<?php
							}
							?>
                        </select>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
<div id="eventaddmessage" class="bg-success"></div>
<div class="row full-calendar">
	<div class="col-sm-12">
		<div id="calendar"></div>
	</div>
</div>
<script>
function changeUsers(id)
{
	window.location.href="<?php echo base_url();?>admin/addevent/"+id;
}
</script>