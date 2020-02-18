<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<?php $this->load->view('common/head');?>
<link rel="stylesheet" type="text/css" href="/assets/metronics/plugins/select2/select2_metro.css" />
<link rel="stylesheet" href="/assets/metronics/plugins/data-tables/DT_bootstrap.css" />
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
			<div id="addbuy" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>Penambahan Produk</h3>
				</div>
				<div class="modal-body">
					<form action="#" class="form-horizontal">
						<div class="control-group">
							<label class="control-label">Nama</label>
							<div class="controls">
								<input type="text" class="span6 m-wrap selectall" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="<?php echo $products;?>" id="productid"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Harga</label>
							<div class="controls">
								<input type="text" class="span6 m-wrap" class="mask_currency" id="productprice">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Jumlah</label>
							<div class="controls">
								<input type="text" class="span6 m-wrap selectall" class="mask_decimal" value="1" id="productamount" />
							</div>
						</div>
					</form>	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary closedialog" id="savetemporary" data-dismiss="modal" >Tambahkan</button>
					<button type="button" class="btn btn-alert closedialog" data-dismiss="modal" >Tutup</button>
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
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-edit"></i>Kasir</div>
								<div class="tools">
									<a href="javascript:;" class="reload"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="btn-group">
										<a href="#addbuy" data-toggle="modal" class="btn red">Add</a>
									</div>
									<div class="btn-group pull-right">
										<button style="display:none;" class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li><a href="#">Print</a></li>
											<li><a href="#">Save as PDF</a></li>
											<li><a href="#">Export to Excel</a></li>
										</ul>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1x">
									<thead>
										<tr>
											<th width="10%">No</th>
											<th width="45%">Nama</th>
											<th width="15%">Harga</th>
											<th width="15%">Jumlah</th>
											<th width="15%">Total</th>
											<th width="10%">Delete</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
									<tfoot>
									<tr>
									<td colspan=4 width="85%">Total</td><td width="85%"><span id="total">0</span></td><td width="10%"></td>
									</tr>
									</tfoot>
								</table>
								<table class="table table-striped table-hover table-bordered">
									<tr>
									<td colspan=4 width="85%">Cash</td><td width="85%"><span id="cash">0</span></td><td width="10%"></td>
									</tr>
									<tr>
									<td colspan=4 width="85%">return</td><td width="85%"><span id="return">0</span></td><td width="10%"></td>
									</tr>
								</table>
								<div class="table-toolbar">
									<div class="btn-group">

									</div>
									<div class="btn-group pull-right">
										<button class="btn green" id="btnpay">Bayar</button>
									</div>
								</div>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT -->
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
	<script type="text/javascript"  src="/assets/metronics/plugins/select2/select2.min.js"></script>
	<script type="text/javascript"  src="/assets/metronics/plugins/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript"  src="/assets/metronics/plugins/data-tables/DT_bootstrap.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script  src="/assets/metronics/scripts/app.js"></script>
	<script  src="/assets/metronics/scripts/table-editable.js"></script>    
	<script  src="/js/kasir.js">
	</script>
</body>
<!-- END BODY -->
</html>