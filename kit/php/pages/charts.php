<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('charts'); ?></li>
</ul>
<!-- // Breadcrumb END -->

<h3 class="heading-mosaic"><?php echo $translate->_('charts'); ?></h3>
<div class="innerLR">

	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading"><?php echo $translate->_('chart_simple'); ?></h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Simple Chart -->
			<div id="chart_simple" style="height: 250px;"></div>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading"><?php echo $translate->_('chart_lines_fill_nopoints'); ?></h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Chart with lines and fill with no points -->
			<div id="chart_lines_fill_nopoints" style="height: 250px;"></div>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading"><?php echo $translate->_('chart_ordered_bars'); ?></h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Ordered bars Chart -->
			<div id="chart_ordered_bars" style="height: 250px;"></div>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading"><?php echo $translate->_('chart_donut'); ?></h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Donut Chart -->
			<div id="chart_donut" style="height: 250px;"></div>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading"><?php echo $translate->_('chart_stacked_bars'); ?></h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Stacked bars Chart -->
			<div id="chart_stacked_bars" style="height: 250px;"></div>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading"><?php echo $translate->_('chart_pie'); ?></h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Pie Chart -->
			<div id="chart_pie" style="height: 250px;"></div>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading"><?php echo $translate->_('chart_horizontal_bars'); ?></h4>
		</div>
		<!-- // Widget heading END -->
	
		<div class="widget-body">
		
			<!-- Horizontal Bars Chart -->
			<div id="chart_horizontal_bars" style="height: 250px;"></div>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading"><?php echo $translate->_('chart_live'); ?></h4>
		</div>
		<!-- // Widget heading END -->
	
		<div class="widget-body">
		
			<!-- Live Chart -->
			<div id="chart_live" style="height: 250px;"></div>
		</div>
	</div>
	<!-- // Widget END -->
		
</div>