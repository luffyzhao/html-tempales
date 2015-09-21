<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('Widgets'); ?></li>
</ul>
<div class="separator bottom"></div>
<!-- // Breadcrumb END -->

<!-- Heading -->
<div class="heading-buttons">
	<h3><?php echo $translate->_('Widgets'); ?></h3>
	<div class="buttons pull-right">
		<a href="" class="btn btn-source-toggle btn-default btn-icon glyphicons embed_close"><i></i>View source toggle</a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->

<div class="innerLR">
	<div class="row-fluid">
		<div class="span6">
			
			<!-- Widget -->
			<div class="widget">
				<div class="widget-head"><h4 class="heading">Widget</h4></div>
				<div class="widget-body">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
				</div>
				<span class="btn btn-toggle-code btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-1"><i></i> Source</span>
			</div>
			<!-- // Widget END -->
			
<!-- Widget Code Sample -->
<div class="code hide" id="code-1">
<pre class="prettyprint lang-html">
&lt;div class="widget"&gt;
	&lt;div class="widget-head"&gt;&lt;h4 class="heading"&gt;Widget&lt;/h4&gt;&lt;/div&gt;
	&lt;div class="widget-body"&gt;
		&lt;p&gt;Anim pariatur cliche reprehenderit ... &lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- // Widget Code Sample END -->
			
			<!-- Widget With Progress Bar -->
			<div class="widget">
				<div class="widget-head progress progress-primary" id="widget-progress-bar">
					<div class="bar">Lorem ipsum <strong>dolor</strong> - <strong class="steps-percent">100%</strong></div>
				</div>
				<div class="widget-body">
					<h4>Progress Widget</h4>
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
				</div>
				<span class="btn btn-toggle-code btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-2"><i></i> Source</span>
			</div>
			<!-- // Widget With Progress Bar END -->
			
<!-- Widget With Progress Bar Code Sample -->
<div class="code hide" id="code-2">
<pre class="prettyprint lang-html">
&lt;div class="widget"&gt;
	&lt;div class="widget-head progress progress-primary" id="widget-progress-bar"&gt;
		&lt;div class="bar"&gt;Lorem ipsum &lt;strong&gt;dolor&lt;/strong&gt; - 
		&lt;strong class="steps-percent"&gt;100%&lt;/strong&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="widget-body"&gt;
		&lt;h4&gt;Progress Widget&lt;/h4&gt;
		&lt;p&gt;Anim pariatur cliche reprehenderit ... &lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- // Widget With Progress Bar Code Sample END -->

			<!-- List Widget -->
			<div class="widget">
				<div class="widget-head">
					<h4 class="heading glyphicons history"><i></i>List Widget</h4>
					<a href="" class="details pull-right">link</a>
				</div>
				<div class="widget-body list">
					<ul>
						<li>
							<span>List item #1</span>
							<span class="count">&euro;5,900</span>
						</li>
						<li>
							<span>List item #2</span>
							<span class="count">36,900</span>
						</li>
					</ul>
				</div>
				<span class="btn btn-toggle-code outside scrollTarget btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-3"><i></i> Source</span>
			</div>
			<!-- // List Widget END -->

		</div>
		<div class="span6">
		
			<!-- Accordion Default -->
			<div class="accordion" id="accordion">
			
				<!-- Accordion Item -->
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
							Collapsible Accordions
						</a>
				    </div>
				    <div id="collapse-1" class="accordion-body collapse">
				      	<div class="accordion-inner">
				        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
				      	</div>
				    </div>
			  	</div>
			  	<!-- // Accordion Item END -->
			  	
			  	<!-- Accordion Item -->
			  	<div class="accordion-group">
				    <div class="accordion-heading">
				      	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">
				        	Collapsible Accordions
				      	</a>
				    </div>
				    <div id="collapse-2" class="accordion-body collapse">
				    	<div class="accordion-inner">
				        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
				      	</div>
				    </div>
			  	</div>
			  	<!-- // Accordion Item END -->
			  	
			  	<!-- Accordion Item -->
			  	<div class="accordion-group">
				    <div class="accordion-heading">
				      	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-3">
				        	Collapsible Accordions
				      	</a>
				    </div>
				    <div id="collapse-3" class="accordion-body collapse in">
				    	<div class="accordion-inner">
				        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.
				      	</div>
				    </div>
			  	</div>
			  	<!-- // Accordion Item END -->
			  	
			  	<span class="btn btn-toggle-code btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-4"><i></i> Source</span>
			</div>
			<!-- // Accordion Default END -->
			
