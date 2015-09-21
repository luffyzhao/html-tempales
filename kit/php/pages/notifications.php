<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('notifications'); ?></li>
</ul>
<!-- // Breadcrumb END -->

<h3 class="heading-mosaic">Notifications</h3>
<div class="innerLR">
	<h3>Notyfy <span>Notifications plugin</span></h3>
	
	<!-- Top Notyfy Options & Styles Live Demo -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Top notifications</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body center">
			<span class="btn btn-default" data-layout="top" data-type="alert" data-toggle="notyfy">Alert</span>
			<span class="btn btn-success" data-layout="top" data-type="success" data-toggle="notyfy">Success</span>
			<span class="btn btn-danger" data-layout="top" data-type="error" data-toggle="notyfy">Danger</span>
			<span class="btn btn-warning" data-layout="top" data-type="warning" data-toggle="notyfy">Warning</span>
			<span class="btn btn-info" data-layout="top" data-type="information" data-toggle="notyfy">Information</span>
			<span class="btn btn-inverse" data-layout="top" data-type="confirm" data-toggle="notyfy">Confirm</span>
		</div>
	</div>
	<!-- // Top Notyfy Options & Styles Live Demo END -->
	
	<div class="row-fluid">
	
		<!-- Left Notyfy Options Live Demo -->
		<div class="span4">
			<div class="widget">
				
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Left</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body center">
					<span class="btn btn-default" data-layout="topLeft" data-type="primary" data-toggle="notyfy">Top</span>
					<span class="btn btn-default" data-layout="centerLeft" data-type="primary" data-toggle="notyfy">Center</span>
					<span class="btn btn-default" data-layout="bottomLeft" data-type="primary" data-toggle="notyfy">Bottom</span>
				</div>
			</div>
		</div>
		<!-- // Left Notyfy Options Live Demo END -->
		
		<!-- Center Notyfy Options Live Demo -->
		<div class="span4">
			<div class="widget">
				
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Center</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body center">
					<span class="btn btn-default btn-block" data-layout="center" data-type="primary" data-toggle="notyfy">Center notification</span>
				</div>
			</div>
		</div>
		<!-- // Center Notyfy Options Live Demo END -->
		
		<!-- Right Notyfy Options Live Demo -->
		<div class="span4">
			<div class="widget">
				
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Right</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body center">
					<span class="btn btn-default" data-layout="topRight" data-type="primary" data-toggle="notyfy">Top</span>
					<span class="btn btn-default" data-layout="centerRight" data-type="primary" data-toggle="notyfy">Center</span>
					<span class="btn btn-default" data-layout="bottomRight" data-type="primary" data-toggle="notyfy">Bottom</span>
				</div>
			</div>
		</div>
		<!-- // Right Notyfy Options Live Demo END -->
		
	</div>
	
	<!-- Creating a Notyfy Code Sample -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Creating a notyfy</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
<pre class="prettyprint">
var notyfy = notyfy(
{
	text: 'notyfy - Yet another jQuery notification plugin',
	type: 'primary' // alert|error|success|information|warning|primary|confirm
});
</pre>
		</div>
	</div>
	<!-- // Creating a Notyfy Code Sample END -->
	
	<!-- Default Options Code Sample -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Default Options</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
<pre class="prettyprint">
$.notyfy.defaults = {
	layout: 'top',
	theme: 'default',
	type: 'alert',
	text: '',
	dismissQueue: true, // If you want to use queue feature set this true
	template: '&lt;div class="notyfy_message"&gt;&lt;span class="notyfy_text"&gt;&lt;/span&gt;' + 
  		  '&lt;div class="notyfy_close"&gt;&lt;/div&gt;&lt;/div&gt;',
	showEffect:  function(bar) { bar.animate({ height: 'toggle' }, 500, 'swing'); },
	hideEffect:  function(bar) { bar.animate({ height: 'toggle' }, 500, 'swing'); },
	timeout: false, // delay for closing event. Set false for sticky notifications
	force: false, // adds notification to the beginning of queue when set to true
	modal: false,
	closeWith: ['click'], // ['click', 'button', 'hover']
	events: {
		show: null,
		hide: null,
		shown: null,
		hidden: null
	},
	buttons: false // an array of buttons
};
</pre>
		</div>
	</div>
	<!-- // Default Options Code Sample END -->
	
	<h3>Gritter <span>Notifications plugin</span></h3>
	<div class="row-fluid">
	
		<!-- Color Options Column -->
		<div class="span4">
			<div class="widget">
				
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Color options</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body center">
					<span class="gritter-add-white btn btn-default btn-block">Light</span>
					<span class="gritter-add-regular btn btn-inverse btn-block">Dark</span>
					<span class="gritter-add-primary btn btn-primary btn-block">Primary</span>
				</div>
			</div>
		</div>
		<!-- // Color Options Column END -->
		
		<!-- Other Examples Column -->
		<div class="span8">
			<div class="widget">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading">Other examples</h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body center">
					<span class="gritter-add-sticky btn btn-default btn-block btn-icon-stacked glyphicons right_arrow"><i></i><strong>Add sticky notification</strong><span>Has to be manually removed</span></span>
					<span class="gritter-add-without-image btn btn-default btn-block btn-icon glyphicons right_arrow"><i></i>Add notification without image</span>
					<span class="gritter-add-white btn btn-default btn-block btn-icon-stacked glyphicons right_arrow"><i></i><strong>Add white notification</strong><span>Has a "gritter-light" class applied</span></span>
					<span class="gritter-add-max btn btn-default btn-block btn-icon-stacked glyphicons right_arrow"><i></i><strong>Add notification with max. of 3</strong><span>Only if there are &lt;= 3 messages already on screen</span></span>
				</div>
			</div>
		</div>
		<!-- // Other Examples Column END -->
		
	</div>
	
	<!-- Code Sample Widget -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Creating a Regular Gritter</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
<pre class="prettyprint">
$.gritter.add({
	// (string | mandatory) the heading of the notification
	title: 'This is a regular notice!',
	// (string | mandatory) the text inside the notification
	text: 'This will fade out after a certain amount of time.',
	// (string | optional) the image to display on the left
	image: 'http://yourimage.url/image.png',
	// (bool | optional) if you want it to fade out on its own or just sit there
	sticky: false,
	// (int | optional) the time you want it to be alive for before fading out
	time: ''
});
</pre>
		</div>
	</div>
	<!-- // Code Sample Widget END -->
	
	<!-- Code Sample Widget -->
	<div class="widget">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Creating a Primary Gritter</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
<pre class="prettyprint">
$.gritter.add({
	title: 'This is a primary notice!',
	text: ' Lorem ipsum ...',
	image: 'your image URL goes here'
	<strong>class_name: 'gritter-primary'</strong>
});
</pre>
		</div>
	</div>
	<!-- // Code Sample Widget END -->

</div>