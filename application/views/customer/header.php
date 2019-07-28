<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo base_url(); ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>PKL</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">
      <!-- <img src="<?php echo base_url(); ?>assets/img/logo-uti.png" width="35px" height="35px"> -->
      <i class="fa fa-map"></i> <b>Dua</b> Cartoon
    </span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa  fa-user"></i>
            <span class="hidden-xs">Customer</span>
          </a>
          <ul class="dropdown-menu" style="width: 0px">
            <li class="header">
              <a href="#"><i class="fa fa-edit"></i> Ubah Password</a>
            </li>
            <li class="footer">
              <a href="<?php echo base_url(); ?>login/admin_logout"><i class="fa fa-power-off"></i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
