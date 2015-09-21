<!-- Filters -->
<div class="filter-bar dark margin-bottom-none border-none">
	<form>
		
		<!-- Search -->
		<div class="pull-left">
			<div class="input-append">
				<input type="text" name="from" class="input-mini" style="width: 100px;" placeholder="Quick search .." />
				<button type="submit" class="add-on glyphicons search"><i></i></button>
			</div>
		</div>
		<!-- // Search END -->
		
		<!-- Filters Visible on Desktop only -->
		<div class="helper visible-desktop pull-right">
			<div class="helper pull-right">
			
				<!-- From Filter -->
				<div class="pull-left">
					<label><?php echo $translate->_('from'); ?>:</label>
					<div class="input-append">
						<input type="text" name="from" id="dateRangeFrom" class="input-mini" value="08/05/13" style="width: 53px;" />
						<span class="add-on glyphicons calendar"><i></i></span>
					</div>
				</div>
				<!-- // From Filter END -->
				
				<!-- To Filter -->
				<div class="pull-left">
					<label><?php echo $translate->_('to'); ?>:</label>
					<div class="input-append">
						<input type="text" name="to" id="dateRangeTo" class="input-mini" value="08/18/13" style="width: 53px;" />
						<span class="add-on glyphicons calendar"><i></i></span>
					</div>
				</div>
				<!-- // To Filter END -->
				
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- // Filters Visible on Desktop only END -->
		
	</form>
</div>
<!-- // Filters END -->

