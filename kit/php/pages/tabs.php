<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('Tabs'); ?></li>
</ul>
<div class="separator bottom"></div>
<!-- // Breadcrumb END -->

<!-- Heading -->
<div class="heading-buttons">
	<h3><?php echo $translate->_('Tabs'); ?> <span>| in 6 awesome styles</span></h3>
	<div class="buttons pull-right">
		<a href="" class="btn btn-source-toggle btn-default btn-icon glyphicons embed_close"><i></i>View source toggle</a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->

<div class="innerLR">

	<!-- Tabs -->
	<div class="widget widget-tabs widget-tabs-double-2">
	
		<!-- Tabs Heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a class="glyphicons list" href="#tabAll" data-toggle="tab"><i></i><span>All topics</span></a></li>
				<li><a class="glyphicons user" href="#tabAccount" data-toggle="tab"><i></i><span>Account</span></a></li>
				<li><a class="glyphicons credit_card" href="#tabPayments" data-toggle="tab"><i></i><span>Payments</span></a></li>
				<li><a class="glyphicons cogwheel" href="#tabSupport" data-toggle="tab"><i></i><span>Technical Support</span></a></li>
				<li><a class="glyphicons snowflake" href="#tabFeatures" data-toggle="tab"><i></i><span>Features</span></a></li>
			</ul>
		</div>
		<!-- // Tabs Heading END -->
		
		<div class="widget-body">
			<div class="tab-content">
			
				<!-- Tab content -->
				<div id="tabAll" class="tab-pane active widget-body-regular">
					<h5>All topics tab content</h5>
					<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec id eros a orci adipiscing accumsan id eget sem. Etiam sit amet neque ligula, ac hendrerit metus. Phasellus convallis nulla nec leo dapibus sed feugiat felis feugiat. Nulla facilisi. Mauris quis tortor eu eros posuere tristique. In turpis leo, iaculis eget tincidunt in, gravida sit amet diam. Vivamus viverra, nisl vitae consectetur volutpat, ipsum risus tempor augue, in convallis leo massa in sem. Maecenas in urna quis purus pulvinar posuere. Fusce blandit viverra placerat. Fusce elementum turpis sed velit blandit elementum.</p>
				</div>
				<!-- // Tab content END -->
			
				<!-- Tab content -->
				<div id="tabAccount" class="tab-pane widget-body-regular">
					<h5>Account tab content</h5>
					<p>Donec at nunc dui. Integer eget sem sit amet arcu bibendum elementum vel sit amet risus. Fusce libero lorem, fermentum vitae lacinia dapibus, vestibulum ac enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum accumsan risus sed lorem tincidunt eget faucibus sapien tempor. Proin ac feugiat dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div id="tabPayments" class="tab-pane widget-body-regular">
					<h5>Payments tab content</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ante est, tempor ut posuere nec, venenatis sed arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis in purus ut mauris sodales sollicitudin. Mauris cursus imperdiet dignissim. Phasellus risus felis, rutrum in laoreet vel, posuere vel dolor. Sed venenatis vehicula tempus. Nam at rutrum enim. Sed massa quam, mattis in viverra ut, ullamcorper et massa. Phasellus sapien diam, faucibus ac tempor a, condimentum quis est. Donec nec velit ante, vel mattis metus. Ut nec libero diam, id auctor sapien. Suspendisse eget lorem ante, in fringilla dui. In hac habitasse platea dictumst.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div id="tabSupport" class="tab-pane widget-body-regular">
					<h5>Support tab content</h5>
					<p>Integer porttitor, enim eu egestas ullamcorper, odio mauris semper quam, in facilisis dui ligula eget ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas dolor leo, consectetur nec tristique pretium, ornare quis purus. Nullam pulvinar, enim eu molestie venenatis, turpis nisl vehicula eros, et ultricies risus urna sed diam. Suspendisse potenti. Nullam tincidunt tellus nisi. Aenean felis eros, congue vitae hendrerit id, mattis quis mi.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div id="tabFeatures" class="tab-pane widget-body-regular">
					<h5>Features tab content</h5>
					<p>Nunc aliquet lacus laoreet odio consectetur tempus. In id nisl diam, congue vehicula sapien. Nulla facilisi. Donec sagittis cursus sollicitudin. Aenean leo tellus, eleifend quis facilisis vel, tempus ac elit. Nam eget turpis nec erat vestibulum fringilla. Donec et felis ipsum. Fusce feugiat ultricies lacus a ultrices. Nunc ultrices, orci ut convallis pulvinar, diam nunc tincidunt augue, sit amet lacinia ante mi a augue. Sed feugiat, neque eget porttitor varius, tellus nisi sollicitudin libero, nec aliquam ante dui gravida ipsum. Fusce cursus rhoncus lectus, quis malesuada sapien facilisis eu. Aenean vitae massa sed urna condimentum porttitor ac at risus.</p>
				</div>
				<!-- // Tab content END -->
				
			</div>
		</div>
		<span class="btn btn-toggle-code btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-6"><i></i> Source</span>
	</div>
	<!-- // Tabs END -->
	
