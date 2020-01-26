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
								<input type="text" class="span6 m-wrap" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="<?php echo $products;?>"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Harga</label>
							<div class="controls">
								<input type="text" class="span6 m-wrap" class="mask_currency">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Jumlah</label>
							<div class="controls">
								<input type="text" class="span6 m-wrap" class="mask_decimal">
							</div>
						</div>
					</form>	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-alert">Close</button>
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
								<a href="index.html"><?php echo $breadcrumb[0];?></a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#"><?php echo $breadcrumb[1];?></a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#"><?php echo $breadcrumb[2];?></a></li>
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
								<div class="caption"><i class="icon-edit"></i>Sales</div>
								<div class="tools">
									<a href="javascript:;" class="reload"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="btn-group">
										<!--<button id="sample_editable_1_newbatk" class="btn green">
										Add New <i class="icon-plus"></i>
										</button>-->
										<a href="#addbuy" data-toggle="modal" class="btn red">Add</a>
										<!--<button class="btn btn green" id="addbuybutton">Add</button>-->
									</div>
									<div class="btn-group pull-right">
										<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li><a href="#">Print</a></li>
											<li><a href="#">Save as PDF</a></li>
											<li><a href="#">Export to Excel</a></li>
										</ul>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th>Nama</th>
											<th>Harga</th>
											<th>Jumlah</th>
											<th>Total</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr >
											<td>Buku</td>
											<td>60.000,00</td>
											<td>3</td>
											<td class="center">180.000,00</td>
											<td><a class="edit" href="javascript:;">Edit</a></td>
											<td><a class="delete" href="javascript:;">Delete</a></td>
										</tr>
										<tr >
											<td>Ballpoint</td>
											<td>24.000,00</td>
											<td>5</td>
											<td class="center">120.000,00</td>
											<td><a class="edit" href="javascript:;">Edit</a></td>
											<td><a class="delete" href="javascript:;">Delete</a></td>
										</tr>
									</tbody>
								</table>
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
	<script>
		jQuery(document).ready(function() {
		   App.init();
		   TableEditable.init();
		   $("#addbuybutton").click(function(){
			   newRow = "<tr>";
			   newRow+= "<td><button class=''>...</button></td><td></td><td></td><td></td><td></td><td></td>";
			   newRow+= "</tr>";
			   $("#sample_editable_1").prepend(newRow);
		   });
		});
	</script>
</body>
<!-- END BODY -->
</html>