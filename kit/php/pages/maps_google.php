<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('Maps'); ?></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('Google maps'); ?></li>
</ul>
<!-- // Breadcrumb END -->

<h3 class="heading-mosaic"><?php echo $translate->_('Google maps'); ?></h3>
<div class="innerLR">

	<!-- Tabs -->
	<div class="widget widget-tabs widget-tabs-vertical row-fluid row-merge" id="maps_google_tabs">
	
		<!-- Tabs Heading -->
		<div class="widget-head span3">
			<ul>
				<li<?php if ($section == 'index'): ?> class="active"<?php endif; ?>><a href="<?php echo getURL(array('page' => 'maps_google')); ?>">Streetview with microformats</a></li>
				<li<?php if ($section == 'clustering'): ?> class="active"<?php endif; ?>><a href="<?php echo getURL(array('page'=>'maps_google', 'section'=>'clustering')); ?>">Clustering</a></li>
				<li<?php if ($section == 'extend-pagination'): ?> class="active"<?php endif; ?>><a href="<?php echo getURL(array('page'=>'maps_google', 'section'=>'extend-pagination')); ?>">Extend with pagination</a></li>
				<li<?php if ($section == 'filtering'): ?> class="active"<?php endif; ?>><a href="<?php echo getURL(array('page'=>'maps_google', 'section'=>'filtering')); ?>">Filtering</a></li>
				<li<?php if ($section == 'geocoding'): ?> class="active"<?php endif; ?>><a href="<?php echo getURL(array('page'=>'maps_google', 'section'=>'geocoding')); ?>">Click and drag with geo search</a></li>
				<li<?php if ($section == 'json'): ?> class="active"<?php endif; ?>><a href="<?php echo getURL(array('page'=>'maps_google', 'section'=>'json')); ?>">Load markers from JSON</a></li>
			</ul>
		</div>
		<!-- // Tabs Heading END -->
		
		<div class="widget-body span9">
		
			<!-- Tab content -->
			<div class="tab-content">
			
				<?php if ($section == 'index'): ?>
				<!-- Streetview -->
				<h4 class="separator bottom">Streetview with microformats <span>Click on marker or "Spinal Tap" title to open Street View</span></h4>
				<div class="thumbnail"><div class="map_canvas" id="google-map-streetview" style="height: 400px"></div></div>
				<div class="separator bottom"></div>
				<div class="vevent well">
					<a href="#spinaltap"><h3 class="url summary">Spinal Tap</h3></a> 
					<p class="box-generic">After their highly-publicized search for a new
						drummer, Spinal Tap kicks off their latest comeback tour with a San
						Francisco show.</p>
					
					<p><strong>When:</strong>
					<span class="dtstart"> Oct 15, 7:00PM <span class="value-title" title="2015-10-15T19:00-08:00"></span></span> - 
					<span class="dtend"> 9:00PM<span class="value-title" title="2015-10-15T21:00-08:00"></span></span><br/>
					
					<strong>Where:</strong>
					<span class="location vcard">
						<span class="fn org">Warfield Theatre</span>, 
						<span class="adr"> 
							<span class="street-address">982 Market St</span>, 
							<span class="locality">San Francisco</span>, 
							<span class="region">CA</span>
						</span> 
						<span class="geo"> 
							<span class="latitude"><span class="value-title" title="37.774929"></span></span>
							<span class="longitude"><span class="value-title" title="-122.419416"></span></span>
						</span>
					</span></p>
				</div>
				<!-- // Streetview END -->
				<?php endif; ?>
				
				<?php if ($section == 'clustering'): ?>
				<!-- Clustering -->
				<h4 class="separator bottom">Clustering</h4>
				<div class="thumbnail"><div class="map_canvas" id="google-map-clustering" style="height: 400px"></div></div>
				<!-- // Clustering END -->
				<?php endif; ?>
				
				<?php if ($section == 'extend-pagination'): ?>
				<!-- Pagination -->
				<h4 class="separator bottom">Extend Gmaps with pagination</h4>
				<div class="thumbnail"><div class="map_canvas" id="google-map-extend-pagination" style="height: 400px"></div></div>
				<!-- // Pagination END -->
				<?php endif; ?>
				
				<?php if ($section == 'filtering'): ?>
				<!-- Filtering -->
				<h4 class="separator bottom">Filtering</h4>
				<div class="thumbnail"><div class="map_canvas" id="google-map-filters" style="height: 400px"></div></div>
				<div id="radios" class="well"></div>
				<!--<div id="tags-control" class="well">
					<label style="color:#555;font-size:12px; font-weight:bold;" for="tags">Filter by tag</label>
					<select id="tags" style="outline:none;"></select>
				</div>-->
				<!-- // Filtering END -->
				<?php endif; ?>
				
				<?php if ($section == 'geocoding'): ?>
				<!-- Geocoding -->
				<h4 class="separator bottom">Geocoding <span>Click anywhere on map to add markers</span></h4>
				<div class="thumbnail"><div class="map_canvas" id="google-map-geocoding" style="height: 400px"></div></div>
				<div id="modals"></div>
				<!-- // Geocoding END -->
				<?php endif; ?>
				
				<?php if ($section == 'json'): ?>
				<!-- JSON -->
				<h4 class="separator bottom">Loading markers from JSON</h4>
				<div class="thumbnail"><div class="map_canvas" id="google-map-json" style="height: 400px"></div></div>
				<!-- // JSON END -->
				<?php endif; ?>
				
			</div>
			<!-- // Tab content END -->
			
		</div>
	</div>
	<!-- // Tabs END -->
	
</div>