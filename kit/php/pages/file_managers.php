<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('forms'); ?></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('file_managers'); ?></li>
</ul>
<!-- // Breadcrumb END -->

<h3 class="heading-mosaic"><?php echo $translate->_('file_managers'); ?></h3>
<div class="innerLR">

	<!-- Widget -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading glyphicons file_import"><i></i>Dropzone File Upload</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Dropzone -->
			<div id="dropzone">
				<form action="<?php echo getURL(); ?>theme/scripts/plugins/forms/dropzone/upload.php" class="dropzone" id="demo-upload">
					<div class="fallback">
				    	<input name="file" type="file" multiple />
				  	</div>
				</form>
			</div>
			<div class="separator bottom"></div>
			<p class="lead">This is just a demo dropzone. Uploaded files are <strong>not</strong> processed, BUT there is a Simple PHP Upload Example available in <code>theme/scripts/plugins/forms/dropzone/upload.php</code></p>
			<!-- // Dropzone END -->
			
		</div>
	</div>
	<!-- // Widget END -->

	<!-- Widget -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading glyphicons file_import"><i></i>Plupload File Upload</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Plupload -->
			<form id="pluploadForm">
				<div id="pluploadUploader">
					<p>You browser doesn't have Flash, Silverlight, Gears, BrowserPlus or HTML5 support.</p>
				</div>
			</form>
			<!-- // Plupload END -->
			
		</div>
	</div>
	<!-- // Widget END -->
	
</div>