<!-- Code sample -->
<div class="code hide" id="code-6">
<pre class="prettyprint lang-html">
&lt;div class="widget widget-tabs widget-tabs-double-2"&gt;
	&lt;div class="widget-head"&gt;
		&lt;ul&gt;
			&lt;li class="active"&gt;&lt;a class="glyphicons list" href="#tabAll" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span&gt;All topics&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a class="glyphicons user" href="#tabAccount" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span&gt;Account&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a class="glyphicons credit_card" href="#tabPayments" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span&gt;Payments&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a class="glyphicons cogwheel" href="#tabSupport" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span&gt;Technical Support&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a class="glyphicons snowflake" href="#tabFeatures" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span&gt;Features&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	&lt;div class="widget-body"&gt;
		&lt;div class="tab-content"&gt;
			&lt;div id="tabAll" class="tab-pane active widget-body-regular"&gt;
				&lt;h5&gt;All topics tab content&lt;/h5&gt;
				&lt;p&gt;Class aptent taciti sociosqu ad litora ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="tabAccount" class="tab-pane widget-body-regular"&gt;
				&lt;h5&gt;Account tab content&lt;/h5&gt;
				&lt;p&gt;Donec at nunc dui. Integer eget sem sit amet arcu ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="tabPayments" class="tab-pane widget-body-regular"&gt;
				&lt;h5&gt;Payments tab content&lt;/h5&gt;
				&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="tabSupport" class="tab-pane widget-body-regular"&gt;
				&lt;h5&gt;Support tab content&lt;/h5&gt;
				&lt;p&gt;Integer porttitor, enim eu egestas ullamcorper ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="tabFeatures" class="tab-pane widget-body-regular"&gt;
				&lt;h5&gt;Features tab content&lt;/h5&gt;
				&lt;p&gt;Nunc aliquet lacus laoreet odio consectetur tempus ...&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- // Code sample END -->
	
	<!-- Tabs -->
	<div class="box-generic">
	
		<!-- Tabs Heading -->
		<div class="tabsbar">
			<ul>
				<li class="glyphicons camera active"><a href="#tab1-3" data-toggle="tab"><i></i> View all photos <strong>(43)</strong></a></li>
				<li class="glyphicons folder_open"><a href="#tab2-3" data-toggle="tab"><i></i> Albums <strong>(3)</strong></a></li>
				<li class="glyphicons circle_plus tab-stacked"><a href="#tab3-3" data-toggle="tab"><i></i> <span>Add Photos</span></a></li>
				<li class="glyphicons folder_plus tab-stacked"><a href="#tab4-3" data-toggle="tab"><i></i> <span>Create Album</span></a></li>
			</ul>
		</div>
		<!-- // Tabs Heading END -->
		
		<div class="tab-content">
				
			<!-- Tab content -->
			<div class="tab-pane active" id="tab1-3">
				<h4>First tab</h4>
				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
			</div>
			<!-- // Tab content END -->
			
			<!-- Tab content -->
			<div class="tab-pane" id="tab2-3">
				<h4>Second tab</h4>
				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
			</div>
			<!-- // Tab content END -->
			
			<!-- Tab content -->
			<div class="tab-pane" id="tab3-3">
				<h4>Third tab</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
			</div>
			<!-- // Tab content END -->
			
			<!-- Tab content -->
			<div class="tab-pane" id="tab4-3">
				<h4>Fourth tab</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
			</div>
			<!-- // Tab content END -->
			
		</div>
		<span class="btn btn-toggle-code btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-4"><i></i> Source</span>
	</div>
	<div class="separator bottom"></div>
	<!-- // Tabs END -->
	