<!-- Accordion Default Code Sample -->
<div class="code hide" id="code-4">
<pre class="prettyprint lang-html">
&lt;div class="accordion" id="accordion2"&gt;
	&lt;div class="accordion-group"&gt;
		&lt;div class="accordion-heading"&gt;
			&lt;a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"&gt;Collapsible Group Item #1&lt;/a&gt;
		&lt;/div&gt;
		&lt;div id="collapseOne" class="accordion-body collapse"&gt;
			&lt;div class="accordion-inner"&gt;Anim pariatur cliche ...&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
  	&lt;div class="accordion-group"&gt;
		&lt;div class="accordion-heading"&gt;
			&lt;a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"&gt;Active Item&lt;/a&gt;
		&lt;/div&gt;
		&lt;div id="collapseTwo" class="accordion-body collapse <strong>in</strong>"&gt; ... &lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- // Accordion Default Code Sample END -->

			<!-- Accordion #2 Style -->
			<div class="accordion accordion-2 margin-bottom-none" id="tabAccountAccordion">
			
				<span class="btn btn-toggle-code outside scrollTarget btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-5"><i></i> Source</span>
			
				<!-- Accordion Item -->
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-1-1">
							<i></i>Lorem ipsum dolor sit amet?
						</a>
				    </div>
				    <div id="collapse-1-1" class="accordion-body collapse in">
				      	<div class="accordion-inner">
				        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique rutrum libero, vel bibendum nunc consectetur sed.
				      	</div>
				    </div>
			  	</div>
			  	<!-- // Accordion Item END -->
			  	
			  	<!-- Accordion Item -->
			  	<div class="accordion-group">
				    <div class="accordion-heading">
				      	<a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-2-1">
				        	<i></i>Quisque porttitor elit ac mauris?
				      	</a>
				    </div>
				    <div id="collapse-2-1" class="accordion-body collapse">
				    	<div class="accordion-inner">
				        	Quisque porttitor elit ac mauris aliquam sollicitudin. Nam imperdiet ligula et dolor pulvinar consequat. Sed in turpis id erat vehicula gravida.
				      	</div>
				    </div>
			  	</div>
			  	<!-- // Accordion Item END -->
			  	
			  	<!-- Accordion Item -->
			  	<div class="accordion-group">
				    <div class="accordion-heading">
				      	<a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-3-1">
				        	<i></i>Vivamus eros tortor consequat sed?
				      	</a>
				    </div>
				    <div id="collapse-3-1" class="accordion-body collapse">
				    	<div class="accordion-inner">
				        	Vivamus eros tortor, consequat sed posuere non, tempus non ligula. Integer pharetra sem eu dolor rhoncus euismod.
				      	</div>
				    </div>
			  	</div>
			  	<!-- // Accordion Item END -->
			  	
			  	<!-- Accordion Item -->
			  	<div class="accordion-group">
				    <div class="accordion-heading">
				      	<a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-4-1">
				        	<i></i>Etiam suscipit leo tincidunt mi volutpat?
				      	</a>
				    </div>
				    <div id="collapse-4-1" class="accordion-body collapse">
				    	<div class="accordion-inner">
				        	Etiam suscipit leo tincidunt mi volutpat commodo. Morbi tempor interdum dictum. In hac habitasse platea dictumst.
				      	</div>
				    </div>
			  	</div>
			  	<!-- // Accordion Item END -->
			  	
			</div>
			<!-- // Accordion #2 Style END -->
			
		</div>
	</div>

<!-- List Widget Code Sample -->
<div class="code hide" id="code-3">
<div class="separator"></div>
<div class="box-generic">
<h4 class="heading-mosaic">List Widget Code Sample</h4>
<pre class="prettyprint lang-html">
&lt;div class="widget"&gt;
	&lt;div class="widget-head"&gt;
		&lt;h4 class="heading glyphicons history"&gt;&lt;i&gt;&lt;/i&gt;List Widget&lt;/h4&gt;
		&lt;a href="" class="details pull-right"&gt;link&lt;/a&gt;
	&lt;/div&gt;
	&lt;div class="widget-body list"&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;span&gt;List item #1&lt;/span&gt;&lt;span class="count"&gt;5,900&lt;/span&gt;&lt;/li&gt;
			&lt;li&gt;&lt;span&gt;List item #2&lt;/span&gt;&lt;span class="count"&gt;36,900&lt;/span&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
</div>
<div class="separator bottom"></div>
<!-- // List Widget Code Sample END -->

<!-- Accordion-2 Code Sample -->
<div class="code hide box-generic" id="code-5">
<h4 class="heading-mosaic">Accordion #2 Code Sample</h4>
<pre class="prettyprint">
&lt;div class="accordion accordion-2" id="tabAccountAccordion"&gt;
  	&lt;div class="accordion-group"&gt;
	    &lt;div class="accordion-heading"&gt;
	      	&lt;a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-1-1"&gt;&lt;i&gt;&lt;/i&gt;Lorem ipsum dolor sit amet?&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div id="collapse-1-1" class="accordion-body collapse in"&gt;
	      	&lt;div class="accordion-inner"&gt;Lorem ipsum dolor sit amet ...&lt;/div&gt;
	    &lt;/div&gt;
  	&lt;/div&gt;
  	&lt;div class="accordion-group"&gt;
	    &lt;div class="accordion-heading"&gt;
	      	&lt;a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-2-1"&gt;&lt;i&gt;&lt;/i&gt;Quisque porttitor elit ac mauris?&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div id="collapse-2-1" class="accordion-body collapse"&gt;
	    	&lt;div class="accordion-inner"&gt; ... &lt;/div&gt;
	    &lt;/div&gt;
  	&lt;/div&gt;
  	&lt;div class="accordion-group"&gt;
	    &lt;div class="accordion-heading"&gt;
	      	&lt;a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-3-1"&gt;&lt;i&gt;&lt;/i&gt;Vivamus eros tortor consequat sed?&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div id="collapse-3-1" class="accordion-body collapse"&gt;
	    	&lt;div class="accordion-inner"&gt; ... &lt;/div&gt;
	    &lt;/div&gt;
  	&lt;/div&gt;
  	&lt;div class="accordion-group"&gt;
	    &lt;div class="accordion-heading"&gt;
	      	&lt;a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-4-1"&gt;&lt;i&gt;&lt;/i&gt;Etiam suscipit leo tincidunt mi volutpat?&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div id="collapse-4-1" class="accordion-body collapse"&gt;
	    	&lt;div class="accordion-inner"&gt; ... &lt;/div&gt;
	    &lt;/div&gt;
  	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<div class="separator bottom"></div>
