
<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | BM75</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('klorofil/vendor/bootstrap/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('klorofil/vendor/font-awesome/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('klorofil/vendor/linearicons/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('klorofil/vendor/chartist/css/chartist-custom.css')); ?>">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('klorofil/css/main.css')); ?>">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<script src="https://kit.fontawesome.com/56a5f81545.js" crossorigin="anonymous"></script>
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?php echo e(asset('img/logo/BM.png')); ?>" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<!-- <form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form> -->
		
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="" class="img-circle"> <span>user</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
				
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo e(route('home')); ?>" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>	
						<li><a href="<?php echo e(route('welcome')); ?>" target="_blank"><span>view blog</span></a></li>						
						<li><a href="<?php echo e(route('blog.index')); ?>" class=""><i class="fas fa-pen"></i><span>create post</span></a></li>
						<li><a href="" class=""><i class="fas fa-calculator"></i><span>accounting</span></a></li>
						<li><a href="" class=""><i class="fas fa-shopping-cart"></i><span>data material</span></a></li>
						<li><a href="<?php echo e(route('report.index')); ?>" class=""><i class="fas fa-chart-line"></i><span>reporting</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fas fa-hard-hat"></i><span>project manage</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo e(route('project.index')); ?>" class="">project view</a></li>
									<li><a href="<?php echo e(route('project.create')); ?>" class="">add project</a></li>
								</ul>
							</div>
						</li>
						<li><a href="<?php echo e(route('inventory')); ?>" class=""><i class="fas fa-archive"></i><span>inventory</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fas fa-users"></i><span>Manage Users</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="" class="">users</a></li>
									<li><a href="" class="">log activity users</a></li>
								</ul>
							</div>
						</li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Setting</span></a></li>
						<li><a href="<?php echo e(route('welcome')); ?>" target="_blank"><i class="fas fa-trash"></i><span>trash</span></a></li>				
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<?php echo $__env->yieldContent('content'); ?>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?php echo e(asset('klorofil/vendor/jquery/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('klorofil/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
	
	<script src="<?php echo e(asset('klorofil/vendor/chartist/js/chartist.min.js')); ?>"></script>
	<script src="<?php echo e(asset('klorofil/scripts/klorofil-common.js')); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
	<script src="<?php echo e(asset('jschart/chart.js')); ?>"></script>
	<script src="<?php echo e(asset('jschart/chart.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/date-picker.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.11.0/jquery.typeahead.min.js"></script>
	<script>

	var path = "<?php echo e(route('autocomplete')); ?>";
		$('input.typeahead').typeahead({
			source:  function (query, process) {
			return $.get(path, { query: query }, function (data) {
					return process(data);
				});
			}
		});

		$('.date').datepicker({  
			format: 'mm-dd-yyyy'
		}); 
	</script>
</body>

</html>