<!-- Code sample -->
<div class="code hide" id="code-4">
<pre class="prettyprint lang-html">
&lt;div class="tabsbar"&gt;
	&lt;ul&gt;
		&lt;li class="glyphicons camera active"&gt;&lt;a href="#tab1-3" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt; View all photos &lt;strong&gt;(43)&lt;/strong&gt;&lt;/a&gt;&lt;/li&gt;
		&lt;li class="glyphicons folder_open"&gt;&lt;a href="#tab2-3" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt; Albums &lt;strong&gt;(3)&lt;/strong&gt;&lt;/a&gt;&lt;/li&gt;
		&lt;li class="glyphicons circle_plus"&gt;&lt;a href="#tab3-3" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt; &lt;span&gt;Add Photos&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
		&lt;li class="glyphicons folder_plus"&gt;&lt;a href="#tab4-3" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt; &lt;span&gt;Create Album&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
&lt;div class="tab-content"&gt;
	&lt;div class="tab-pane active" id="tab1-3"&gt;
		&lt;h4&gt;First tab&lt;/h4&gt;
		&lt;p&gt;Anim pariatur cliche reprehenderit ...&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class="tab-pane" id="tab2-3"&gt;
		&lt;h4&gt;Second tab&lt;/h4&gt;
		&lt;p&gt;Anim pariatur cliche reprehenderit ...&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class="tab-pane" id="tab3-3"&gt;
		&lt;h4&gt;Third tab&lt;/h4&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet ...&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class="tab-pane" id="tab4-3"&gt;
		&lt;h4&gt;Fourth tab&lt;/h4&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet ...&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- // Code sample END -->
	
	<!-- Tabs -->
	<div class="box-generic">
	
		<!-- Tabs Heading -->
		<div class="tabsbar tabsbar-2">
			<ul class="row-fluid row-merge">
				<li class="span3 glyphicons cargo active"><a href="#tab1-4" data-toggle="tab"><i></i> Product Listing</a></li>
				<li class="span3 glyphicons circle_info"><a href="#tab2-4" data-toggle="tab"><i></i> <span>Product Details</span></a></li>
				<li class="span3 glyphicons cart_in"><a href="#tab3-4" data-toggle="tab"><i></i> <span>Shopping Cart</span></a></li>
				<li class="span3 glyphicons pencil"><a href="#tab4-4" data-toggle="tab"><i></i> <span>Shop Management</span></a></li>
			</ul>
		</div>
		<!-- // Tabs Heading END -->
		
		<div class="tab-content">
				
			<!-- Tab content -->
			<div class="tab-pane active" id="tab1-4">
				<h4>First tab</h4>
				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
			</div>
			<!-- // Tab content END -->
			
			<!-- Tab content -->
			<div class="tab-pane" id="tab2-4">
				<h4>Second tab</h4>
				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
			</div>
			<!-- // Tab content END -->
			
			<!-- Tab content -->
			<div class="tab-pane" id="tab3-4">
				<h4>Third tab</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
			</div>
			<!-- // Tab content END -->
			
			<!-- Tab content -->
			<div class="tab-pane" id="tab4-4">
				<h4>Fourth tab</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
			</div>
			<!-- // Tab content END -->
			
		</div>
		<span class="btn btn-toggle-code btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-5"><i></i> Source</span>
	</div>
	<div class="separator bottom"></div>
	<!-- // Tabs END -->
	
<!-- Code sample -->
<div class="code hide" id="code-5">
<pre class="prettyprint lang-html">
&lt;div class="tabsbar tabsbar-2"&gt;
	&lt;ul class="row-fluid row-merge"&gt;
		&lt;li class="span3 glyphicons cargo active"&gt;&lt;a href="#tab1-4" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt; Product Listing&lt;/a&gt;&lt;/li&gt;
		&lt;li class="span3 glyphicons circle_info"&gt;&lt;a href="#tab2-4" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt; Product Details&lt;/a&gt;&lt;/li&gt;
		&lt;li class="span3 glyphicons cart_in"&gt;&lt;a href="#tab3-4" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt; Shopping Cart&lt;/a&gt;&lt;/li&gt;
		&lt;li class="span3 glyphicons pencil"&gt;&lt;a href="#tab4-4" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt; Shop Management&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