<h3 class="heading-mosaic">Overview</h3>
<div class="innerLR">

	<!-- Quick Tabs Widget -->
	<div class="widget widget-tabs widget-quick hidden-print">
	
		<!-- Tabs Widget Heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a href="#quickIndexTab" data-toggle="tab" class="glyphicons user"><i></i><?php echo $translate->_('Profile'); ?></a></li>
				<li><a href="#quickPhotosTab" data-toggle="tab" class="glyphicons camera"><i></i><?php echo $translate->_('Photos'); ?></a></li>
				<li><a href="#quickFriendsTab" data-toggle="tab" class="glyphicons parents"><i></i><?php echo $translate->_('Friends'); ?></a></li>
				<li><a href="#quickLocationTab" data-toggle="tab" class="glyphicons google_maps"><i></i><?php echo $translate->_('Location'); ?></a></li>
				<li><a href="#quickOtherTab" data-toggle="tab" class="glyphicons retweet"><i></i>Other</a></li>
			</ul>
		</div>
		<!-- // Tabs Widget Heading END -->
		
		<div class="widget-body">
			<div class="tab-content">
			
				<!-- Quick Index Tab -->
				<div class="tab-pane active" id="quickIndexTab">
					<div class="row-fluid">
						<div class="span2 center">
						
							<!-- Profile Photo -->
							<a href="" class="thumb no-max"><img src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome_large.jpg<?php else: ?>http://dummyimage.com/400x400/232323/ffffff&amp;text=photo<?php endif; ?>" alt="Profile" /></a>
							<div class="separator bottom"></div>
							<!-- // Profile Photo END -->
							
							<!-- Social Icons -->
							<a href="" class="glyphicons standard primary facebook"><i></i></a>
							<a href="" class="glyphicons standard twitter"><i></i></a>
							<a href="" class="glyphicons standard linked_in"><i></i></a>
							<!-- // Social Icons END -->
							
						</div>
						<div class="span6">
						
							<!-- About -->
							<h5>Mr.Awesome</h5>
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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis porta purus, pulvinar mattis nulla tempus ut. Curabitur quis dui orci. Ut nisi dolor, dignissim a aliquet quis, vulputate id dui. Proin ultrices ultrices ligula, dictum varius turpis faucibus non. Curabitur faucibus ultrices nunc, nec aliquet leo tempor cursus.</p>
							<!-- // About END -->
							
							<!-- Twitter Section -->
							<h5 class="glyphicons single twitter"><i></i> Latest from Twitter</h5>
							<section class="twitter-feed">
								<div class="row-fluid">
									<div class="span12">
										<div class="tweet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc lorem, rutrum non porta. <span class="label label-inverse">01/11/2012</span></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</section>
							<!-- Twitter Section END -->
							
						</div>
						<div class="span4">
						
							<!-- Bio -->
							<h5>Bio <span>Personal information</span></h5>
							<div class="separator bottom"></div>
							<ul class="unstyled icons">
								<li class="glyphicons birthday_cake"><i></i> <span class="label">10</span> <span class="label">July</span> <span class="label">1986</span></li>
								<li class="glyphicons tie"><i></i> Working at <a href="http://www.mosaicpro.biz">MosaicPro</a></li>
								<li class="glyphicons certificate"><i></i> Adobe Photoshop Certification</li>
								<li class="glyphicons microphone"><i></i> English :: French :: Italian :: Romanian :: Polish</li>
							</ul>
							<!-- // Bio END -->
							
						</div>
					</div>
				</div>
				<!-- // Quick Index Tab END -->
				
				<!-- Quick Photos Tab -->
				<div class="tab-pane" id="quickPhotosTab">
				
					<!-- Tabs -->
					<div class="tabsbar tabsbar-2">
						<ul class="row-fluid row-merge">
							<li class="glyphicons camera active span3"><a href="<?php echo getURL(array('gallery_1')); ?>"><i></i> View all photos <strong>(43)</strong></a></li>
							<li class="glyphicons folder_open span3"><a href="<?php echo getURL(array('gallery_1')); ?>"><i></i> Albums <strong>(3)</strong></a></li>
							<li class="glyphicons circle_plus span3"><a href="<?php echo getURL(array('gallery_1')); ?>"><i></i> <span>Add Photos</span></a></li>
							<li class="glyphicons folder_plus span3"><a href="<?php echo getURL(array('gallery_1')); ?>"><i></i> <span>Create Album</span></a></li>
						</ul>
					</div>
					<!-- // Tabs END -->
					
					<!-- Gallery Layout -->
					<div class="gallery gallery-2">
						<ul class="row-fluid" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-4" data-delegate="#gallery-4">
							<?php for($i=1;$i<=6;$i++): ?>
							<li class="span2<?php if ($i>3): ?> hidden-phone<?php endif; ?>"><a class="thumb" href="<?php echo getURL(); ?>theme/images/gallery-2/<?php echo $i; ?>.jpg" data-gallery="gallery"><img src="<?php echo getURL(); ?>theme/images/gallery-2/<?php echo $i; ?>.jpg" alt="photo" /></a></li>
							<?php endfor; ?>
						</ul>
					</div>
					<!-- // Gallery Layout END -->
					
					<!-- Pagination -->
					<div class="btn-group">
						<a class="btn disabled btn-small btn-default glyphicons standard chevron-left"><i></i></a>
						<a class="btn btn-small btn-default glyphicons standard chevron-right"><i></i></a>
					</div>
					<span class="innerLR">1-6 out of 43</span>
					<!-- // Pagination END -->
					
				</div>
				<!-- // Quick Photos Tab END -->
				
				<!-- Quick Friends Tab -->
				<div class="tab-pane" id="quickFriendsTab">
					<h5 class="margin-none">Just a tab</h5>
					<p class="margin-bottom-none">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<!-- // Quick Friends Tab END -->
				
				<!-- Quick Location Tab -->
				<div class="tab-pane" id="quickLocationTab">
					<h5 class="margin-none">Just a tab</h5>
					<p class="margin-bottom-none">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<!-- // Quick Location Tab END -->
				
				<!-- Quick Other Tab -->
				<div class="tab-pane" id="quickOtherTab">
					<h5 class="margin-none">Just a tab</h5>
					<p class="margin-bottom-none">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<!-- // Quick Other Tab END -->
				
			</div>
			<div class="ribbon-wrapper"><div class="ribbon primary">profile</div></div>
		</div>
	</div>
	<!-- // Quick Tabs Widget END -->
	
</div>

