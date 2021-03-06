<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<?php $this->load->view('common/head');?>
	<!-- BEGIN PAGE LEVEL STYLES -->
	<?php $this->load->view('common/formstyles');?>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->   
	<?php $this->load->view('common/header');?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<?php $this->load->view('common/sidebar');?>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->  
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->   
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						<!-- END BEGIN STYLE CUSTOMIZER -->   
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html"><?php echo $breadcrumb[0];?></a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#"><?php echo $breadcrumb[1];?></a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#"><?php echo $breadcrumb[2];?></a></li>
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Entry Gudang</div>
								<div class="tools">
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="/gudang/save" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Tanggal</label>
										<div class="controls">
											<input class="m-wrap m-ctrl-medium date-picker" readonly size="16" type="text" value="" />
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Kategori</label>
										<div class="controls">
											<select class="span6 m-wrap" data-placeholder="Choose a Category" tabindex="1">
												<option value="">Pilihlah...</option>
												<?php foreach($cats as $cat){?>
												<option value="<?php echo $cat->id;?>"><?php echo $cat->name;?></option>
												<?php }?>
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Nama</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" />
											<span class="help-inline">Some hint here</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Jumlah</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap mask_decimal" />
											<span class="help-inline">Some hint here</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Auto Complete</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot; Support <support@demo.com> &quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" />
											<p class="help-block">Start typing to auto complete!. E.g: California</p>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Harga</label>
										<div class="controls">
											<input class="span6 m-wrap" id="mask_currency" type="text" />
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn blue">Submit</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->         
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->  
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php $this->load->view('common/footer');?>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<?php $this->load->view('common/coreplugins');?>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<?php $this->load->view('common/pagelevelkasir');?>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/assets/metronics/scripts/app.js"></script>
	<script src="/assets/metronics/scripts/form-components.js"></script>     
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   FormComponents.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>