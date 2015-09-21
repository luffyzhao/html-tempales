<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('Maps'); ?></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('Vector maps'); ?></li>
</ul>
<!-- // Breadcrumb END -->

<h3 class="heading-mosaic"><?php echo $translate->_('Vector maps'); ?></h3>
<div class="innerLR">

	<!-- Tabs -->
	<div class="widget widget-tabs widget-tabs-vertical row-fluid row-merge" id="maps_vector_tabs">
	
		<!-- Tabs Heading -->
		<div class="widget-head span3">
			<ul>
				<li class="active"><a href="#tab1" data-toggle="tab" data-init="1">GDP by country</a></li>
				<li><a href="#tab2" data-toggle="tab">Markers on the world map</a></li>
				<li><a href="#tab3" data-toggle="tab">USA unemployment</a></li>
				<li><a href="#tab4" data-toggle="tab">Regions selection</a></li>
				<li><a href="#tab5" data-toggle="tab">France elections</a></li>
				<li><a href="#tab6" data-toggle="tab">Random colors</a></li>
				<li><a href="#tab7" data-toggle="tab">Map of the mall</a></li>
				<li><a href="#tab8" data-toggle="tab">Reverse projection</a></li>
			</ul>
		</div>
		<!-- // Tabs Heading END -->
		
		<div class="widget-body span9">
			<div class="tab-content">
			
				<!-- Tab content -->
				<div class="tab-pane active" id="tab1">
					<h4 class="separator bottom">Gross domestic product (GDP) by country</h4>
					<div id="world-map-gdp" style="height: 400px"></div>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab2">
					<h4 class="separator bottom">Markers on the world map</h4>
					<div id="world-map-markers" style="height: 400px"></div>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab3">
					<h4 class="separator bottom">USA unemployment</h4>
					<div id="usa-unemployment" style="height: 400px"></div>
					<div class="separator bottom"></div>
					<p class="lead" id="usa-unemployment-slider-year">Data for <strong>2009</strong></p>
					<div id="usa-unemployment-slider" class="slider-single slider-primary"></div>
					<div class="separator bottom"></div>
					<p>The following example demonstrates the visualization of unemployment statistics in the USA by states and metropolitan areas in a 5-years time-period. The step-by-step process of creation of such a map is described in the <a href="/tutorials/data-visualization/">tutorial</a>. The code in Ruby used to convert data could be found in <a href="https://github.com/bjornd/jvectormap-examples/tree/master/us-unemployment">this repository</a>.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab4">
					<h4 class="separator bottom">Regions selection</h4>
					<div id="regions-selection" style="height: 600px"></div>
					<div class="separator bottom"></div>
					<p>The following example demonstrates the feature of jVectorMap that allows selection of regions and/or markers by user or programmatically. Specific styles could be assigned for the selected items. User selection is saved between page reloads in the local storage.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab5">
					<h4 class="separator bottom">French presidential election, 2007</h4>
					<div id="france-2007" style="height: 400px"></div>
					<div class="jvm-legend">
						<span class="jvm-legend-item jvm-legend-item-ump"></span> 
						<span>Nicolas Sarkozy</span> 
						<span class="jvm-legend-item jvm-legend-item-ps"></span> 
						<span>Segolene Royal</span>
					</div>
					<div class="separator"></div>
					
					<h4 class="separator bottom">French presidential election, 2012</h4>
					<div id="france-2012" style="height: 400px"></div>
					<div class="jvm-legend">
						<span class="jvm-legend-item jvm-legend-item-ps"></span>
						<span>Francois Hollande</span> 
						<span class="jvm-legend-item jvm-legend-item-ump"></span> 
						<span>Nicolas Sarkozy</span>
					</div>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab6">
					<h4 class="separator bottom">Generate random colors</h4>
					<button type="button" id="update-colors-button" class="btn btn-primary">Generate colors</button>
					<div class="separator bottom"></div>
					<div id="random-colors-map" style="height: 400px"></div>
					<div class="separator bottom"></div>
					<p>The following example demonstrates how to set colors directly for the map. The map is painted to the random colors upon loading. You can click "Update colors" to generate new colors for the map.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab7">
					<h4 class="separator bottom">Map of the mall</h4>
					<div id="mall-map" style="height: 300px"></div>
					<div class="separator bottom"></div>
					<p>Example of custom map created from SVG using converter available <a href="http://svgto.jvectormap.com/">here</a>. Please note that if you use map generated from SVG you need to position markers by pixel coordinates, not by latitude and longitude as in case of map generated from GIS data.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab8">
					<h4 class="separator bottom">Reverse projection</h4>
					<p>This example demonstrates the ability to convert pixel coordinates on map to the repsective latitude and longitude coordinates. Click on the map adds marker to the clicked point, click on the added marker removes it.</p>
					<div id="projection-map" style="height: 400px"></div>
				</div>
				<!-- // Tab content END -->
				
			</div>
			
		</div>
	</div>
	<!-- // Tabs END -->
	
</div>