<!-- // Accordion-2 Code Sample END -->
	
	<!-- Stats Widgets -->
	<h3>Statistical Widgets <span>with over 400 icons!</span></h3>
	
	</div>
	<!-- // innerLR END -->
	
	<div class="row-fluid row-merge border-top border-bottom">
		<div class="span6">
		
		<!-- Inner -->
		<div class="innerAll">
		
			<!-- Row -->
			<div class="row-fluid">
				<div class="span3">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats">
						<span class="glyphicons shopping_cart"><i></i></span>
						<span class="txt">Sales</span>
						<div class="clearfix"></div>
						<span class="count label label-important">20</span>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				<div class="span3">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats">
						<span class="glyphicons shield"><i></i></span>
						<span class="txt">Alerts</span>
						<div class="clearfix"></div>
						<span class="count label">25</span>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				<div class="span3">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats">
						<span class="glyphicons user_add"><i></i></span>
						<span class="txt">Clients</span>
						<div class="clearfix"></div>
						<span class="count label label-warning">33</span>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				<div class="span3">
					
					<!-- Stats Widget -->
					<a href="" class="widget-stats">
						<span class="glyphicons camera"><i></i></span>
						<span class="txt">Photos</span>
						<div class="clearfix"></div>
						<span class="count label label-primary">238</span>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
			</div>
			<!-- // Row END -->
		
		</div>
		<!-- // Inner END -->
		
		</div>
		<div class="span6">
		
		<!-- Inner -->
		<div class="innerAll">
			
			<!-- Row -->
			<div class="row-fluid">
				<div class="span3">
					
					<!-- Stats Widget -->
					<a href="" class="widget-stats">
						<span class="glyphicons notes"><i></i></span>
						<span class="txt">Notes</span>
						<div class="clearfix"></div>
						<span class="count label label-primary">134</span>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				<div class="span3">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats">
						<span class="glyphicons snowflake"><i></i></span>
						<span class="txt">Snowflakes</span>
						<div class="clearfix"></div>
						<span class="count label label-primary">134</span>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				<div class="span3">
					
					<!-- Stats Widget -->
					<a href="" class="widget-stats">
						<span class="glyphicons car"><i></i></span>
						<span class="txt">Cars</span>
						<div class="clearfix"></div>
						<span class="count label label-primary">134</span>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				<div class="span3">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats">
						<span class="glyphicons truck"><i></i></span>
						<span class="txt">Trucks</span>
						<div class="clearfix"></div>
						<span class="count label label-primary">134</span>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				
			</div>
			<!-- // Row END -->
		
			<span class="btn btn-toggle-code scrollTarget btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-6"><i></i> Source</span>
		</div>
		<!-- // Inner END -->
		
		</div>
	</div>
	
	<div class="separator bottom"></div>
	
	<div class="row-fluid row-merge border-bottom">
		<div class="span6">
			<div class="innerAll">
				
				<!-- Row -->
				<div class="row-fluid">
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small">
							<span class="glyphicons shopping_cart"><i></i></span>
							<span class="count label label-primary">20</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small gray">
							<span class="glyphicons fishes"><i></i></span>
							<span class="count label label-primary">250</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small dark">
							<span class="glyphicons umbrella"><i></i></span>
							<span class="count label label-primary">238</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small primary">
							<span class="glyphicons user_add"><i></i></span>
							<span class="count label label-primary">134</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
					
				</div>
				<!-- // Row END -->
				
			</div>
		</div>
		<div class="span6">
			<div class="innerAll">
			
				<!-- Row -->
				<div class="row-fluid">
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small">
							<span class="glyphicons coins"><i></i></span>
							<span class="count label label-primary">20</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small">
							<span class="glyphicons note"><i></i></span>
							<span class="count label label-primary">250</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small">
							<span class="glyphicons coins"><i></i></span>
							<span class="count label label-primary">20</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small">
							<span class="glyphicons note"><i></i></span>
							<span class="count label label-primary">250</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
				</div>
				<!-- // Row END -->
			
			<span class="btn btn-toggle-code scrollTarget btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-6"><i></i> Source</span>
			</div>
		</div>
	</div>
	
	<div class="separator bottom"></div>
	
	<div class="row-fluid row-merge border-bottom">
		<div class="span6">
		
		<!-- Inner -->
		<div class="innerAll">
		
			<!-- Row -->
			<div class="row-fluid">
				<div class="span4">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats widget-stats-2">
						<span class="sparkline"></span>
						<span class="txt"><span class="count">2,566</span> Sales</span>
						<div class="clearfix"></div>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				<div class="span4">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats widget-stats-2 widget-stats-3">
						<span class="sparkline success"></span>
						<span class="txt"><span class="count">12,566</span> Photos</span>
						<div class="clearfix"></div>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				<div class="span4">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats widget-stats-2 widget-stats-3">
						<span class="sparkline danger"></span>
						<span class="txt"><span class="count">12,566</span> Photos</span>
						<div class="clearfix"></div>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
			</div>
			<!-- // Row END -->
		
		</div>
		<!-- // Inner END -->
		
		</div>
		<div class="span6">
		
		<!-- Inner -->
		<div class="innerAll">
			
			<!-- Row -->
			<div class="row-fluid">
				<div class="span3">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie">
						<div data-percent="75" class="easy-pie"><span class="value">75</span>%</div>
						<span class="txt"><span class="count">2,566</span> Sales</span>
						<div class="clearfix"></div>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				<div class="span3">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie txt-single">
						<div data-percent="85" class="easy-pie danger"><span class="value">85</span>%</div>
						<span class="txt">Server workload</span>
						<div class="clearfix"></div>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				<div class="span3">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie txt-single">
						<div data-percent="90" class="easy-pie success"><span class="value">90</span>%</div>
						<span class="txt">Completed tasks</span>
						<div class="clearfix"></div>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
				<div class="span3">
				
					<!-- Stats Widget -->
					<a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie">
						<div data-percent="23" class="easy-pie inverse"><span class="value">23</span>%</div>
						<span class="txt"><span class="count">1,244</span> Emails</span>
						<div class="clearfix"></div>
					</a>
					<!-- // Stats Widget END -->
					
				</div>
			</div>
			<!-- // Row END -->
		
			<span class="btn btn-toggle-code scrollTarget btn-mini btn-primary btn-icon glyphicons embed_close" data-toggle="hide" data-target="#code-6"><i></i> Source</span>
		</div>
		<!-- // Inner END -->
		
		</div>
	</div>
	
	<div class="separator bottom"></div>
	<!-- // Stats Widgets END -->
	
	<div class="innerLR">
	