&lt;div class="tab-content"&gt;
	&lt;div class="tab-pane active" id="tab1-4"&gt;
		&lt;h4&gt;First tab&lt;/h4&gt;
		&lt;p&gt;Anim pariatur cliche reprehenderit ...&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class="tab-pane" id="tab2-4"&gt;
		&lt;h4&gt;Second tab&lt;/h4&gt;
		&lt;p&gt;Anim pariatur cliche reprehenderit ...&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class="tab-pane" id="tab3-4"&gt;
		&lt;h4&gt;Third tab&lt;/h4&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet ...&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class="tab-pane" id="tab4-4"&gt;
		&lt;h4&gt;Fourth tab&lt;/h4&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet ...&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- // Code sample END -->

	<!-- Tabs -->
	<div class="widget widget-tabs">
	
		<!-- Tabs Heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a class="glyphicons coffe_cup" href="#tab-1" data-toggle="tab"><i></i>Active tab</a></li>
				<li><a class="glyphicons share_alt" href="#tab-2" data-toggle="tab"><i></i>Other tab</a></li>
			</ul>
		</div>
		<!-- // Tabs Heading END -->
		
		<div class="widget-body">
			<div class="tab-content">
			
				<!-- Tab content -->
				<div class="tab-pane active" id="tab-1">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab-2">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
				</div>
				<!-- // Tab content END -->
				
			</div>
		</div>
		<span class="btn btn-toggle-code btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-1"><i></i> Source</span>
	</div>
	<!-- // Tabs END -->

<!-- Code sample -->
<div class="code hide" id="code-1">
<pre class="prettyprint lang-html">
&lt;div class="widget widget-tabs"&gt;
	&lt;div class="widget-head"&gt;
		&lt;ul&gt;
			&lt;li class="active"&gt;&lt;a class="glyphicons coffe_cup" href="#tab-1" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt; Active tab&lt;/li&gt;
			&lt;li&gt;&lt;a class="glyphicons share_alt" href="#tab-2" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt; Other tab&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	&lt;div class="widget-body"&gt;
		&lt;div class="tab-content"&gt;
			&lt;div class="tab-pane active" id="tab-1"&gt;
				&lt;p>Anim pariatur cliche reprehenderit ... &lt;/p&gt;
			&lt;/div&gt;
			&lt;div class="tab-pane" id="tab-2"&gt;
				&lt;p>Anim pariatur cliche reprehenderit ... &lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- // Code sample END -->

	<!-- Tabs -->
	<div class="widget widget-tabs widget-tabs-double widget-tabs-vertical row-fluid row-merge">
	
		<!-- Tabs Heading -->
		<div class="widget-head span3">
			<ul>
				<li class="active"><a href="#tab1-1" class="glyphicons user" data-toggle="tab"><i></i><span class="strong">Step 1</span><span>Personal details</span></a></li>
				<li><a href="#tab2-1" class="glyphicons calculator" data-toggle="tab"><i></i><span class="strong">Step 2</span><span>Billing details</span></a></li>
				<li><a href="#tab3-1" class="glyphicons credit_card" data-toggle="tab"><i></i><span class="strong">Step 3</span><span>Payment</span></a></li>
				<li><a href="#tab4-1" class="glyphicons circle_ok" data-toggle="tab"><i></i><span class="strong">Step 4</span><span>Confirmation</span></a></li>
			</ul>
		</div>
		<!-- // Tabs Heading END -->
		
		<div class="widget-body span9">
			<div class="tab-content">
			
				<!-- Tab content -->
				<div class="tab-pane active" id="tab1-1">
					<h4>First tab</h4>
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab2-1">
					<h4>Second tab</h4>
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab3-1">
					<h4>Third tab</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab4-1">
					<h4>Fourth tab</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
				</div>
				<!-- // Tab content END -->
				
			</div>
			
		</div>
		<span class="btn btn-toggle-code btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-2"><i></i> Source</span>
	</div>
	<!-- // Tabs END -->
	
