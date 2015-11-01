<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>DevOOPS</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="../css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<form  method="post" action="<?php echo base_url();?>admin/validate_credentials" id="loginForm">

<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">

			<div class="box">
				<div class="box-content">
					<div class="text-center">
							<?php
		if(isset($message_error) && $message_error)
		{
		?>
				<div style="height:5px;">
				<strong style="color:red;">Please enter correct details</strong></div><br/>
		<?php
		}
		?>
						<h3 class="page-header">EquityBuild Event Admin Page</h3>
					</div>
					<div class="form-group">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" name="username" required="true"/>
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" name="password" required="true"/>
					</div>
					<div class="text-center">
					<button type="submit" class="btn btn-primary" id="loginBtn"> Sign In</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
</body>
</html>