<!-- Stats Widgets Code Sample -->
<div class="code hide" id="code-6">
<pre class="prettyprint lang-html">
&lt;!-- Regular --&gt;
&lt;a href="" class="widget-stats"&gt;
	&lt;span class="glyphicons user_add"&gt;&lt;i&gt;&lt;/i&gt;&lt;/span&gt;
	&lt;span class="txt"&gt;Clients&lt;/span&gt;
	&lt;div class="clearfix"&gt;&lt;/div&gt;
	&lt;span class="count label label-warning"&gt;33&lt;/span&gt;
&lt;/a&gt;

&lt;!-- Small --&gt;
&lt;div class="span2"&gt;
	&lt;a href="" class="widget-stats small"&gt;
		&lt;span class="glyphicons umbrella"&gt;&lt;i&gt;&lt;/i&gt;&lt;/span&gt;
		&lt;span class="count label label-primary"&gt;238&lt;/span&gt;
	&lt;/a&gt;
&lt;/div&gt;

&lt;!-- Gray --&gt;
&lt;div class="span2"&gt;
	&lt;a href="" class="widget-stats small gray"&gt;
		&lt;span class="glyphicons umbrella"&gt;&lt;i&gt;&lt;/i&gt;&lt;/span&gt;
		&lt;span class="count label label-primary"&gt;238&lt;/span&gt;
	&lt;/a&gt;
&lt;/div&gt;

&lt;!-- Dark --&gt;
&lt;div class="span2"&gt;
	&lt;a href="" class="widget-stats small dark"&gt;
		&lt;span class="glyphicons umbrella"&gt;&lt;i&gt;&lt;/i&gt;&lt;/span&gt;
		&lt;span class="count label label-primary"&gt;238&lt;/span&gt;
	&lt;/a&gt;
&lt;/div&gt;
</pre>
</div>
<!-- // Stats Widgets Code Sample END -->
	
	<!-- Media Widgets -->
	<h3>Media Widgets</h3>
	
	<!-- Row -->
	<div class="row-fluid">
	
		<!-- Column -->
		<div class="span6">
	
			<div class="box-generic">
			
				<!-- Media item -->
				<div class="media">
					<img class="media-object pull-left thumb" src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://dummyimage.com/51x51/232323/ffffff&amp;text=photo<?php endif; ?>" alt="">
					<div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien. Duis a odio id erat scelerisque fermentum in ut leo. Suspendisse potenti. Nunc semper cursus dui luctus porttitor. Donec facilisis semper magna sit amet ullamcorper.
					</div>
				</div>
				<!-- // Media item END -->
				
				<!-- Media item -->
				<div class="media">
					<img class="media-object pull-left thumb" src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://dummyimage.com/51x51/232323/ffffff&amp;text=photo<?php endif; ?>" alt="">
					<div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien. Duis a odio id erat scelerisque fermentum in ut leo. Suspendisse potenti. Nunc semper cursus dui luctus porttitor. Donec facilisis semper magna sit amet ullamcorper.
						
						<!-- Media item -->
						<div class="media">
							<img class="media-object pull-left thumb" src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://dummyimage.com/51x51/232323/ffffff&amp;text=photo<?php endif; ?>" alt="">
							<div class="media-body">
								<h4 class="media-heading">Nested media widget</h4>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien. Duis a odio id erat scelerisque fermentum in ut leo.
							</div>
						</div>
						<!-- // Media item END -->
						
					</div>
				</div>
				<!-- // Media item END -->
		
			</div>
			<div class="separator bottom"></div>
		
<!-- Code sample -->
<div class="code show">
<pre class="prettyprint">
&lt;div class="media"&gt;
	&lt;img class="media-object pull-left thumb" src="your-image.jpg" /&gt;
	&lt;div class="media-body"&gt;
		&lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
		Lorem ipsum dolor sit amet, consectetur adipiscing elit ...
		
		&lt;!-- Nested --&gt;
		&lt;div class="media"&gt; ... &lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- Code sample END -->
	
		</div>
		<!-- // Column END -->
		
		<!-- Column -->
		<div class="span6">
	
			<div class="box-generic">
		
				<!-- Media item -->
				<div class="media">
					<img class="media-object pull-right thumb" src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://dummyimage.com/51x51/232323/ffffff&amp;text=photo<?php endif; ?>" alt="">
					<div class="media-body right">
						<h4 class="media-heading">Media heading</h4>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien. Duis a odio id erat scelerisque fermentum in ut leo. Suspendisse potenti. Nunc semper cursus dui luctus porttitor. Donec facilisis semper magna sit amet ullamcorper.
					</div>
				</div>
				<!-- // Media item END -->
				
				<!-- Media item -->
				<div class="media">
					<img class="media-object pull-right thumb" src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://dummyimage.com/51x51/232323/ffffff&amp;text=photo<?php endif; ?>" alt="">
					<div class="media-body right">
						<h4 class="media-heading">Media heading</h4>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien. Duis a odio id erat scelerisque fermentum in ut leo. Suspendisse potenti. Nunc semper cursus dui luctus porttitor. Donec facilisis semper magna sit amet ullamcorper.
						
						<!-- Media item -->
						<div class="media">
							<img class="media-object pull-right thumb" src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://dummyimage.com/51x51/232323/ffffff&amp;text=photo<?php endif; ?>" alt="">
							<div class="media-body right">
								<h4 class="media-heading">Nested media widget</h4>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien. Duis a odio id erat scelerisque fermentum in ut leo.
							</div>
						</div>
						<!-- // Media item END -->
						
					</div>
				</div>
				<!-- // Media item END -->
		
			</div>
			<div class="separator bottom"></div>
		