<!-- Code sample -->
<div class="code hide" id="code-2">
<pre class="prettyprint lang-html">
&lt;div class="widget widget-tabs widget-tabs-double widget-tabs-vertical row-fluid row-merge"&gt;
	&lt;div class="widget-head span3"&gt;
		&lt;ul&gt;
			&lt;li class="active"&gt;&lt;a href="#tab1-1" class="glyphicons user" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span class="strong"&gt;Step 1&lt;/span&gt;&lt;span&gt;Personal details&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#tab2-1" class="glyphicons calculator" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span class="strong"&gt;Step 2&lt;/span&gt;&lt;span&gt;Billing details&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#tab3-1" class="glyphicons credit_card" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span class="strong"&gt;Step 3&lt;/span&gt;&lt;span&gt;Payment&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#tab4-1" class="glyphicons circle_ok" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span class="strong"&gt;Step 4&lt;/span&gt;&lt;span&gt;Confirmation&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	&lt;div class="widget-body span9"&gt;
		&lt;div class="tab-content"&gt;
			&lt;div class="tab-pane active" id="tab1-1"&gt;
				&lt;h4&gt;First tab&lt;/h4&gt;
				&lt;p&gt;Anim pariatur cliche reprehenderit ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div class="tab-pane" id="tab2-1"&gt;
				&lt;h4&gt;Second tab&lt;/h4&gt;
				&lt;p&gt;Anim pariatur cliche reprehenderit ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div class="tab-pane" id="tab3-1"&gt;
				&lt;h4&gt;Third tab&lt;/h4&gt;
				&lt;p&gt;Lorem ipsum dolor sit amet ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div class="tab-pane" id="tab4-1"&gt;
				&lt;h4&gt;Fourth tab&lt;/h4&gt;
				&lt;p&gt;Lorem ipsum dolor sit amet ...&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- // Code sample END -->
	
	<!-- Tabs -->
	<div class="widget widget-tabs widget-tabs-double">
	
		<!-- Tabs Heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a href="#tab1-2" class="glyphicons user" data-toggle="tab"><i></i><span class="strong">Step 1</span><span>Personal details</span></a></li>
				<li><a href="#tab2-2" class="glyphicons calculator" data-toggle="tab"><i></i><span class="strong">Step 2</span><span>Billing details</span></a></li>
				<li><a href="#tab3-2" class="glyphicons credit_card" data-toggle="tab"><i></i><span class="strong">Step 3</span><span>Payment</span></a></li>
				<li><a href="#tab4-2" class="glyphicons circle_ok" data-toggle="tab"><i></i><span class="strong">Step 4</span><span>Confirmation</span></a></li>
			</ul>
		</div>
		<!-- // Tabs Heading END -->
		
		<div class="widget-body">
			<div class="tab-content">
			
				<!-- Tab content -->
				<div class="tab-pane active" id="tab1-2">
					<h4>First tab</h4>
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab2-2">
					<h4>Second tab</h4>
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab3-2">
					<h4>Third tab</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div class="tab-pane" id="tab4-2">
					<h4>Fourth tab</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
				</div>
				<!-- // Tab content END -->
				
			</div>
			
		</div>
		<span class="btn btn-toggle-code btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-3"><i></i> Source</span>
	</div>
	<!-- // Tabs END -->
	
