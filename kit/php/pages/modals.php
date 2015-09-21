<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('modals'); ?></li>
</ul>
<!-- // Breadcrumb END -->

<h3 class="heading-mosaic">Modals</h3>
<div class="innerLR">

	<!-- Modal inline -->
	<div class="modal" style="position: relative; top: auto; left: auto; right: auto; margin: 0 auto; z-index: 1; max-width: 100%;">
	
		<!-- Modal heading -->
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Modal header</h3>
		</div>
		<!-- // Modal heading END -->
		
		<!-- Modal body -->
		<div class="modal-body">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>
		<!-- // Modal body END -->
		
		<!-- Modal footer -->
		<div class="modal-footer">
			<a href="#" class="btn btn-default">Just a button</a> 
			<a href="#modal-simple" data-toggle="modal" class="btn btn-primary">Open Live Modal</a>
		</div>
		<!-- // Modal footer END -->
		
	</div>
	<div class="separator bottom"></div>
	<!-- // Modal inline END -->

<!-- Code sample -->
<pre class="prettyprint">
&lt;div class="modal hide fade"&gt;
  &lt;div class="modal-header"&gt;
    &lt;button type="button" class="close" data-dismiss="modal" aria-hidden="true"&gt;&times;&lt;/button&gt;
    &lt;h3>Modal header&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="modal-body"&gt;
    &lt;p>One fine body ...&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="modal-footer"&gt;
    &lt;a href="#" class="btn btn-default"&gt;Close&lt;/a&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Save changes&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
<!-- // Code sample END -->

	<h3>BootBox <span>Manage modals with JavaScript API</span></h3>
	
	<!-- BootBox Options -->
	<table class="table table-bordered table-vertical-center table-striped">
		<tbody>
			<tr>
				<td class="center"><button id="modals-bootbox-alert" class="btn btn-primary btn-block">Alert</button></td>
				<td class="center"><button id="modals-bootbox-confirm" class="btn btn-primary btn-block">Confirm</button></td>
				<td class="center"><button id="modals-bootbox-prompt" class="btn btn-primary btn-block">Prompt</button></td>
				<td class="center"><button id="modals-bootbox-custom" class="btn btn-primary btn-block">Custom Dialog</button></td>
			</tr>
		</tbody>
	</table>
	<div class="separator bottom"></div>
	<!-- // BootBox Options END -->
	
	<!-- Code sample -->
	<div class="widget">
		<div class="widget-head"><h4 class="heading">Alert</h4></div>
		<div class="widget-body">
<pre class="prettyprint">
bootbox.alert("Hello World!", function(result) 
{
	$.gritter.add({
		title: 'Callback!',
		text: "I'm just a BootBox Alert callback!"
	});
});
</pre>
		</div>
	</div>
	<!-- // Code sample END -->

	<!-- Code sample -->
	<div class="widget">
		<div class="widget-head"><h4 class="heading">Confirm</h4></div>
		<div class="widget-body">
<pre class="prettyprint">
bootbox.confirm("Are you sure?", function(result) 
{
	$.gritter.add({
		title: 'Callback!',
		text: "BootBox Confirm Callback with result: "+ result
	});
});
</pre>
		</div>
	</div>
	<!-- // Code sample END -->

	<!-- Code sample -->
	<div class="widget">
		<div class="widget-head"><h4 class="heading">Prompt</h4></div>
		<div class="widget-body">
<pre class="prettyprint">
bootbox.prompt("What is your name?", function(result) 
{                
	if (result === null) {                                             
		$.gritter.add({
			title: 'Callback!',
			text: "BootBox Prompt Dismissed!"
		});                            
	} else {
		$.gritter.add({
			title: 'Hi ' + result,
			text: "BootBox Prompt Callback with result: "+ result
		});                          
	}
});
</pre>
		</div>
	</div>
	<!-- // Code sample END -->

	<!-- Code sample -->
	<div class="widget">
		<div class="widget-head"><h4 class="heading">Custom Dialog</h4></div>
		<div class="widget-body">
<pre class="prettyprint">
bootbox.dialog("I am a custom dialog", [{
	"label" : "Success!",
	"class" : "btn-success",
	"callback": function() {
		$.gritter.add({
			title: 'Callback!',
			text: "Great success"
		});
	}
}, {
	"label" : "Danger!",
	"class" : "btn-danger",
	"callback": function() {
		$.gritter.add({
			title: 'Callback!',
			text: "Uh oh, look out!"
		});
	}
}, {
	"label" : "Click ME!",
	"class" : "btn-primary",
	"callback": function() {
		$.gritter.add({
			title: 'Callback!',
			text: "Primary button!"
		});
	}
}, {
	"label" : "Just a button..."
}]);
</pre>
		</div>
	</div>
	<!-- // Code sample END -->
	
</div>

<!-- Modal -->
<div class="modal hide fade" id="modal-simple">
	
	<!-- Modal heading -->
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Modal header</h3>
	</div>
	<!-- // Modal heading END -->
	
	<!-- Modal body -->
	<div class="modal-body">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	</div>
	<!-- // Modal body END -->
	
	<!-- Modal footer -->
	<div class="modal-footer">
		<a href="#" class="btn btn-default" data-dismiss="modal">Close</a> 
		<a href="#" data-dismiss="modal" class="btn btn-primary">Save changes</a>
	</div>
	<!-- // Modal footer END -->
	
</div>
<!-- // Modal END -->