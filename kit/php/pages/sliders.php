<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('Sliders'); ?></li>
</ul>
<!-- // Breadcrumb END -->

<h3 class="heading-mosaic"><?php echo $translate->_('Sliders'); ?></h3>
<div class="innerLR">

	<!-- Range Sliders -->
	<h3>Range Sliders</h3>

	<div class="row-fluid">
		<div class="span6">
			
			<!-- Widget -->
			<div class="widget">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Basic Range Slider</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body">
				
					<!-- Slider -->
					<div class="sliderContainer">
						<div id="rangeSlider"></div>
					</div>
					<!-- // Slider END -->
					
				</div>
			</div>
			<!-- // Widget END -->
			
		</div>
		<div class="span6">
		
			<!-- Widget -->
			<div class="widget">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Edit Range Slider</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body">
				
					<!-- Slider -->
					<div class="sliderContainer">
						<div id="rangeSliderEdit" class="rangeslider-success"></div>
					</div>
					<!-- // Slider END -->
					
				</div>
			</div>
			<!-- // Widget END -->
			
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span6">
			
			<!-- Widget -->
			<div class="widget">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Date Range Slider</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body">
				
					<!-- Slider -->
					<div class="sliderContainer">
						<div id="rangeSliderDate"></div>
					</div>
					<!-- // Slider END -->
					
				</div>
			</div>
			<!-- // Widget END -->
			
		</div>
		<div class="span6">
		
			<!-- Widget -->
			<div class="widget">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Range Slider without Arrows</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body">
				
					<!-- Slider -->
					<div class="sliderContainer">
						<div id="rangeSliderWArrows" class="rangeslider-warning"></div>
					</div>
					<!-- // Slider END -->
					
				</div>
			</div>
			<!-- // Widget END -->
			
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span6">
			
			<!-- Widget -->
			<div class="widget">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Range Slider with formatter</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body">
				
					<!-- Slider -->
					<div class="sliderContainer">
						<div id="rangeSliderFormatter"></div>
					</div>
					<!-- // Slider END -->
					
				</div>
			</div>
			<!-- // Widget END -->
			
		</div>
		<div class="span6">
		
			<!-- Widget -->
			<div class="widget">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Range Slider Rulers</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body">
				
					<!-- Slider -->
					<div class="sliderContainer">
						<div id="rangeSliderRuler" class="rangeslider-danger"></div>
					</div>
					<!-- // Slider END -->
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Date Range Slider Ruler</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Slider -->
			<div class="sliderContainer">
				<div id="rangeSliderRulerDate" class="rangeslider-success"></div>
			</div>
			<!-- // Slider END -->
			
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Range Slider Step</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Slider -->
			<div class="sliderContainer">
				<div id="rangeSliderStep"></div>
			</div>
			<!-- // Slider END -->
			
		</div>
	</div>
	<!-- // Widget END -->
	
	<div class="row-fluid">
		<div class="span6">
			
			<!-- Widget -->
			<div class="widget">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Range Slider Wheel Zoom</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body">
				
					<!-- Slider -->
					<div class="sliderContainer">
						<div id="rangeSliderWheelZoom"></div>
					</div>
					<!-- // Slider END -->
					
				</div>
			</div>
			<!-- // Widget END -->
			
		</div>
		<div class="span6">
		
			<!-- Widget -->
			<div class="widget">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Range Slider Wheel Scroll</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body">
				
					<!-- Slider -->
					<div class="sliderContainer">
						<div id="rangeSliderWheelScroll"></div>
					</div>
					<!-- // Slider END -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- // Range Sliders END -->
	
	<!-- Sliders -->
	<h3>Regular Sliders</h3>
	
	<!-- Simple slider -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h3 class="heading">Simple Slider</h3>
		</div>
		<!-- // Widget heading END -->
				
		<div class="widget-body">
		
			<!-- Slider -->
			<div class="slider-single slider-primary"></div>
		</div>
	</div>
	<!-- // Simple slider END -->
	
	<!-- Range slider -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h3 class="heading">Range Slider</h3>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Slider -->
			<div class="range-slider row-fluid">
				<div class="span3"><input type="text" class="amount span12" /></div>
				<div class="span9" style="padding: 5px 0 0;"><div class="slider slider-primary"></div></div>
			</div>
			<!-- // Slider END -->
			
		</div>
	</div>
	<!-- // Range slider END -->
	
	<!-- Range fixed minimum slider -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h3 class="heading">Range Fixed Minimum Slider</h3>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Slider -->
			<div class="slider-range-min row-fluid">
				<div class="span3">
					<label class="span8">Maximum price:</label> 
					<input type="text" class="amount span4" />
				</div>
				<div class="span9" style="padding: 5px 0 0;">
					<div class="slider slider-primary"></div>
				</div>
			</div>
			<!-- // Slider END -->
			
		</div>
	</div>
	<!-- // Range fixed minimum slider END -->
	
	<!-- Range fixed maximum slider -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h3 class="heading">Range Fixed Maximum Slider</h3>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Slider -->
			<div class="slider-range-max row-fluid">
				<div class="span3">
				    <label class="span8">Maximum price:</label>
				    <input type="text" class="amount span4" />
				</div>
				<div class="span9" style="padding: 5px 0 0;"><div class="slider slider-primary"></div></div>
			</div>
			<!-- // Slider END -->
			
		</div>
	</div>
	<!-- // Range fixed maximum slider -->
	
	<!-- Snap to increments slider -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h3 class="heading">Snap to Increments Slider</h3>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Slider -->
			<div class="increments-slider row-fluid">
				<div class="span3">
					 <label class="span8">$50 increments:</label>
				    <input type="text" class="span4 amount" />
			    </div>
			    <div class="span9" style="padding: 5px 0 0;">
					<div class="slider slider-primary"></div>
				</div>
			</div>
			<!-- // Slider END -->
			
		</div>
	</div>
	<!-- // Snap to increments slider END -->
	
	<!-- Vertical sliders -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h3 class="heading">Vertical Sliders</h3>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
			
			<!-- Slider -->
			<div class="sliders-vertical">
			    <span>77</span>
			    <span>55</span>
			    <span>33</span>
			    <span>40</span>
			    <span>45</span>
			    <div class="clearfix"></div>
			</div>
			<!-- // Slider END -->
			
		</div>
	</div>
	<!-- // Vertical sliders END -->
	
	<div class="separator bottom"></div>
	<!-- // Sliders END -->

</div>