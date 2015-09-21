<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li>Calendar</li>
</ul>
<div class="separator bottom"></div>
<!-- // Breadcrumb END -->

<div class="innerLR">

	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Calendar</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
			<div id="calendar"></div>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- External Events -->
	<div class="uniformjs" id="external-events">
	
		<!-- Widget -->
		<div class="widget">
		
			<!-- Widget heading -->
			<div class="widget-head">
				<h3 class="heading">Draggable Events</h3>
			</div>
			<!-- // Widget heading END -->
			
			<div class="widget-body">
			
				<!-- Events list -->
				<ul>
					<li class="glyphicons move"><i></i> My Event 1</li>
					<li class="glyphicons move"><i></i> My Event 2</li>
					<li class="glyphicons move"><i></i> My Event 3</li>
					<li class="glyphicons move"><i></i> My Event 4</li>
					<li class="glyphicons move"><i></i> My Event 5</li>
				</ul>
				<!-- Events list END -->
				
				<label for="drop-remove" class="checkbox">
					<input type="checkbox" class="checkbox" id="drop-remove" /> 
					remove after drop
				</label>
				<hr class="separator" />
				<p><?php echo APP_NAME; ?> provides a full-sized, drag &amp; drop calendar. It uses AJAX to fetch events on-the-fly for each month and is easily configured to use your own feed format, plus there's an extension provided for Google Calendar.</p>
			</div>
		</div>
		<!-- // Widget END -->
		
	</div>
	<!-- // External Events END -->
	
</div>