<!-- Code sample -->
<div class="code show">
<pre class="prettyprint">
&lt;div class="media"&gt;
	&lt;img class="media-object pull-right thumb" src="your-image.jpg" /&gt;
	&lt;div class="media-body right"&gt;
		&lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
		Lorem ipsum dolor sit amet, consectetur adipiscing elit ...
		
		&lt;!-- Nested --&gt;
		&lt;div class="media"&gt; ... &lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- Code sample END -->
	
		</div>
		<!-- // Column END -->
		
	</div>
	<!-- // Row END -->
	<!-- // Media Widgets END -->
	
	<!-- Nice scroll -->
	<h3>Nice scrollable Widgets</h3>
	
	<!-- Row -->
	<div class="row-fluid">
	
		<!-- Column -->
		<div class="span6">
			<div class="box-generic">
			
				<!-- Slim Scroll -->
				<div class="slim-scroll" data-scroll-height="250px">
				
					<h4>Large content scrollable box</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique porttitor elit, faucibus convallis enim fringilla eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed nibh nunc, egestas sit amet convallis ac, molestie vitae dui. Pellentesque placerat fermentum mauris, eu tempus dui egestas eget. Mauris sodales, lectus quis accumsan adipiscing, ante libero porta risus, eu posuere sapien magna a metus. Phasellus laoreet fermentum risus, sed congue nisl facilisis nec. Curabitur ullamcorper ultricies erat, non posuere ipsum adipiscing tincidunt. Vivamus molestie hendrerit odio at rutrum. Suspendisse porta ligula ac eros hendrerit bibendum. Integer quis metus est, eu accumsan enim.</p>
					<p>Nam commodo imperdiet condimentum. Maecenas in orci odio, quis sagittis augue. Aenean eu nisl turpis. Etiam gravida risus vitae nunc porttitor vestibulum. Praesent ut lorem erat, accumsan ornare erat. Nam in magna magna, nec posuere mi. Curabitur semper mi sed dui ornare vel posuere magna imperdiet. Quisque id tellus ipsum. Maecenas accumsan velit id velit pulvinar tincidunt. Nullam in ante dui. Suspendisse ut orci lectus. Nulla in nunc nec enim interdum auctor. Etiam imperdiet volutpat porta. In bibendum, tortor suscipit facilisis eleifend, lectus lacus laoreet enim, non aliquam nisi justo sit amet leo.</p>
					<p>Nunc sed dapibus diam. Suspendisse aliquam ultricies sem et semper. Nulla varius, purus ac sodales fermentum, velit sem scelerisque tellus, et hendrerit neque justo bibendum mauris. Etiam vel neque vel dolor aliquam dignissim non sit amet mauris. Ut purus ante, accumsan in venenatis eget, auctor sit amet quam. Morbi nibh quam, lacinia id porta et, pretium id arcu. Mauris justo justo, tincidunt a rhoncus sit amet, mattis id enim. Vivamus vehicula, mi ac dapibus aliquet, sapien metus dignissim odio, vel ornare elit nulla non quam. Suspendisse id ligula odio. Maecenas nunc massa, pharetra sit amet condimentum id, tempus suscipit nisl. Nulla facilisi.</p>
					<p>Maecenas blandit libero a enim faucibus porta. Proin id mauris non lorem tristique dignissim. Duis hendrerit commodo lorem, ac pellentesque dolor sodales sed. Vivamus accumsan erat sed sem mollis facilisis. Praesent vel magna felis, quis convallis augue. Donec dictum, dolor in fermentum venenatis, est nunc fermentum nulla, at suscipit magna dolor a metus. Pellentesque malesuada pellentesque tellus, tristique eleifend dolor tempor vitae. Phasellus sed sem non massa varius mollis. Curabitur non suscipit nunc. Sed vel metus sapien, in pharetra nisi. In vel nibh et odio congue tristique. Praesent non eros purus. Aenean eleifend lacus iaculis tellus eleifend sodales. Cras auctor tellus ac dui vehicula pretium. Proin non ipsum a elit molestie sodales eu in nisi. In ac nulla tortor, sollicitudin imperdiet nisl.</p>
					<p>Nunc vitae diam eget arcu rutrum euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper libero et dui faucibus egestas. Mauris consequat, lectus at imperdiet faucibus, ante augue egestas neque, ac luctus velit odio id ipsum. Curabitur sed sem at mi elementum aliquam venenatis a risus. Aliquam et arcu sem. Phasellus vestibulum enim ac lacus commodo lacinia. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		
				</div>
				<!-- // Slim Scroll END -->
				
			</div>
			<div class="separator bottom"></div>
		
