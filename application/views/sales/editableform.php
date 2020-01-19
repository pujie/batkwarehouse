<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<?php $this->load->view('common/head');?>
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
						<label><input type="checkbox" id="autoopen">&nbsp;Auto-open next field</label>
						<label><input type="checkbox" id="inline" >&nbsp;Inline editing</label>
						<button id="enable" class="btn blue">Enable / Disable</button>
						<hr>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<table id="user" class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td style="width:15%">Username</td>
									<td style="width:50%"><a href="#" id="username" data-type="text" data-pk="1" data-original-title="Enter username">superuser</a></td>
									<td style="width:35%"><span class="muted">Simple text field</span></td>
								</tr>
								<tr>
									<td>First name</td>
									<td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname"></a></td>
									<td><span class="muted">Required text field, originally empty</span></td>
								</tr>
								<tr>
									<td>Sex</td>
									<td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-original-title="Select sex"></a></td>
									<td><span class="muted">Select, loaded from js array. Custom display</span></td>
								</tr>
								<tr>
									<td>Group</td>
									<td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-original-title="Select group">Admin</a></td>
									<td><span class="muted">Select, loaded from server. <strong>No buttons</strong> mode</span></td>
								</tr>
								<tr>
									<td>Status</td>
									<td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-original-title="Select status">Active</a></td>
									<td><span class="muted">Error when loading list items</span></td>
								</tr>
								<tr>
									<td>Plan vacation?</td>
									<td><a href="#" id="vacation" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-placement="right" data-original-title="When you want vacation to start?">25.02.2013</a></td>
									<td><span class="muted">Datepicker</span></td>
								</tr>
								<tr>
									<td>Date of birth</td>
									<td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-original-title="Select Date of birth"></a></td>
									<td><span class="muted">Date field (combodate)</span></td>
								</tr>
								<tr>
									<td>Setup event</td>
									<td><a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"  data-original-title="Setup event date and time"></a></td>
									<td><span class="muted">Datetime field (combodate)</span></td>
								</tr>
								<tr>
									<td>Meeting start</td>
									<td><a href="#" id="meeting_start" data-type="datetime" data-pk="1" data-url="/post" data-placement="right" title="Set date & time">15/03/2013 12:45</a></td>
									<td><span class="muted">Bootstrap datetime</span></td>
								</tr>
								<tr>
									<td>Comments</td>
									<td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-original-title="Enter comments">awesome<br>user!</a></td>
									<td><span class="muted">Textarea. Buttons below. Submit by <i>ctrl+enter</i></span></td>
								</tr>
								<tr>
									<td>Type State</td>
									<td><a href="#" id="state" data-type="typeahead" data-pk="1" data-placement="right" data-original-title="Start typing State.."></a></td>
									<td><span class="muted">Bootstrap typeahead</span></td>
								</tr>
								<tr>
									<td>Fresh fruits</td>
									<td><a href="#" id="fruits" data-type="checklist" data-value="2,3" data-original-title="Select fruits"></a></td>
									<td><span class="muted">Checklist</span></td>
								</tr>
								<tr>
									<td>Tags</td>
									<td><a href="#" id="tags" data-type="select2" data-pk="1" data-original-title="Enter tags">html, javascript</a></td>
									<td><span class="muted">Select2 (tags mode)</span></td>
								</tr>
								<tr>
									<td>Country</td>
									<td><a href="#" id="country" data-type="select2" data-pk="1" data-value="BS" data-original-title="Select country"></a></td>
									<td><span class="muted">Select2 (dropdown mode)</span></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><a href="#" id="address" data-type="address" data-pk="1" data-original-title="Please, fill address"></a></td>
									<td><span class="muted">Your custom input, several fields</span></td>
								</tr>
								<tr>
									<td>Notes</td>
									<td>
										<div id="note" data-pk="1" data-type="wysihtml5" data-toggle="manual" data-original-title="Enter notes">
											<h3>WYSIWYG</h3>
											WYSIWYG means <i>What You See Is What You Get</i>.<br>
											But may also refer to:
											<ul>
												<li>WYSIWYG (album), a 2000 album by Chumbawamba</li>
												<li>"Whatcha See is Whatcha Get", a 1971 song by The Dramatics</li>
												<li>WYSIWYG Film Festival, an annual Christian film festival</li>
											</ul>
											<i>Source:</i> <a href="http://en.wikipedia.org/wiki/WYSIWYG_%28disambiguation%29">wikipedia.org</a> 
										</div>
									</td>
									<td><a href="#" id="pencil"><i class="icon-pencil"></i> [edit]</a><br><span class="muted">Wysihtml5 (bootstrap only).<br>Toggle by another element</span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<h3>Console  <small>(all ajax requests here are emulated)</small></h3>
						<div><textarea id="console" rows="8" style="width: 70%" class="m-wrap"></textarea></div>
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
	<!-- BEGIN PLUGINS USED BY X-EDITABLE -->
	<?php $this->load->view('common/xeditable');?>
	<!-- END X-EDITABLE PLUGIN -->
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/assets/metronics/scripts/app.js"></script>
	<script src="/assets/metronics/scripts/form-editable.js"></script>
	<script>
		jQuery(document).ready(function() {
		// initiate layout and plugins
		App.init();
		FormEditable.init();
		});
	</script>
	<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->
</html>