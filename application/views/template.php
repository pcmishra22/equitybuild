<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Event Management System</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url();?>plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url();?>plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url();?>plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="<?php echo base_url();?>plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="<?php echo base_url();?>plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>plugins/select2/select2.css" rel="stylesheet">
		<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="<?php echo base_url()?>admin/dashboard">EquityBuild</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="#" class="show-sidebar">
						  <i class="fa fa-bars"></i>
						</a>

					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<img src="<?php echo base_url();?>img/avatar.jpg" class="img-rounded" alt="avatar" />
									</div>
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Welcome,</span>
										<span>Admin</span>
									</div>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo base_url()?>admin/logout">
											<i class="fa fa-power-off"></i>
											<span>Logout</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="<?php echo base_url()?>admin/dashboard" class="active">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Dashboard</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" class="active">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Users</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url()?>admin/users">All Users</a></li>
						<li><a href="<?php echo base_url()?>admin/adduser">Add Users</a></li>
					</ul>
				</li>
                	<li class="dropdown">
					<a href="#" class="dropdown-toggle" class="active">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Report</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url()?>admin/reports">All Report</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div id="ajax-content">
			<?php
				echo $content;
			?>
			</div>
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script>
var baseurl='<?php echo base_url()?>';

</script>
<script src="<?php echo base_url();?>plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="<?php echo base_url();?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url();?>plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>plugins/justified-gallery/jquery.justifiedgallery.min.js"></script>
<script src="<?php echo base_url();?>plugins/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url();?>plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="<?php echo base_url();?>js/devoops.js"></script>
</body>
</html>