<!-- Code sample -->
<div class="code show">
<pre class="prettyprint">
&lt;div class="box-generic"&gt;
	&lt;div class="slim-scroll" data-scroll-height="250px"&gt;
		&lt;h4&gt;Large content scrollable box&lt;/h4&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique porttitor elit, faucibus convallis enim fringilla eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed nibh nunc, egestas sit amet convallis ac, molestie vitae dui. Pellentesque placerat fermentum mauris, eu tempus dui egestas eget. Mauris sodales, lectus quis accumsan adipiscing, ante libero porta risus, eu posuere sapien magna a metus. Phasellus laoreet fermentum risus, sed congue nisl facilisis nec. Curabitur ullamcorper ultricies erat, non posuere ipsum adipiscing tincidunt. Vivamus molestie hendrerit odio at rutrum. Suspendisse porta ligula ac eros hendrerit bibendum. Integer quis metus est, eu accumsan enim.&lt;/p&gt;
		&lt;p&gt;Nam commodo imperdiet condimentum. Maecenas in orci odio, quis sagittis augue. Aenean eu nisl turpis. Etiam gravida risus vitae nunc porttitor vestibulum. Praesent ut lorem erat, accumsan ornare erat. Nam in magna magna, nec posuere mi. Curabitur semper mi sed dui ornare vel posuere magna imperdiet. Quisque id tellus ipsum. Maecenas accumsan velit id velit pulvinar tincidunt. Nullam in ante dui. Suspendisse ut orci lectus. Nulla in nunc nec enim interdum auctor. Etiam imperdiet volutpat porta. In bibendum, tortor suscipit facilisis eleifend, lectus lacus laoreet enim, non aliquam nisi justo sit amet leo.&lt;/p&gt;
		&lt;p&gt;Nunc sed dapibus diam. Suspendisse aliquam ultricies sem et semper. Nulla varius, purus ac sodales fermentum, velit sem scelerisque tellus, et hendrerit neque justo bibendum mauris. Etiam vel neque vel dolor aliquam dignissim non sit amet mauris. Ut purus ante, accumsan in venenatis eget, auctor sit amet quam. Morbi nibh quam, lacinia id porta et, pretium id arcu. Mauris justo justo, tincidunt a rhoncus sit amet, mattis id enim. Vivamus vehicula, mi ac dapibus aliquet, sapien metus dignissim odio, vel ornare elit nulla non quam. Suspendisse id ligula odio. Maecenas nunc massa, pharetra sit amet condimentum id, tempus suscipit nisl. Nulla facilisi.&lt;/p&gt;
		&lt;p&gt;Maecenas blandit libero a enim faucibus porta. Proin id mauris non lorem tristique dignissim. Duis hendrerit commodo lorem, ac pellentesque dolor sodales sed. Vivamus accumsan erat sed sem mollis facilisis. Praesent vel magna felis, quis convallis augue. Donec dictum, dolor in fermentum venenatis, est nunc fermentum nulla, at suscipit magna dolor a metus. Pellentesque malesuada pellentesque tellus, tristique eleifend dolor tempor vitae. Phasellus sed sem non massa varius mollis. Curabitur non suscipit nunc. Sed vel metus sapien, in pharetra nisi. In vel nibh et odio congue tristique. Praesent non eros purus. Aenean eleifend lacus iaculis tellus eleifend sodales. Cras auctor tellus ac dui vehicula pretium. Proin non ipsum a elit molestie sodales eu in nisi. In ac nulla tortor, sollicitudin imperdiet nisl.&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- Code sample END -->
	
		</div>
		<!-- // Column END -->
		
		<!-- Column -->
		<div class="span6">
		
			<!-- Widget Scroll -->
			<div class="widget widget-scroll" data-scroll-height="219px">
				<div class="widget-head">
					<h4 class="heading">Large content scrollable box</h4>
				</div>
				<div class="widget-body">
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique porttitor elit, faucibus convallis enim fringilla eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed nibh nunc, egestas sit amet convallis ac, molestie vitae dui. Pellentesque placerat fermentum mauris, eu tempus dui egestas eget. Mauris sodales, lectus quis accumsan adipiscing, ante libero porta risus, eu posuere sapien magna a metus. Phasellus laoreet fermentum risus, sed congue nisl facilisis nec. Curabitur ullamcorper ultricies erat, non posuere ipsum adipiscing tincidunt. Vivamus molestie hendrerit odio at rutrum. Suspendisse porta ligula ac eros hendrerit bibendum. Integer quis metus est, eu accumsan enim.</p>
						<p>Nam commodo imperdiet condimentum. Maecenas in orci odio, quis sagittis augue. Aenean eu nisl turpis. Etiam gravida risus vitae nunc porttitor vestibulum. Praesent ut lorem erat, accumsan ornare erat. Nam in magna magna, nec posuere mi. Curabitur semper mi sed dui ornare vel posuere magna imperdiet. Quisque id tellus ipsum. Maecenas accumsan velit id velit pulvinar tincidunt. Nullam in ante dui. Suspendisse ut orci lectus. Nulla in nunc nec enim interdum auctor. Etiam imperdiet volutpat porta. In bibendum, tortor suscipit facilisis eleifend, lectus lacus laoreet enim, non aliquam nisi justo sit amet leo.</p>
						<p>Nunc sed dapibus diam. Suspendisse aliquam ultricies sem et semper. Nulla varius, purus ac sodales fermentum, velit sem scelerisque tellus, et hendrerit neque justo bibendum mauris. Etiam vel neque vel dolor aliquam dignissim non sit amet mauris. Ut purus ante, accumsan in venenatis eget, auctor sit amet quam. Morbi nibh quam, lacinia id porta et, pretium id arcu. Mauris justo justo, tincidunt a rhoncus sit amet, mattis id enim. Vivamus vehicula, mi ac dapibus aliquet, sapien metus dignissim odio, vel ornare elit nulla non quam. Suspendisse id ligula odio. Maecenas nunc massa, pharetra sit amet condimentum id, tempus suscipit nisl. Nulla facilisi.</p>
						<p>Maecenas blandit libero a enim faucibus porta. Proin id mauris non lorem tristique dignissim. Duis hendrerit commodo lorem, ac pellentesque dolor sodales sed. Vivamus accumsan erat sed sem mollis facilisis. Praesent vel magna felis, quis convallis augue. Donec dictum, dolor in fermentum venenatis, est nunc fermentum nulla, at suscipit magna dolor a metus. Pellentesque malesuada pellentesque tellus, tristique eleifend dolor tempor vitae. Phasellus sed sem non massa varius mollis. Curabitur non suscipit nunc. Sed vel metus sapien, in pharetra nisi. In vel nibh et odio congue tristique. Praesent non eros purus. Aenean eleifend lacus iaculis tellus eleifend sodales. Cras auctor tellus ac dui vehicula pretium. Proin non ipsum a elit molestie sodales eu in nisi. In ac nulla tortor, sollicitudin imperdiet nisl.</p>
						<p>Nunc vitae diam eget arcu rutrum euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper libero et dui faucibus egestas. Mauris consequat, lectus at imperdiet faucibus, ante augue egestas neque, ac luctus velit odio id ipsum. Curabitur sed sem at mi elementum aliquam venenatis a risus. Aliquam et arcu sem. Phasellus vestibulum enim ac lacus commodo lacinia. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
				</div>
			</div>
			<!-- // Widget Scroll END -->
			
