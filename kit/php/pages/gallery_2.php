<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('photo_gallery'); ?></li>
</ul>
<div class="separator bottom"></div>
<!-- // Breadcrumb END -->

<div class="innerLR">

	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h3 class="heading"><?php echo $translate->_('photo_gallery'); ?></h3>
		</div>
		<!-- // Widget heading END -->
		
		<!-- Gallery -->
		<div class="widget-body">
			<div class="row-fluid gallery gallery-masonry" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-2" data-delegate="#gallery-2">
				<ul>
				
					<?php for ($i=1; $i<=12; $i++): ?>
					<!-- Gallery item -->
					<li class="span2">
						<a href="<?php echo getURL(); ?>theme/images/gallery/<?php echo $i; ?>.jpg" class="thumb view" data-gallery="gallery">
							<img src="<?php echo getURL(); ?>theme/images/gallery/rs/<?php echo $i; ?>.jpg" alt="Album" />
						</a>
					</li>
					<!-- // Gallery item END -->
					<?php endfor; ?>
					
				</ul>
			</div>
		</div>
		<!-- // Gallery END -->
		
	</div>
	<!-- // Widget END -->

	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h3 class="heading"><?php echo $translate->_('photo_gallery'); ?></h3>
		</div>
		<!-- // Widget heading END -->
		
		<!-- Gallery -->
		<div class="widget-body">
			<div class="row-fluid gallery gallery-masonry" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery" data-delegate="#gallery">
				<ul>
				
					<?php for ($i=1; $i<=12; $i++): ?>
					<!-- Gallery item -->
					<li class="span3">
						<a href="<?php echo getURL(); ?>theme/images/gallery/<?php echo $i; ?>.jpg" class="thumb view" data-gallery="gallery">
							<img src="<?php echo getURL(); ?>theme/images/gallery/rs/<?php echo $i; ?>.jpg" alt="Album" />
						</a>
					</li>
					<!-- // Gallery item END -->
					<?php endfor; ?>
					
				</ul>
			</div>
		</div>
		<!-- // Gallery END -->
		
	</div>
	<!-- // Widget END -->
	
</div>