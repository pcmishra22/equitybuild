
<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="index.html">Dashboard</a></li>
			<li><a href="#">Users</a></li>
			<li><a href="#">Add User</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span><strong>Add User :-</strong></span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<form id="adduser" name="adduser" method="post" action="" class="form-horizontal">
					<input type="hidden" name="id" value="<?php echo @$userdetails[0]['id']?>"
					<fieldset>
						<div class="form-group">
							<label class="col-sm-5 control-label">First Name</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo @$userdetails[0]['firstname']?>" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Last Name</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo @$userdetails[0]['lastname']?>" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Email address</label>
							<div class="col-sm-5">
								<input type="email" class="form-control" name="email" id="email" value="<?php echo @$userdetails[0]['email']?>" required/>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-5 control-label">Select Colour</label>
                				
					<div class="col-sm-5">
						<select class="form-control" name="colors" >
							<option value="all">Select Colours</option>
                            <option value="#FF0000" <?php if($userdetails[0]['color_code']=='#FF0000'){echo 'Selected="selected"';}?>>Red</option>
                            <option value="#00FFFF" <?php if($userdetails[0]['color_code']=='#00FFFF'){echo 'Selected="selected"';}?>>Cyan</option>
                            <option value="#0000FF" <?php if($userdetails[0]['color_code']=='#0000FF'){echo 'Selected="selected"';}?>>Blue</option>
                            <option value="#0000A0" <?php if($userdetails[0]['color_code']=='#0000A0'){echo 'Selected="selected"';}?>>DarkBlue</option>
                            <option value="#ADD8E6" <?php if($userdetails[0]['color_code']=='#ADD8E6'){echo 'Selected="selected"';}?>>LightBlue</option>
                            <option value="#800080" <?php if($userdetails[0]['color_code']=='#800080'){echo 'Selected="selected"';}?>>Purple</option>
                            <option value="#FFFF00" <?php if($userdetails[0]['color_code']=='#FFFF00'){echo 'Selected="selected"';}?>>Yellow</option>
                            <option value="#00FF00" <?php if($userdetails[0]['color_code']=='#00FF00'){echo 'Selected="selected"';}?>>Lime</option>
                            <option value="#FF00FF" <?php if($userdetails[0]['color_code']=='#FF00FF'){echo 'Selected="selected"';}?>>Magneta</option>
                            <option value="#C0C0C0" <?php if($userdetails[0]['color_code']=='#C0C0C0'){echo 'Selected="selected"';}?>>Silver</option>
                            <option value="#808080" <?php if($userdetails[0]['color_code']=='#808080'){echo 'Selected="selected"';}?>>Gray</option>
                            <option value="#000000" <?php if($userdetails[0]['color_code']=='#000000'){echo 'Selected="selected"';}?>>Black</option>
                            <option value="#FFA500" <?php if($userdetails[0]['color_code']=='#FFA500'){echo 'Selected="selected"';}?>>Orange</option>
                            <option value="#A52A2A" <?php if($userdetails[0]['color_code']=='#A52A2A'){echo 'Selected="selected"';}?>>Brown</option>
                            <option value="#800000" <?php if($userdetails[0]['color_code']=='#800000'){echo 'Selected="selected"';}?>>Maroon</option> 
                            <option value="#008000" <?php if($userdetails[0]['color_code']=='#008000'){echo 'Selected="selected"';}?>>Green</option> 
                       		<option value="#808000" <?php if($userdetails[0]['color_code']=='#808000'){echo 'Selected="selected"';}?>>Olive</option>
                        </select>
					</div>
				</div>
						
                        
                        
					</fieldset>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-6">
							<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});
</script>