<!-- Code sample -->
<div class="code show">
<pre class="prettyprint">
&lt;div class="widget widget-scroll" data-scroll-height="250px"&gt;
	&lt;div class="widget-head"&gt;
		&lt;h4 class="heading"&gt;Large content scrollable box&lt;/h4&gt;
	&lt;/div&gt;
	&lt;div class="widget-body"&gt;
		&lt;div&gt;
			&lt;p&gt;Lorem ipsum dolor sit amet ...&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- Code sample END -->
	
		</div>
		<!-- // Column END -->
		
	</div>
	<!-- // Row END -->
	<!-- // Media Widgets END -->
	
	<!-- Wells -->
	<h3>Wells <span>Lightweight utility</span></h3>
	<div class="row-fluid">
		<div class="span4">
			<div class="well margin-none">
				<address class="margin-none">
					<h2>John Doe</h2>
					<strong>Business manager</strong> at 
					<strong><a href="#">Business</a></strong><br> 
					<abbr title="Work email">e-mail:</abbr> <a href="mailto:#">john.doe@mybiz.com</a><br /> 
					<abbr title="Work Phone">phone:</abbr> (012) 345-678-901<br/>
					<abbr title="Work Fax">fax:</abbr> (012) 678-132-901
					<div class="separator line"></div>
					<p class="margin-none"><strong>You can also find us:</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique rutrum libero, vel bibendum nunc consectetur sed.</p>
				</address>
			</div>
		</div>
		<div class="span4">
			<div class="well margin-none">
				<h2>Wells are cool</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique porttitor elit, faucibus convallis enim fringilla eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
				<p class="margin-none">Sed nibh nunc, egestas sit amet convallis ac, molestie vitae dui. Pellentesque placerat fermentum mauris, eu tempus dui egestas eget. Mauris sodales, lectus quis accumsan adipiscing, ante libero porta risus, eu posuere sapien magna a metus.</p>
			</div>
		</div>
		<div class="span4">
		
<!-- Code sample -->
<div class="code show">
<pre class="prettyprint">
&lt;div class="well margin-none"&gt;
	&lt;address class="margin-none"&gt;
		&lt;h2&gt;John Doe&lt;/h2&gt;
		&lt;strong&gt;Business manager&lt;/strong&gt; at 
		&lt;strong&gt;&lt;a href="#"&gt;Business&lt;/a&gt;&lt;/strong&gt;&lt;br/&gt; 
		&lt;abbr title="Work email"&gt;e-mail:&lt;/abbr&gt; &lt;a href="mailto:#"&gt;john.doe@mybiz.com&lt;/a&gt;&lt;br/&gt; 
		&lt;abbr title="Work Phone"&gt;phone:&lt;/abbr&gt; (012) 345-678-901&lt;br/&gt;
		&lt;abbr title="Work Fax"&gt;fax:&lt;/abbr&gt; (012) 678-132-901
		&lt;div class="separator line"&gt;&lt;/div&gt;
		&lt;p class="margin-none"&gt;&lt;strong&gt;You can also find us:&lt;/strong&gt;&lt;br/&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique rutrum libero, vel bibendum nunc consectetur sed.&lt;/p&gt;
	&lt;/address&gt;
&lt;/div&gt;
</pre>
</div>
<!-- Code sample END -->
		
		</div>
	</div>
	<div class="separator bottom"></div>
	<!-- // Wells END -->
	
	<!-- Collapsible Widgets -->
	<h3>Collapsible Widgets <span>Make any widget collapsible</span></h3>
	<div class="row-fluid">
		<div class="span4">
			
			<!-- Collapsible Widget -->
			<div class="widget" data-toggle="collapse-widget">
				<div class="widget-head"><h4 class="heading">Collapsible widget</h4></div>
				<div class="widget-body">
					Nunc vitae diam eget arcu rutrum euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper libero et dui faucibus egestas. Mauris consequat, lectus at imperdiet faucibus, ante augue egestas neque, ac luctus velit odio id ipsum. Curabitur sed sem at mi elementum aliquam venenatis a risus. Aliquam et arcu sem. Phasellus vestibulum enim ac lacus commodo lacinia. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</div>
			</div>
			<!-- // Collapsible Widget END -->
			
		</div>
		<div class="span4">
			
			<?php for ($i=1;$i<=5;$i++): ?>
			<!-- Collapsible Widget (closed by default) -->
			<div class="widget" data-toggle="collapse-widget" data-collapse-closed="true">
				<div class="widget-head"><h4 class="heading">Collapsible widget</h4></div>
				<div class="widget-body">
					Nunc vitae diam eget arcu rutrum euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper libero et dui faucibus egestas. Mauris consequat, lectus at imperdiet faucibus, ante augue egestas neque, ac luctus velit odio id ipsum. Curabitur sed sem at mi elementum aliquam venenatis a risus. Aliquam et arcu sem. Phasellus vestibulum enim ac lacus commodo lacinia. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</div>
			</div>
			<!-- // Collapsible Widget (closed by default) END -->
			<?php endfor; ?>
			
		</div>
		<div class="span4">
		
