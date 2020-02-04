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
								<input type="text" class="span6 m-wrap" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="<?php echo $products;?>" id="productid"/>
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
								<input type="text" class="span6 m-wrap" class="mask_decimal" value="1" id="productamount" />
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
										<a href="#addbuy" data-toggle="modal" class="btn red">Add</a>
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
										<tr id=3>
											<td>Buku</td>
											<td>60.000,00</td>
											<td>3</td>
											<td class="center">180.000,00</td>
											<td><a class="edit" href="javascript:;">Edit</a></td>
											<td><a class="deleteRow" href="javascript:;">Delete</a></td>
										</tr>
										<tr id=2>
											<td>Ballpoint</td>
											<td>24.000,00</td>
											<td>5</td>
											<td class="center">120.000,00</td>
											<td><a class="edit" href="javascript:;">Edit</a></td>
											<td><a class="deleteRow" href="javascript:;">Delete</a></td>
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
		   $("#productid").on("change",function(){
			x = $("#productid").val().split("-");
			   if(x.length>1){
					$.ajax({
					url:'/sales/getproductprice/'+x[0],
					type:'get'
				})
				.done(function(data){
					console.log("Hasil",data);
					$("#productprice").val(data);
				})
				.fail(function(err){
					console.log("Err",err);
				});
			   }
		   })
		   $("#savetemporary").on("click",function(){
			   str = '<tr id=3>';
			   str+= '<td>'+$('#productid').val()+'</td>';
			   str+= '<td>'+numberWithCommas($('#productprice').val())+'</td>';
			   str+= '<td>'+$('#productamount').val()+'</td>';
			   str+= '<td class="center">'+numberWithCommas($('#productprice').val()*$('#productamount').val())+'</td>';
			   str+= '<td class="">Edit</td>';
			   str+= '<td><a class="deleteRow" href="javascript:;">Delete</a></td>';
			   str+= '</tr>';
			   console.log("Invoked");
			   $("#sample_editable_1").prepend(str);
			   $(".deleteRow").on("click",function(){
				console.log($(this));
				})
		   });
		   $(".closedialog").on("click",function(){});
			$(".deleteRow").on("click",function(){
				console.log($(this));
			})

		   function numberWithCommas(x) {
				var parts = x.toString().split(",");
				parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
				return parts.join(",");
			}
		});
	</script>
</body>
<!-- END BODY -->
</html>