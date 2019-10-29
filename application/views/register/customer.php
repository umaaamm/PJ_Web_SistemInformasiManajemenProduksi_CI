<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register Customer</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
	     folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/source_sans.css">
</head>
<body class="hold-transition register-page">

	<div class="register-box">
	  <div class="register-logo">
	    <a href="#"><b>Register</b></a>
	  </div>

	  <div class="register-box-body">
	  	<?php 

echo $this->session->flashdata('notif');
?>
	    <form action="<?php echo base_url()?>Register" method="post">
	      <div class="form-group has-feedback">
	        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
	        <span class="glyphicon glyphicon-user form-control-feedback"></span>
	      </div>
	      <div class="form-group has-feedback">
	        <input type="text" class="form-control" name="username" placeholder="Username">
	        <span class="glyphicon glyphicon-user form-control-feedback"></span>
	      </div>
				<div class="form-group has-feedback">
	        <textarea type="text" class="form-control" name="alamat" placeholder="Alamat"></textarea>
	        <span class="glyphicon glyphicon-road form-control-feedback"></span>
	      </div>
	      <div class="form-group has-feedback">
	        <input type="email" class="form-control" name="email" placeholder="Email">
	        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	      </div>
	      <div class="form-group has-feedback">
	        <input type="password" class="form-control" name="password" placeholder="Password">
	        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      </div>
	      <div class="row">
					<div class="col-xs-7">
						<a href="<?php echo base_url(); ?>login/customer" class="text-center">Saya sudah punya akun</a>
					</div>
	        <!-- /.col -->
	        <div class="col-xs-5">
	          <button type="submit" class="btn btn-primary btn-block btn-flat pull-right">Register</button>
	        </div>
	        <!-- /.col -->
	      </div>
	    </form>
	  </div>
	  <!-- /.form-box -->
	</div>
	<!-- /.register-box -->
</body>
</html>
