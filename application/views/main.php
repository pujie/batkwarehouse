<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<?php $this->load->view('common/head');?>
<?php $this->load->view('common/lockstyles');?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
	<div class="page-lock">
		<div class="page-logo">
			<a class="brand" href="/">
			<h4>Administrasi belanjaatk</h4>
			</a>
		</div>
		<div class="page-body">
			<img class="page-lock-img" src="assets/metronics/img/profile/belanjaatklogo400x97_undertext.png" alt="">
			<div class="page-lock-info">
				<h1>Login Page</h1>
				<span>belanjaatk.co.id</span>
				<span><em>Locked</em></span>
				<form class="form-search" action="index.html">
					<div class="input-append">
						<input type="text" class="m-wrap" placeholder="Abaikan">
						<button type="submit" class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>
					</div>
					<div class="relogin">
						<a href="/sales">Sales</a>
						<a href="/gudang">Gudang</a>
						<a href="/sales">Kasir</a>
					</div>
				</form>
			</div>
		</div>
		<?php $this->load->view('common/footer');?>
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