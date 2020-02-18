<html>

    <?php $this->load->view('common/head');?>
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
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="/"><?php echo $breadcrumb[0]['label'];?></a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="<?php echo $breadcrumb[1]['url'];?>"><?php echo $breadcrumb[1]['label'];?></a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#"><?php echo $breadcrumb[2]['label'];?></a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<!-- END EXAMPLE TABLE PORTLET-->
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-globe"></i><?php echo $breadcrumb[2]['label'];?></div>
							</div>
							<div class="control-group">
									<label class="control-label"></label>
									<div class="controls">
										<button class="btn green" id="btnBrowse">Browse</button>
										</a>  
									</div>
								</div>
							<form name="import" method="POST" enctype="multipart/form-data" action="/importtool/import">
								<div class="control-group">
									<label class="control-label"></label>
									<div class="controls">
										<input style="display:none;" id="myfile" class="btn gold" type="file" name="file" />
										</a>  
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"></label>
									<div class="controls">
										<input class="btn gold" type="submit" name="submit" value="Submit" />
										</a>  
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"></label>
									<div class="controls">
									<a class="btn red" href="/importtool/productlist">List Import</a>
										</a>  
									</div>
								</div>

                                <br />
                                
                                
                            </form>        
                        </div>
						<!-- END EXAMPLE TABLE PORTLET-->
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
	<?php $this->load->view('common/pagefooter');?>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<?php $this->load->view('common/coreplugins');?>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<?php $this->load->view('common/datatableplugins');?>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/assets/metronics/scripts/app.js"></script>
	<script src="/assets/metronics/scripts/table-advanced.js"></script>     
	<script>
		jQuery(document).ready(function() {       
		   App.init();
		   TableAdvanced.init();
		   $("#btnBrowse").on("click",function(){
			   $("#myfile").click();
		   })
		});
	</script>
</body>
<!-- END BODY -->
</html>