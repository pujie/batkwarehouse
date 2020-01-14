<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Metronic | Extra - Lock Screen</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/metronics/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/metronics/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/metronics/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/metronics/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="assets/metronics/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/metronics/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/metronics/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="assets/metronics/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="assets/metronics/css/pages/lock.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
	<div class="page-lock">
		<div class="page-logo">
			<a class="brand" href="index.html">
			<img src="assets/metronics/img/logo-big.png" alt="logo" />
			</a>
		</div>
		<div class="page-body">
			<img class="page-lock-img" src="assets/metronics/img/profile/profile.jpg" alt="">
			<div class="page-lock-info">
				<h1>Bob Nilson</h1>
				<span>bob@keenthemes.com</span>
				<span><em>Locked</em></span>
				<form class="form-search" action="index.html">
					<div class="input-append">
						<input type="text" class="m-wrap" placeholder="Password">
						<button type="submit" class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>
					</div>
					<div class="relogin">
						<a href="/sales">Sales</a>
						<a href="/sales">Gudang</a>
						<a href="/sales">Kasir</a>
					</div>
				</form>
			</div>
		</div>
		<div class="page-footer">
			2013 &copy; Metronic. Admin Dashboard Template.
		</div>
	</div>
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="assets/metronics/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="assets/metronics/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/metronics/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="assets/metronics/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/metronics/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/metronics/plugins/excanvas.min.js"></script>
	<script src="assets/metronics/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="assets/metronics/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/metronics/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="assets/metronics/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="assets/metronics/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="assets/metronics/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->   
	<script src="assets/metronics/scripts/app.js"></script>  
	<script src="assets/metronics/scripts/lock.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		   Lock.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>