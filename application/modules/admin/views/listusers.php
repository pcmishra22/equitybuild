<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Users</a></li>
			<li><a href="#">All Users</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
	<?php	
      //flash messages
      if($this->session->flashdata('flash_message'))
      {
        if($this->session->flashdata('flash_message') == 'deleted')
        {
			echo '<div class="box-content"><p class="bg-danger">User Deleted Successfully.</p></div>';       
        }
        if($this->session->flashdata('flash_message') == 'added')
        {
			echo '<div class="box-content"><p class="bg-success">User Added Successfully.</p></div>';       
        }
        if($this->session->flashdata('flash_message') == 'updated')
        {
			echo '<div class="box-content"><p class="bg-success">User Updated Successfully.</p></div>';       
        }
  	  }
      ?>



		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<span><strong>User Details :-</strong></span>
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
			<div class="box-content no-padding">
				<?php
				if(count($allusers)>0)
				{
				?>
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
					<thead>
						<tr>
							<th>Id</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Active</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
					<!-- Start: list_row -->
					<?php
					foreach($allusers as $user)
					{
					?>
						<tr>
							<td>
								<?php echo $user['id']?>
							</td>
							<td>
								<?php echo $user['firstname']?>
							</td>
							<td>
								<?php echo $user['lastname']?>
							</td>
							<td>
								<?php echo $user['email']?>
							</td>
							<td>
								<?php echo ($user['is_active'] > 0 ? 'Active' : 'Not Active');?>
							</td>
							<td>
								<a class="btn btn-primary" href='<?php echo base_url()?>admin/addevent/<?php echo $user['id']?>'>Add & View Event</a>
								<a class="btn btn-success" href='<?php echo base_url()?>admin/adduser/<?php echo $user['id']?>'>Edit</a>
								<a class="btn btn-danger" href='<?php echo base_url()?>admin/deleteuser/<?php echo $user['id']?>'>Delete</a>	
							</td>
						</tr>
					<?php
					}	
					?>
					<!-- End: list_row -->
					</tbody>
				</table>
				<?php
				}
				else
				{
					echo 'No Records Found.';
				}
				?>
			</div>
		</div>
	</div>
</div>
