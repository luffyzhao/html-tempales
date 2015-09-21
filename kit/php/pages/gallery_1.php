<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('photo_gallery'); ?></li>
</ul>
<!-- // Breadcrumb END -->

<h3 class="heading-mosaic"><?php echo $translate->_('photo_gallery'); ?></h3>
<div class="innerLR">
	
	<!-- Tabs -->
	<div class="tabsbar">
		<ul>
			<li class="glyphicons camera active"><a href=""><i></i> View all photos <strong>(43)</strong></a></li>
			<li class="glyphicons folder_open"><a href=""><i></i> Albums <strong>(3)</strong></a></li>
			<li class="glyphicons circle_plus tab-stacked"><a href=""><i></i> <span>Add Photos</span></a></li>
			<li class="glyphicons folder_plus tab-stacked"><a href=""><i></i> <span>Create Album</span></a></li>
		</ul>
	</div>
	<!-- // Tabs END -->
	
	<!-- Gallery -->
	<div class="gallery gallery-2">
		<ul class="row-fluid" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-3" data-delegate="#gallery-3">
			
			<?php for($i=1;$i<=15;$i++): ?>
			<!-- Gallery item -->
			<li class="span2">
				<a class="thumb" href="<?php echo getURL(); ?>theme/images/gallery-2/<?php echo $i; ?>.jpg" data-gallery="gallery">
					<img src="<?php echo getURL(); ?>theme/images/gallery-2/<?php echo $i; ?>.jpg" alt="photo" />
				</a>
			</li>
			<!-- // Gallery item END -->
			<?php endfor; ?>
			
		</ul>
	</div>
	<!-- // Gallery END -->
	
	<!-- Pagination -->
	<div class="btn-group">
		<a class="btn disabled btn-small btn-default glyphicons standard chevron-left"><i></i></a>
		<a class="btn btn-small btn-default glyphicons standard chevron-right"><i></i></a>
	</div>
	<span class="innerLR">1-6 out of 43</span>
	<!-- // Pagination END -->
	
</div>