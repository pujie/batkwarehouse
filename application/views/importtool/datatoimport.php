<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<?php $this->load->view('common/head');?>
<?php $this->load->view('common/datatablestyles');?>
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
								<div class="caption"><i class="icon-globe"></i><?php echo $breadcrumb[2]['label'];?>, total <?php echo $amount;?></div>
								<div class="actions">
									<div class="btn-group">
                                        <a class="btn red" href="/importtool/index" >Import</a>
									</div>
								</div>
                            </div>
                            



    <form action="/importtool/save" method="post">

    <div class="control-group">
										<label class="control-label"></label>
										<div class="controls">
                                            <div class="input-append color colorpicker-default" data-color="#3865a8" data-color-format="rgba">
                                                <input type="text" class="m-wrap" name="category" placeholder="Kategori" />
                                                <button name="btnsave" class="btn">Simpan</button>
											</div>
        
										</div>
									</div>




        <div class="portlet-body">
            <table class="table table-striped table-bordered" id="tProcess">
                <tbody>
                    <?php $c = 0;?>
                    <?php foreach($results as $obj){?>
                    <tr class="odd gradeX">
                        <th><?php echo $c;$c++;?></th>
                        <td><?php echo $obj["kditem"];?></td>
                        <td><?php echo $obj["nmitem"];?></td>
                        <td><?php echo $obj["hpp"];?></td>
                        <td><?php echo $obj["qty"];?></td>
                        <td><?php echo $obj["unit"];?></td>
                    </tr>
                    <input type="hidden" name="kditem[]" value="<?php echo $obj['kditem'];?>">
                    <input type="hidden" name="nmitem[]" value="<?php echo $obj['nmitem'];?>">
                    <input type="hidden" name="hpp[]" value="<?php echo $obj['hpp'];?>">
                    <input type="hidden" name="qty[]" value="<?php echo $obj['qty'];?>">
					<input type="hidden" name="unit[]" value="<?php echo $obj['unit'];?>">
                    <input type="hidden" name="count" value="<?php echo $c;?>">
                    <?php }?>
                </tbody>
            </table>
        </div>
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
		});
	</script>
</body>
<!-- END BODY -->
</html>