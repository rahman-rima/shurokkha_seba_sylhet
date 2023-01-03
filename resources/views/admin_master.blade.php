
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>সুরক্ষা সেবা সিলেট:অ্যাডমিন প্যানেল</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="admin/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="admin/css/style-responsive.css" rel="stylesheet">
	<link href='admin/http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="admin/ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>সুরক্ষা সেবা সিলেট: অ্যাডমিন প্যানেল</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="dashboard"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						
						<li><a href="forms.appointments"><i class="icon-align-justify"></i><span class="hidden-tablet"> Test Appointments</span></a></li>
						
					</ul>
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> {{ Session()->get('admin_name') }}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{url('/logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<!-- <div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<!-- <ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="dashboard"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						
						<li><a href="appoinments"><i class="icon-align-justify"></i><span class="hidden-tablet"> Test Appointments</span></a></li>
						
					</ul> 
					
				</div> -->
			</div>
			<!-- end: Main Menu -->
			
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			
       <div>
		   @yield('admincontent')
	   </div>

	   
  

	<footer>

	<p class="copyright">&copy; 2021 Surokkha Seba Sylhet<br>
            All Rights Reserved by Shabib Chowdhury and Samia Rahman Rima</p>

        </div>

</footer>

<!-- start: JavaScript-->

<script src="admin/js/jquery-1.9.1.min.js"></script>
<script src="admin/js/jquery-migrate-1.0.0.min.js"></script>

<script src="admin/js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="admin/js/jquery.ui.touch-punch.js"></script>

<script src="admin/js/modernizr.js"></script>

<script src="admin/js/bootstrap.min.js"></script>

<script src="admin/js/jquery.cookie.js"></script>

<script src='admin/js/fullcalendar.min.js'></script>

<script src='admin/js/jquery.dataTables.min.js'></script>

<script src="admin/js/excanvas.js"></script>
<script src="admin/js/jquery.flot.js"></script>
<script src="admin/js/jquery.flot.pie.js"></script>
<script src="admin/js/jquery.flot.stack.js"></script>
<script src="admin/js/jquery.flot.resize.min.js"></script>

<script src="admin/js/jquery.chosen.min.js"></script>

<script src="admin/js/jquery.uniform.min.js"></script>

<script src="admin/js/jquery.cleditor.min.js"></script>

<script src="admin/js/jquery.noty.js"></script>

<script src="admin/js/jquery.elfinder.min.js"></script>

<script src="admin/js/jquery.raty.min.js"></script>

<script src="admin/js/jquery.iphone.toggle.js"></script>

<script src="admin/js/jquery.uploadify-3.1.min.js"></script>

<script src="admin/js/jquery.gritter.min.js"></script>

<script src="admin/js/jquery.imagesloaded.js"></script>

<script src="admin/js/jquery.masonry.min.js"></script>

<script src="admin/js/jquery.knob.modified.js"></script>

<script src="admin/js/jquery.sparkline.min.js"></script>

<script src="admin/js/counter.js"></script>

<script src="admin/js/retina.js"></script>

<script src="admin/js/custom.js"></script>
<!-- end: JavaScript-->

</body>
</html>