<!-- Code sample -->
<div class="code show">
<pre class="prettyprint">
&lt;div class="widget" data-toggle="collapse-widget" data-collapse-closed="true"&gt;
	&lt;div class="widget-head"&gt;&lt;h4 class="heading"&gt;Collapsible widget&lt;/h4&gt;&lt;/div&gt;
	&lt;div class="widget-body"&gt;
		Nunc vitae diam eget arcu rutrum euismod ...
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
<!-- Code sample END -->

			<strong>How:</strong> Just attach the HTML5 attribute <code>data-toggle="collapse-widget"</code> to any regular widget, and to make it closed by default, just add <code>data-collapse-closed="true"</code>
		
		</div>
	</div>
	<div class="separator bottom"></div>
	<!-- // Collapsible Widgets END -->
	
	<!-- Collapsible Widgets -->
	<h3>Timeline Widgets <span>vizualize events in time with style</span></h3>
	<div class="row-fluid">
		<div class="span8">
			
			<!-- Timeline Widget -->
			<div class="widget-timeline">
				<ul class="list-timeline">
					
					<?php $users = array('John Doe', 'Melisa Ragae', 'Darius Jackson', 'Jane Doe', 'Martin Glades'); ?>
					<?php for($i=1;$i<=6;$i++): ?>
					<!-- Item -->
					<li>
						<span class="date">21/03</span>
						<span class="glyphicons activity-icon user_add"><i></i></span>
						<span class="ellipsis"><a href=""><?php echo $users[mt_rand(0, count($users)-1)]; ?></a> registered at <a href=""><?php echo $users[mt_rand(0, count($users)-1)]; ?>'s</a> suggestion.</span>
						<div class="clearfix"></div>
					</li>
					<!-- // Item END -->
					<?php endfor; ?>
					
				</ul>
				<a href="" class="btn btn-primary view-all">View all</a>
			</div>
			<!-- Timeline Widget END -->
			
		</div>
		<div class="span4">
		
<!-- Code sample -->
<div class="code show">
<pre class="prettyprint">
&lt;div class="widget-timeline"&gt;
	&lt;ul class="list-timeline"&gt;
		&lt;li&gt;
			&lt;span class="date"&gt;21/03&lt;/span&gt;
			&lt;span class="glyphicons activity-icon user_add"&gt;&lt;i&gt;&lt;/i&gt;&lt;/span&gt;
			&lt;span class="ellipsis"&gt;&lt;a href=""&gt;Jessica&lt;/a&gt; registered at &lt;a href=""&gt;John's&lt;/a&gt; suggestion.&lt;/span&gt;
			&lt;div class="clearfix"&gt;&lt;/div&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
	&lt;a href="" class="btn btn-primary view-all"&gt;View all&lt;/a&gt;
&lt;/div&gt;
</pre>
</div>
<!-- Code sample END -->
		
		</div>
	</div>
	<div class="separator bottom"></div>
	<!-- // Collapsible Widgets END -->
	
	<!-- Other Widgets -->
	<h3>Other</h3>
	<div class="box-generic">
	
	<!-- Mosaic Heading Style Preview & Code Sample -->
	<h4 class="heading-mosaic">Mosaic heading style</h4>
	<div class="separator bottom"></div>
<div class="code show">
<pre class="prettyprint lang-html">
&lt;h4 class="heading-mosaic"&gt;Mosaic heading style&lt;/h4&gt;
</pre>
<div class="separator bottom"></div>
</div>
	<!-- // Mosaic Heading Style Preview & Code Sample END -->
	
	<!-- Simple heading with arrow preview & code sample -->
	<h4 class="heading-arrow">Simple heading with arrow</h4>
	<div class="separator bottom"></div>
<div class="code show">
<pre class="prettyprint lang-html">
&lt;h4 class="heading-arrow"&gt;Simple heading with arrow&lt;/h4&gt;
</pre>
<div class="separator bottom"></div>
</div>
	<!-- // Simple heading with arrow preview & code sample END -->

	<!-- Links widget preview & code sample -->
	<div class="menubar links primary">
		<ul>
			<li>Link widget:</li>
			<li><a href="">Button 1</a></li>
			<li class="divider"></li>
			<li><a href="">Button 2</a></li>
			<li class="divider"></li>
			<li><a href="">Button 3</a></li>
		</ul>
	</div>
	<div class="separator bottom"></div>
			
<div class="code show">
<pre class="prettyprint lang-html">
&lt;div class="menubar links primary"&gt;
	&lt;ul&gt;
		&lt;li&gt;Link widget:&lt;/li&gt;
		&lt;li&gt;&lt;a href=""&gt;Button 1&lt;/a&gt;&lt;/li&gt;
		&lt;li class="divider"&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=""&gt;Button 2&lt;/a&gt;&lt;/li&gt;
		&lt;li class="divider"&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=""&gt;Button 3&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
</pre>
<div class="separator bottom"></div>
</div>
	<!-- // Links widget preview & code sample END -->

	<!-- Button widget preview & code sample -->
	<div class="menubar">
		<ul>
			<li>Button widget:</li>
			<li><a href="">Button 1</a></li>
			<li class="divider"></li>
			<li><a href="">Button 2</a></li>
			<li class="divider"></li>
			<li><a href="">Export</a></li>
		</ul>
	</div>
			
<div class="code show">
<div class="separator bottom"></div>
<pre class="prettyprint lang-html">
&lt;div class="menubar"&gt;
	&lt;ul&gt;
		&lt;li&gt;Button widget:&lt;/li&gt;
		&lt;li&gt;&lt;a href=""&gt;Button 1&lt;/a&gt;&lt;/li&gt;
		&lt;li class="divider"&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=""&gt;Button 2&lt;/a&gt;&lt;/li&gt;
		&lt;li class="divider"&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=""&gt;Export&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
</pre>
</div>
	<!-- // Button widget preview & code sample END -->

	</div>
	<div class="separator bottom"></div>
	<!-- // Other Widgets END -->

</div>