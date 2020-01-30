<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<?php $this->load->view('common/head');?>
<link href="/assets/metronics/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<img src="/assets/metronics/img/profile/belanjaatklogo400x97_undertext.png" alt="BelanjaATK Warehouse" /> 
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
		<form class="form-vertical login-form" action="/main/loginhandler" method="post">
			<h3 class="form-title">Login ke akun anda </h3>
			<h5><?php echo $info;?></h5>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>Masukkan username dan password.</span>
			</div>
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
					</div>
				</div>
			</div>
			<div class="control-group">
			<label class="control-label visible-ie8 visible-ie9">Login sebagai</label>
				<div class="controls">
					<div class="input-icon left">
						<select name="role" id="role" class="m-wrap placeholder-no-fix" placeholder="Pilihlah">
							<option value="0">Pilih Role</option>
							<option value="1">Sales</option>
							<option value="2">Gudang</option>
							<option value="3">Kasir</option>
						</select>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn blue pull-right">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		</form>
		<!-- END LOGIN FORM -->        
		<!-- BEGIN FORGOT PASSWORD FORM -->
		<!-- END FORGOT PASSWORD FORM -->
		<!-- BEGIN REGISTRATION FORM -->
		<!-- END REGISTRATION FORM -->
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2020 &copy; Belanjaatk warehouse.
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="/assets/metronics/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="/assets/metronics/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="/assets/metronics/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="/assets/metronics/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/assets/metronics/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="/assets/metronics/plugins/excanvas.min.js"></script>
	<script src="/assets/metronics/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="/assets/metronics/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/assets/metronics/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/assets/metronics/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/assets/metronics/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="/assets/metronics/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="/assets/metronics/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/assets/metronics/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/assets/metronics/scripts/app.js" type="text/javascript"></script>
	<script src="/assets/metronics/scripts/login-soft.js" type="text/javascript"></script>      
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>