<!-- Code sample -->
<div class="code hide" id="code-3">
<pre class="prettyprint lang-html">
&lt;div class="widget widget-tabs widget-tabs-double"&gt;
	&lt;div class="widget-head"&gt;
		&lt;ul&gt;
			&lt;li class="active"&gt;&lt;a href="#tab1-2" class="glyphicons user" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span class="strong"&gt;Step 1&lt;/span&gt;&lt;span&gt;Personal details&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#tab2-2" class="glyphicons calculator" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span class="strong"&gt;Step 2&lt;/span&gt;&lt;span&gt;Billing details&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#tab3-2" class="glyphicons credit_card" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span class="strong"&gt;Step 3&lt;/span&gt;&lt;span&gt;Payment&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#tab4-2" class="glyphicons circle_ok" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;&lt;span class="strong"&gt;Step 4&lt;/span&gt;&lt;span&gt;Confirmation&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	&lt;div class="widget-body"&gt;
		&lt;div class="tab-content"&gt;
			&lt;div class="tab-pane active" id="tab1-2"&gt;
				&lt;h4&gt;First tab&lt;/h4&gt;
				&lt;p&gt;Anim pariatur cliche reprehenderit ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div class="tab-pane" id="tab2-2"&gt;
				&lt;h4&gt;Second tab&lt;/h4&gt;
				&lt;p&gt;Anim pariatur cliche reprehenderit ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div class="tab-pane" id="tab3-2"&gt;
				&lt;h4&gt;Third tab&lt;/h4&gt;
				&lt;p&gt;Lorem ipsum dolor sit amet ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div class="tab-pane" id="tab4-2"&gt;
				&lt;h4&gt;Fourth tab&lt;/h4&gt;
				&lt;p&gt;Lorem ipsum dolor sit amet ...&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- // Code sample END -->

	<!-- Icon-only Tabs -->
	<div class="widget widget-4 widget-tabs-icons-only margin-bottom-none">
	
		<!-- Widget Heading -->
		<div class="widget-head">
			<h4 class="heading">Tabs from Icons <span>400+ Premium Icons to choose from</span></h4>
			
			<!-- Tabs -->
			<ul class="pull-right">
				<li>Filter by</li>
				<li class="glyphicons user_add active"><span data-toggle="tab" data-target="#tab1-5"><i></i></span></li>
				<li class="glyphicons shopping_cart"><span data-toggle="tab" data-target="#tab2-5"><i></i></span></li>
				<li class="glyphicons envelope"><span data-toggle="tab" data-target="#tab3-5"><i></i></span></li>
				<li class="glyphicons link"><span data-toggle="tab" data-target="#tab4-5"><i></i></span></li>
				<li class="glyphicons camera"><span data-toggle="tab" data-target="#tab5-5"><i></i></span></li>
			</ul>
			<div class="clearfix"></div>
			<!-- // Tabs END -->
			
		</div>
		<!-- Widget Heading END -->
		
		<div class="widget-body">
			<div class="tab-content">
			
				<!-- Tab content -->
				<div id="tab1-5" class="tab-pane active box-generic">
					<h4>Tab #1 content heading</h4>
					<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec id eros a orci adipiscing accumsan id eget sem. Etiam sit amet neque ligula, ac hendrerit metus. Phasellus convallis nulla nec leo dapibus sed feugiat felis feugiat. Nulla facilisi. Mauris quis tortor eu eros posuere tristique. In turpis leo, iaculis eget tincidunt in, gravida sit amet diam. Vivamus viverra, nisl vitae consectetur volutpat, ipsum risus tempor augue, in convallis leo massa in sem. Maecenas in urna quis purus pulvinar posuere. Fusce blandit viverra placerat. Fusce elementum turpis sed velit blandit elementum.</p>
				</div>
				<!-- // Tab content END -->
			
				<!-- Tab content -->
				<div id="tab2-5" class="tab-pane box-generic">
					<h4>Tab #2 content heading</h4>
					<p>Donec at nunc dui. Integer eget sem sit amet arcu bibendum elementum vel sit amet risus. Fusce libero lorem, fermentum vitae lacinia dapibus, vestibulum ac enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum accumsan risus sed lorem tincidunt eget faucibus sapien tempor. Proin ac feugiat dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div id="tab3-5" class="tab-pane box-generic">
					<h4>Tab #3 content heading</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ante est, tempor ut posuere nec, venenatis sed arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis in purus ut mauris sodales sollicitudin. Mauris cursus imperdiet dignissim. Phasellus risus felis, rutrum in laoreet vel, posuere vel dolor. Sed venenatis vehicula tempus. Nam at rutrum enim. Sed massa quam, mattis in viverra ut, ullamcorper et massa. Phasellus sapien diam, faucibus ac tempor a, condimentum quis est. Donec nec velit ante, vel mattis metus. Ut nec libero diam, id auctor sapien. Suspendisse eget lorem ante, in fringilla dui. In hac habitasse platea dictumst.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div id="tab4-5" class="tab-pane box-generic">
					<h4>Tab #4 content heading</h4>
					<p>Integer porttitor, enim eu egestas ullamcorper, odio mauris semper quam, in facilisis dui ligula eget ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas dolor leo, consectetur nec tristique pretium, ornare quis purus. Nullam pulvinar, enim eu molestie venenatis, turpis nisl vehicula eros, et ultricies risus urna sed diam. Suspendisse potenti. Nullam tincidunt tellus nisi. Aenean felis eros, congue vitae hendrerit id, mattis quis mi.</p>
				</div>
				<!-- // Tab content END -->
				
				<!-- Tab content -->
				<div id="tab5-5" class="tab-pane box-generic">
					<h4>Tab #5 content heading</h4>
					<p>Nunc aliquet lacus laoreet odio consectetur tempus. In id nisl diam, congue vehicula sapien. Nulla facilisi. Donec sagittis cursus sollicitudin. Aenean leo tellus, eleifend quis facilisis vel, tempus ac elit. Nam eget turpis nec erat vestibulum fringilla. Donec et felis ipsum. Fusce feugiat ultricies lacus a ultrices. Nunc ultrices, orci ut convallis pulvinar, diam nunc tincidunt augue, sit amet lacinia ante mi a augue. Sed feugiat, neque eget porttitor varius, tellus nisi sollicitudin libero, nec aliquam ante dui gravida ipsum. Fusce cursus rhoncus lectus, quis malesuada sapien facilisis eu. Aenean vitae massa sed urna condimentum porttitor ac at risus.</p>
				</div>
				<!-- // Tab content END -->
			
			</div>
			<span class="btn btn-toggle-code btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-7"><i></i> Source</span>
		</div>
	</div>
	<!-- // Icon-only Tabs END -->
	