<!-- Row -->
<div class="row-fluid row-merge border-top">
	
	<!-- Column -->
	<div class="span7">
	
		<!-- Spacing -->
		<div class="innerAll">
	
			<!-- Recent Activity -->
			<div class="widget widget-4 widget-tabs-icons-only widget-timeline margin-bottom-none">
			
				<!-- Widget Heading -->
				<div class="widget-head">
					<h4 class="heading">Recent Activity <span>timeline</span></h4>
					
					<!-- Filters Tabs -->
					<ul class="pull-right">
						<li>Filter by</li>
						<li class="glyphicons user_add"><span data-toggle="tab" data-target="#filterUsersTab"><i></i></span></li>
						<li class="glyphicons shopping_cart active"><span data-toggle="tab" data-target="#filterOrdersTab"><i></i></span></li>
						<li class="glyphicons envelope"><span data-toggle="tab" data-target="#filterMessagesTab"><i></i></span></li>
						<li class="glyphicons link"><span data-toggle="tab" data-target="#filterLinksTab"><i></i></span></li>
						<li class="glyphicons camera"><span data-toggle="tab" data-target="#filterPhotosTab"><i></i></span></li>
					</ul>
					<div class="clearfix"></div>
					<!-- // Filters Tabs END -->
					
				</div>
				<!-- Widget Heading END -->
				
				<div class="widget-body">
					<div class="tab-content">
					
						<?php $users = array('John Doe', 'Melisa Ragae', 'Darius Jackson', 'Jane Doe', 'Martin Glades'); ?>
						
						<!-- Filter Users Tab -->
						<div class="tab-pane" id="filterUsersTab">
							<ul class="list-timeline">
							
								<?php for($i=1;$i<=7;$i++): ?>
								<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon user_add"><i></i></span>
									<span class="ellipsis"><a href=""><?php echo $users[mt_rand(0, count($users)-1)]; ?></a> registered at <a href=""><?php echo $users[mt_rand(0, count($users)-1)]; ?>'s</a> suggestion.</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->
								<?php endfor; ?>
								
							</ul>
							<a href="" class="btn btn-primary view-all">View all</a>
						</div>
						<!-- // Filter Users Tab END -->
						
						<!-- Filter Orders Tab -->
						<div class="tab-pane active" id="filterOrdersTab">
							<ul class="list-timeline">
							
								<?php for($i=1;$i<=7;$i++): ?>
								<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon shopping_cart"><i></i></span>
									<span class="ellipsis"><a href=""><?php echo $users[mt_rand(0, count($users)-1)]; ?></a> bought 10 items worth of &euro;50 (<a href="">order #230<?php echo $i; ?></a>)</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->
								<?php endfor; ?>
								
							</ul>
							<a href="" class="btn btn-primary view-all">View all</a>
						</div>
						<!-- // Filter Orders Tab END -->
						
						<!-- Filter Messages Tab -->
						<div class="tab-pane" id="filterMessagesTab">
							<ul class="list-timeline">
							
								<?php for($i=1;$i<=7;$i++): ?>
								<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon envelope"><i></i></span>
									<span class="ellipsis"><a href=""><?php echo $users[mt_rand(0, count($users)-1)]; ?></a> bought 10 items worth of &euro;50 (<a href="">order #230<?php echo $i; ?></a>)</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->
								<?php endfor; ?>
								
							</ul>
							<a href="" class="btn btn-primary view-all">View all</a>
						</div>
						<!-- // Filter Messages Tab END -->
						
						<!-- Filter Links Tab -->
						<div class="tab-pane" id="filterLinksTab">
							<ul class="list-timeline">
							
								<?php for($i=1;$i<=7;$i++): ?>
								<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon link"><i></i></span>
									<span class="ellipsis"><a href=""><?php echo $users[mt_rand(0, count($users)-1)]; ?></a> bought 10 items worth of &euro;50 (<a href="">order #230<?php echo $i; ?></a>)</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->
								<?php endfor; ?>
								
							</ul>
							<a href="" class="btn btn-primary view-all">View all</a>
						</div>
						<!-- // Filter Links Tab END -->
						
						<!-- Filter Photos Tab -->
						<div class="tab-pane" id="filterPhotosTab">
							<ul class="list-timeline">
							
								<?php for($i=1;$i<=7;$i++): ?>
								<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon camera"><i></i></span>
									<span class="ellipsis"><a href=""><?php echo $users[mt_rand(0, count($users)-1)]; ?></a> bought 10 items worth of &euro;50 (<a href="">order #230<?php echo $i; ?></a>)</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->
								<?php endfor; ?>
								
							</ul>
							<a href="" class="btn btn-primary view-all">View all</a>
						</div>
						<!-- // Filter Photos Tab END -->
					
					</div>
				</div>
			</div>
			<!-- // Recent Activity END -->
		
		</div>
		<!-- // spacing END -->
		
	</div>
	<!-- // Column END -->
	
	<!-- Column -->
	<div class="span5">
	
		<!-- Tabs -->
		<div class="innerLR">
			<div class="separator bottom"></div>
			<div class="tabsbar tabsbar-2 margin-none">
				<ul class="row-fluid row-merge">
					<li class="span6 glyphicons chat active"><a href="#tab-chat" data-toggle="tab"><i></i> Live Chat</a></li>
					<li class="span6 glyphicons envelope"><a href="#tab-messages" data-toggle="tab"><i></i> <span>Messages</span></a></li>
				</ul>
			</div>
		</div>
		<!-- // Tabs END -->
	
		<!-- Tabs content -->
		<div class="tab-content">
	
		<!-- Chat -->
		<div class="tab-pane innerAll active" id="tab-chat">
			<div class="box-generic widget-chat">
				
				<!-- Slim Scroll -->
				<div class="slim-scroll chat-items" data-scroll-height="240px">
					
					<!-- Media item -->
					<div class="media">
						<div class="media-object pull-left thumb"><img src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://dummyimage.com/51x51/232323/ffffff&amp;text=photo<?php endif; ?>" alt=""></div>
						<div class="media-body">
							<blockquote>
								<small><a href="#" title="" class="strong">Martin</a> <cite>just now</cite></small>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien.</p>
							</blockquote>
						</div>
					</div>
					<!-- // Media item END -->
					
					<!-- Media item -->
					<div class="media">
						<div class="media-object pull-right thumb"><img src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://dummyimage.com/51x51/232323/ffffff&amp;text=photo<?php endif; ?>" alt=""></div>
						<div class="media-body right">
							<blockquote class="pull-right">
								<small><a href="#" title="" class="strong">John Doe</a><cite> 15 seconds ago</cite></small>
								<p>In ultricies ante eget tortor euismod vitae molestie eros hendrerit. Cras tristique, orci ac lacinia aliquet, velit risus laoreet lectus, eget sollicitudin metus orci non nulla.</p>
							</blockquote>
						</div>
					</div>
					<!-- // Media item END -->
					
					<!-- Media item -->
					<div class="media">
						<div class="media-object pull-left thumb"><img src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://dummyimage.com/51x51/232323/ffffff&amp;text=photo<?php endif; ?>" alt=""></div>
						<div class="media-body">
							<blockquote>
								<small><a href="#" title="" class="strong">Ricky</a> <cite>5 minutes ago</cite></small>
								<p>Pellentesque ac turpis turpis. Aliquam erat volutpat. Proin semper auctor mauris vel tempor. Ut eget turpis neque. Nam ultricies tortor eu odio ultricies euismod.</p>
							</blockquote>
						</div>
					</div>
					<!-- // Media item END -->
					
				</div>
				<!-- // Slim Scroll END -->
				
				<div class="chat-controls">
					<div class="innerLR">
						<form class="margin-none">
							<div class="row-fluid">
								<div class="span10">
									<input type="text" name="message" class="input-block-level margin-none" placeholder="Type your message .." />
								</div>
								<div class="span2">
									<button type="submit" class="btn btn-block btn-inverse">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<!-- // Chat END -->
	
		<!-- Messages -->
		<div class="widget widget-4 widget-messages margin-bottom-none tab-pane widget-scroll" data-scroll-height="272px" id="tab-messages">
		
			<!-- Widget Heading -->
			<div class="widget-head">
				<h4 class="heading">Your Messages</h4>
				<span class="pull-right"><a href="" class="btn btn-small btn-primary btn-icon glyphicons envelope"><i></i>View all</a></span>
				<div class="clearfix"></div>
			</div>
			<!-- // Widget Heading END -->
			
			<div class="widget-body">
				<div>
					<ul>
						<!-- Message -->
						<li>
							<span class="meta glyphicons user single"><i></i> Adrian <span>1 hour ago</span></span>
							<p>Are you available for freelance?</p>
							<div>
								<a href="" class="btn btn-mini btn-inverse">reply</a>
								<a href="" class="glyphicons single bin pull-right" style="margin: 0;"><i></i></a>
								<div class="clearfix"></div>
							</div>
						</li>
						<!-- // Message END -->
						
						<!-- Message -->
						<li>
							<span class="meta glyphicons user single"><i></i> MosaicPro <span>10 seconds ago</span></span>
							<p>Your question has been answered.</p>
							<div>
								<a href="" class="btn btn-mini btn-inverse">reply</a>
								<a href="" class="glyphicons single bin pull-right" style="margin: 0;"><i></i></a>
								<div class="clearfix"></div>
							</div>
							<div class="ribbon-wrapper small"><div class="ribbon primary">Staff</div></div>
						</li>
						<!-- // Message END -->
						
						<?php for ($i=1;$i<=5;$i++): ?>
						<!-- Message -->
						<li>
							<span class="meta glyphicons user single"><i></i> Adrian <span>1 hour ago</span></span>
							<p>Are you available for freelance?</p>
							<div>
								<a href="" class="btn btn-mini btn-inverse">reply</a>
								<a href="" class="glyphicons single bin pull-right" style="margin: 0;"><i></i></a>
								<div class="clearfix"></div>
							</div>
						</li>
						<!-- // Message END -->
						<?php endfor; ?>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- // Messages END -->
		
		</div>
		<!-- // Tabs content END -->
		
	</div>
	<!-- // Column END -->
	
</div>
<!-- // Row END -->

<div class="row-fluid row-merge">
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
	
	</div>
	<!-- // Inner END -->
	
	</div>
</div>
<div class="row-fluid row-merge">

	<!-- 6/12 Column -->
	<div class="span6">
	
		<!-- Upcoming Events Widget -->
		<div class="widget widget-4 margin-bottom-none">
		
			<!-- Widget Heading -->
			<div class="widget-head">
				<h4 class="heading">Upcoming Events</h4>
				<span class="pull-right"><a href="<?php echo getURL(array('calendar')); ?>" class="btn btn-small btn-default">Full Calendar</a></span>
				<div class="clearfix"></div>
			</div>
			<!-- // Widget Heading END -->
			
			<div class="widget-body">
				
				<!-- Datepicker Inline -->
				<div class="datepicker-inline" id="datepicker-inline"></div>
				
				<!-- Buttons -->
				<div class="row-fluid">
					<div class="span6">
						<a href="<?php echo getURL(array('calendar')); ?>" class="btn btn-block btn-small btn-inverse btn-icon glyphicons circle_plus"><i></i> Add event</a>
					</div>
					<div class="span6">
						<a href="<?php echo getURL(array('calendar')); ?>" class="btn btn-block btn-small btn-primary btn-icon glyphicons right_arrow"><i></i> Next</a>
					</div>
				</div>
				<!-- // Buttons END -->
				
			</div>
		</div>
		<!-- // Upcoming Events Widget END -->
		
	</div>
	<!-- // 6/12 Column END -->
	
	<!-- 6/12 Column -->
	<div class="span6">
	
		<!-- Stats Widgets -->
		<div class="widget widget-4 margin-bottom-none">
			<div class="widget-head"><h4 class="heading">Stats widgets <span>with over 400+ icons</span></h4></div>
			<div class="widget-body">
			
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
				
				<div class="separator bottom"></div>
				
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
							<span class="glyphicons camera"><i></i></span>
							<span class="count label label-primary">238</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small">
							<span class="glyphicons notes"><i></i></span>
							<span class="count label label-primary">134</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
				</div>
				<!-- // Row END -->
				
				<div class="separator bottom"></div>
				
				<!-- Row -->
				<div class="row-fluid">
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small margin-bottom-none">
							<span class="glyphicons alarm"><i></i></span>
							<span class="count label label-primary">20</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small margin-bottom-none">
							<span class="glyphicons tags"><i></i></span>
							<span class="count label label-primary">250</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small margin-bottom-none">
							<span class="glyphicons gift"><i></i></span>
							<span class="count label label-primary">238</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
					<div class="span3">
					
						<!-- Stats Widget -->
						<a href="" class="widget-stats small margin-bottom-none">
							<span class="glyphicons car"><i></i></span>
							<span class="count label label-primary">134</span>
						</a>
						<!-- // Stats Widget END -->
						
					</div>
				</div>
				<!-- // Row END -->
				
			</div>
		</div>
		<!-- // Stats Widgets END -->
		
	</div>
	<!-- // 6/12 Column END -->
	
</div>

<!-- Button Widget -->
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
<div class="separator"></div>
<!-- // Button Widget END -->

<div class="innerLR">
	
	<!-- Stats Widgets -->
	<div class="row-fluid">
		<div class="span2">
		
			<!-- Stats Widget -->
			<a href="" class="widget-stats margin-bottom-none">
				<span class="glyphicons shopping_cart"><i></i></span>
				<span class="txt">Sales</span>
				<div class="clearfix"></div>
				<span class="count label label-important">20</span>
			</a>
			<!-- // Stats Widget END -->
			
		</div>
		<div class="span2">
		
			<!-- Stats Widget -->
			<a href="" class="widget-stats margin-bottom-none">
				<span class="glyphicons shield"><i></i></span>
				<span class="txt">Alerts</span>
				<div class="clearfix"></div>
				<span class="count label">25</span>
			</a>
			<!-- // Stats Widget END -->
			
		</div>
		<div class="span2">
		
			<!-- Stats Widget -->
			<a href="" class="widget-stats margin-bottom-none">
				<span class="glyphicons user_add"><i></i></span>
				<span class="txt">Clients</span>
				<div class="clearfix"></div>
				<span class="count label label-warning">33</span>
			</a>
			<!-- // Stats Widget END -->
			
		</div>
		<div class="span2">
		
			<!-- Stats Widget -->
			<a href="" class="widget-stats margin-bottom-none">
				<span class="glyphicons envelope"><i></i></span>
				<span class="txt">Messages</span>
				<div class="clearfix"></div>
				<span class="count label label-primary">265</span>
			</a>
			<!-- // Stats Widget END -->
			
		</div>
		<div class="span2">
		
			<!-- Stats Widget -->
			<a href="" class="widget-stats margin-bottom-none">
				<span class="glyphicons fishes"><i></i></span>
				<span class="txt">Fishes</span>
				<div class="clearfix"></div>
				<span class="count label label-important">13</span>
			</a>
			<!-- // Stats Widget END -->
			
		</div>
		<div class="span2">
		
			<!-- Stats Widget -->
			<a href="" class="widget-stats margin-bottom-none">
				<span class="glyphicons coins"><i></i></span>
				<span class="txt">Earnings</span>
				<div class="clearfix"></div>
				<span class="count label label-success">&euro;292,039.02</span>
			</a>
			<!-- // Stats Widget END -->
			
		</div>
	</div>
	<div class="separator bottom"></div>
	<!-- // Stats Widgets END -->

	<div class="row-fluid">
		<div class="span6">
		
			<!-- Activity/List Widget -->
			<div class="widget" data-toggle="collapse-widget">
			
				<!-- Widget Heading -->
				<div class="widget-head">
					<h4 class="heading glyphicons history"><i></i><?php echo $translate->_('activity'); ?></h4>
					<a href="" class="details pull-right">view all</a>
				</div>
				<!-- // Widget Heading END -->
				
				<div class="widget-body list">
					<ul>
					
						<!-- List item -->
						<li>
							<span>Sales today</span>
							<span class="count">&euro;5,900</span>
						</li>
						<!-- // List item END -->
						
						<!-- List item -->
						<li>
							<span>Some other stats</span>
							<span class="count">36,900</span>
						</li>
						<!-- // List item END -->
						
					</ul>
				</div>
			</div>
			<!-- // Activity/List Widget END -->
			
			<!-- Latest Orders/List Widget -->
			<div class="widget margin-bottom-none" data-toggle="collapse-widget">
			
				<!-- Widget Heading -->
				<div class="widget-head">
					<h4 class="heading"><?php echo $translate->_('Last orders'); ?></h4>
					<a href="" class="details pull-right">view all</a>
				</div>
				<!-- // Widget Heading -->
				
				<div class="widget-body list products">
					<ul>
						
						<!-- List item -->
						<li>
							<span class="img">photo</span>
							<span class="title">10 items<br/><strong>&euro;5,900.00</strong></span>
							<span class="count"></span>
						</li>
						<!-- // List item END -->
						
						<!-- List item -->
						<li>
							<span class="img">photo</span>
							<span class="title">Product name<br/><strong>&euro;2,900</strong></span>
							<span class="count"></span>
						</li>
						<!-- // List item END -->
						
					</ul>
				</div>
			</div>
			<!-- // Latest Orders/List Widget END -->
			
		</div>
		<div class="span6">
		
			<!-- Comments Widget -->
			<div class="widget widget-scroll margin-bottom-none" data-scroll-height="223px" data-toggle="collapse-widget">
			
				<!-- Widget Heading -->
				<div class="widget-head">
					<h4 class="heading glyphicons conversation"><i></i>Comments</h4>
				</div>
				<!-- // Widget Heading END -->
				
				<div class="widget-body">
					<div>
					
						<!-- Media item -->
						<div class="media">
							<img class="media-object pull-left thumb" src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://dummyimage.com/51x51/232323/ffffff&amp;text=photo<?php endif; ?>" alt="">
							<div class="media-body">
								<blockquote>
									  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien. Duis a odio id erat scelerisque fermentum in ut leo. Suspendisse potenti. Nunc semper cursus dui luctus porttitor. Donec facilisis semper magna sit amet ullamcorper. Cras rutrum magna eget risus vulputate congue. Sed sem libero, dignissim sit amet viverra vitae, suscipit sit amet elit. Integer tincidunt risus in metus rhoncus molestie.</p>
									  <small><a href="#" title="">John Doe</a><cite> | client @ Famous Company</cite></small>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
						
						<!-- Media item -->
						<div class="media">
							<img class="media-object pull-right thumb" src="<?php if (DEMO): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://dummyimage.com/51x51/232323/ffffff&amp;text=photo<?php endif; ?>" alt="">
							<div class="media-body">
								<blockquote class="pull-right">
									  <p>In ultricies ante eget tortor euismod vitae molestie eros hendrerit. Cras tristique, orci ac lacinia aliquet, velit risus laoreet lectus, eget sollicitudin metus orci non nulla. Pellentesque ac turpis turpis. Aliquam erat volutpat. Proin semper auctor mauris vel tempor. Ut eget turpis neque. Nam ultricies tortor eu odio ultricies euismod. Nulla rhoncus iaculis felis vulputate euismod. Maecenas sapien arcu, gravida eu tincidunt vel, ultricies ullamcorper neque.</p>
									  <small><a href="#" title="">John Doe</a><cite> | client @ Famous Company</cite></small>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
						
					</div>
				</div>
			</div>
			<!-- // Comments Widget END -->
			
		</div>
	</div>
	<div class="separator bottom"></div>
	
	<!-- Website Traffic Chart -->
	<div class="widget" data-toggle="collapse-widget">
		<div class="widget-head">
			<h4 class="heading glyphicons cardio"><i></i><?php echo $translate->_('website_traffic'); ?></h4>
		</div>
		<div class="widget-body">
			<div id="chart_ordered_bars" style="height: 250px;"></div>
		</div>
	</div>
	<!-- // Website Traffic Chart END -->
	
	<!-- Button Widget -->
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
	<div class="separator bottom"></div>
	<!-- // Button Widget END -->
	
	<div class="row-fluid">
		<div class="span6">
		
			<!-- Stats/List/Sparklines Widget -->
			<div class="widget" data-toggle="collapse-widget">
			
				<!-- Widget Heading -->
				<div class="widget-head">
					<h4 class="heading glyphicons stats"><i></i><?php echo $translate->_('overview'); ?></h4>
				</div>
				<!-- // Widget Heading END -->
				
				<div class="widget-body list">
					<ul>
					
						<!-- List item -->
						<li>
							<span class="count">350,254 <span class="sparkline"></span></span> 
							<?php echo $translate->_('visits'); ?>
						</li>
						<!-- // List item END -->
						
						<!-- List item -->
						<li>
							<span class="count">120,103 <span class="sparkline"></span></span> 
							<?php echo $translate->_('visitors'); ?>
						</li>
						<!-- // List item END -->
						
						<!-- List item -->
						<li>
							<span class="count">5,156,392 <span class="sparkline"></span></span> 
							<?php echo $translate->_('pageviews'); ?>
						</li>
						<!-- // List item END -->
						
					</ul>
				</div>
			</div>
			<!-- Stats/List/Sparklines Widget END -->
			
			<!-- Stats/List/Sparklines Widget -->
			<div class="widget" data-toggle="collapse-widget">
			
				<!-- Widget Heading -->
				<div class="widget-head">
					<h4 class="heading glyphicons heart"><i></i><?php echo $translate->_('interest'); ?></h4>
				</div>
				<!-- // Widget Heading END -->
				
				<div class="widget-body list">
					<ul>
					
						<!-- List item -->
						<li>
							<span class="count">00:01:59 <span class="sparkline"></span></span> 
							<?php echo $translate->_('avg_time'); ?>
						</li>
						<!-- // List item END -->
						
						<!-- List item -->
						<li>
							<span class="count">48% <span class="sparkline"></span></span> 
							<?php echo $translate->_('returning'); ?>
						</li>
						<!-- // List item END -->
						
					</ul>
				</div>
			</div>
			<!-- // Stats/List/Sparklines Widget END -->
			
		</div>
		<div class="span6">
		
			<!-- Traffic Sources Pie Chart -->
			<div class="widget" data-toggle="collapse-widget">
				<div class="widget-head">
					<h4 class="heading glyphicons pie_chart"><i></i><?php echo $translate->_('traffic_sources'); ?></h4>
				</div>
				<div class="widget-body">
					<div id="pie" style="height: 221px;"></div>
				</div>
			</div>
			<!-- // Traffic Sources Pie Chart END -->
			
		</div>
	</div>

	<!-- Google Vizualization DataTable Widget -->
	<div class="widget widget-tabs">
	
		<!-- Widget Heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a class="glyphicons coffe_cup" href="#dataTableSourcesTab" data-toggle="tab"><i></i><?php echo $translate->_('traffic_sources'); ?></a></li>
				<li><a class="glyphicons share_alt" href="#dataTableRefferingTab" data-toggle="tab"><i></i><?php echo $translate->_('referrals'); ?></a></li>
			</ul>
		</div>
		<!-- // Widget Heading END -->
		
		<div class="widget-body">
			<div class="tab-content">
			
				<!-- Sources Tab -->
				<div class="tab-pane active" id="dataTableSourcesTab">
					<div id="dataTableSources"></div>
				</div>
				<!-- // Sources Tab END -->
				
				<!-- Reffering Tab -->
				<div class="tab-pane" id="dataTableRefferingTab">
					<div id="dataTableReffering"></div>
				</div>
				<!-- // Reffering Tab END -->
				
			</div>
		</div>
	</div>
	<!-- // Google Vizualization DataTable Widget END -->
	
</div>