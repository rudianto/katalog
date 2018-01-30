<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>QG - Souvenir</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="brand clearfix">
		
		<a href="index.html" class="logo"><img src="<?=base_url();?>assets/img/logo.jpg" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="<?=base_url();?>assets/img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Edit Account</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Search</li>
				<li>
					<input type="text" class="ts-sidebar-search" placeholder="Search here...">
				</li>
				<li class="ts-label">Main</li>
				<li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"><i class="fa fa-desktop"></i> UI Elements</a>
					<ul>
						<li><a href="panels.html">Panels and Wells</a></li>
						<li><a href="buttons.html">Buttons</a></li>
						<li><a href="notifications.html">Notifications</a></li>
						<li><a href="typography.html">Typography</a></li>
						<li><a href="icon.html">Icon</a></li>
						<li><a href="grid.html">Grid</a></li>
					</ul>
				</li>
				<li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
				<li><a href="forms.html"><i class="fa fa-edit"></i> Forms</a></li>
				<li><a href="charts.html"><i class="fa fa-pie-chart"></i> Charts</a></li>
				<li><a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown</a>
					<ul>
						<li><a href="#">2nd level</a></li>
						<li><a href="#">2nd level</a></li>
						<li><a href="#">3rd level</a>
							<ul>
								<li><a href="#">3rd level</a></li>
								<li><a href="#">3rd level</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="open"><a href="#"><i class="fa fa-files-o"></i> Sample Pages</a>
					<ul>
						<li class="open"><a href="blank.html">Blank page</a></li>
						<li><a href="login.html">Login page</a></li>
					</ul>
				</li>

				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li><a href="#">Help</a></li>
					<li><a href="#">Settings</a></li>
					<li class="ts-account">
						<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Edit Account</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>

			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Blank page</h2>
						
						<div class="well">
							<p>
								<code>.well</code> this is a blank page... What do we do?
							</p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="clearfix pt pb">
						<div class="col-md-12">
							<em>Thank you for using <a href="http://themestruck.com/theme/harmony/"> Harmony Admin Theme </a> by <a href="http://themestruck.com/">ThemeStruck</a></em>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap-select.min.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/js/Chart.min.js"></script>
	<script src="<?=base_url();?>assets/js/fileinput.js"></script>
	<script src="<?=base_url();?>assets/js/chartData.js"></script>
	<script src="<?=base_url();?>assets/js/main.js"></script>

</body>

</html>