<!-- Code sample -->
<div class="code hide" id="code-7">
<div class="separator bottom"></div>
<pre class="prettyprint lang-html margin-bottom-none">
&lt;div class="widget widget-4 widget-tabs-icons-only"&gt;
	&lt;div class="widget-head"&gt;
		&lt;h4 class="heading"&gt;Heading&lt;/h4&gt;
		&lt;ul class="pull-right"&gt;
			&lt;li&gt;Filter by&lt;/li&gt;
			&lt;li class="glyphicons user_add active"&gt;&lt;span data-toggle="tab" data-target="#tab1-5"&gt;&lt;i&gt;&lt;/i&gt;&lt;/span&gt;&lt;/li&gt;
			&lt;li class="glyphicons shopping_cart"&gt;&lt;span data-toggle="tab" data-target="#tab2-5"&gt;&lt;i&gt;&lt;/i&gt;&lt;/span&gt;&lt;/li&gt;
			&lt;li class="glyphicons envelope"&gt;&lt;span data-toggle="tab" data-target="#tab3-5"&gt;&lt;i&gt;&lt;/i&gt;&lt;/span&gt;&lt;/li&gt;
			&lt;li class="glyphicons link"&gt;&lt;span data-toggle="tab" data-target="#tab4-5"&gt;&lt;i&gt;&lt;/i&gt;&lt;/span&gt;&lt;/li&gt;
			&lt;li class="glyphicons camera"&gt;&lt;span data-toggle="tab" data-target="#tab5-5"&gt;&lt;i&gt;&lt;/i&gt;&lt;/span&gt;&lt;/li&gt;
		&lt;/ul&gt;
		&lt;div class="clearfix"&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="widget-body"&gt;
		&lt;div class="tab-content"&gt;
			&lt;div id="tab1-5" class="tab-pane active box-generic"&gt;
				&lt;h4&gt;Tab #1 content heading&lt;/h4&gt;
				&lt;p&gt;Class aptent taciti sociosqu ad ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="tab2-5" class="tab-pane box-generic"&gt;
				&lt;h4&gt;Tab #2 content heading&lt;/h4&gt;
				&lt;p&gt;Donec at nunc dui. Integer eget ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="tab3-5" class="tab-pane box-generic"&gt;
				&lt;h4&gt;Tab #3 content heading&lt;/h4&gt;
				&lt;p&gt;Lorem ipsum dolor sit amet ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="tab4-5" class="tab-pane box-generic"&gt;
				&lt;h4&gt;Tab #4 content heading&lt;/h4&gt;
				&lt;p&gt;Integer porttitor, enim eu egestas ...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="tab5-5" class="tab-pane box-generic"&gt;
				&lt;h4&gt;Tab #5 content heading&lt;/h4&gt;
				&lt;p&gt;Nunc aliquet lacus laoreet odio ...&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- // Code sample END -->
	
</div>