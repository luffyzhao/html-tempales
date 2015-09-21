	
<?php if ($page != 'login' && $page != 'signup' && $page != 'error' && $page != 'choose'): ?>
		
		</div>
		<!-- // Content END -->
			
		<?php if ($page != 'documentation' && $page != 'landing_page_1' && $page != 'landing_page_2'): ?>
		</div>
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		<?php endif; ?>
		
		<div id="footer" class="hidden-print">
			
			<div class="row-fluid">
				<div class="span8">
					<div class="row-fluid row-menu">
						<div class="span3">
							<ul class="unstyled">
								<li><h4>Get Help</h4>
									<ul class="unstyled">
										<li><a href="<?php echo getURL(array('documentation')); ?>">Documentation</a></li>
										<li><a href="">Aenean augue risus</a></li>
										<li><a href="">Maecenas erat dui</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="span3">
							<ul class="unstyled">
								<li><h4>My account</h4>
									<ul class="unstyled">
										<li><a href="<?php echo getURL(array('my_account')); ?>">Edit account</a></li>
										<li><a href="<?php echo getURL(array('my_account')); ?>">Change password</a></li>
										<li><a href="<?php echo getURL(array('login')); ?>">Logout</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="span3">
							<ul class="unstyled">
								<li><h4>Other Settings</h4>
									<ul class="unstyled">
										<li><a href="">Etiam viverra pharetra</a></li>
										<li><a href="">Lorem ipsum dolor</a></li>
										<li><a href="">Consecteur adipiscing</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="span3">
						
							<?php if ($page == 'blank'): ?>
							<!-- Another menu -->
							<ul class="unstyled">
								<li><h4>Other Settings</h4>
									<ul class="unstyled">
										<li><a href="">Euismod ut magna</a></li>
										<li><a href="">Aenean tristique rutrum</a></li>
										<li><a href="">Vestibulum ante ipsum</a></li>
									</ul>
								</li>
							</ul>
							<!-- // Another menu END -->
							<?php else: ?>
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
							<?php endif; ?>
							
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="right innerAll">
						<p>If you have any problems using <strong><?php echo APP_NAME; ?></strong> <?php echo APP_VERSION; ?> or you have any suggestions or requests, please contact us. We appreciate all your feedback.</p>
						<a class="btn btn-primary btn-icon glyphicons envelope" href="http://www.mosaicpro.biz"><i></i> Contact Support</a>
					</div>
				</div>
			</div>
			<div class="separator bottom"></div>
			
			<!--  Copyright Line -->
			<div class="copy">&copy; 2012 - <?php echo date('Y'); ?> - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/item/adminkit-premium-admin-template/4437902?ref=mosaicpro" target="_blank">Purchase this template on ThemeForest</a> - Current version: <?php echo APP_VERSION; ?> / <a target="_blank" href="http://demo.mosaicpro.biz/adminkit/CHANGELOG">changelog</a></div>
			<!--  End Copyright Line -->
	
		</div>
		<!-- // Footer END -->
		
	</div>
	<!-- // Main Container Fluid END -->
	
	<div id="themer" class="collapse">
		<div class="wrapper">
			<span class="close2">&times; close</span>
			<h4>Themer <span>color options</span></h4>
			<ul>
				<li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
				<li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
				<li>
					<span class="link" id="themer-custom-reset">reset theme</span>
					<span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
				</li>
			</ul>
			<div id="themer-getcode" class="hide">
				<hr class="separator" />
				<button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
				<button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
<?php endif; ?>
<?php if ($page == 'index' || $page == 'gallery_1' || $page == 'gallery_2' || $page == 'shop_client_product'): ?>
	<!-- Modal Gallery -->
	<div id="modal-gallery" class="modal modal-gallery hide fade hidden-print" tabindex="-1">
	    <div class="modal-header">
	        <a class="close" data-dismiss="modal">&times;</a>
	        <h3 class="modal-title"></h3>
	    </div>
	    <div class="modal-body"><div class="modal-image"></div></div>
	    <div class="modal-footer">
	        <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
	        <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
	        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
	        <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
	    </div>
	</div>
	<!-- // Modal Gallery END -->
	
<?php endif; ?>
<?php if ($page == 'tour'): ?>
	<!-- Tour DEMO -->
	<ul id="tlyPageGuide" data-tourtitle="My Tour" class="hidden-print hide">
	
		<!-- Tour Item -->
		<li class="tlypageguide_left" data-tourtarget="#tour-step-1 .span6:last">
			<div>
				<h4>Step 1: 2 Column / Half</h4>
				<p>Here is the item description. The number will appear to the left of the element.</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_right" data-tourtarget="#tour-step-2 .heading">
			<div>
				<h4>Step 2: 3 Column / One Third</h4>
				<p>Here is the item description. The number will appear to the right of the element.</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_top" data-tourtarget="#tour-step-3 .heading">
			<div>
				<h4>Step 3: 2 Column / One Third &amp; Two Third</h4>
				<p>Here is the item description. The number will appear above the element.</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_bottom" data-tourtarget="#tour-step-4 .span3:eq(2)">
			<div>
				<h4>Step 4: 4 Column / One Fourth</h4>
				<p>Here is the item description. The number will appear under the element.</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_right" data-tourtarget="#tour-step-5 .heading">
			<div>
				<h4>Step 5: 2 Column / One Fourth &amp; Three Fourth</h4>
				<p>Here is the item description. The number will appear to the right of the element.</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
	</ul>
	<!-- // Tour DEMO END -->
	
<?php endif; ?>
<?php if (GUIDED_TOUR && $page != 'login' && $page != 'signup' && $page != 'documentation' && $page != 'tour' && $page != 'error' && $page != 'blank' && $page != 'choose'): ?>
	<!-- Guided Tour Ribbon -->
	<div id="guided-tour" class="hidden-phone hidden-tablet"><span id="open-tour">
		<span class="hide">Open</span>Tour</span>
		<span id="close-tour">&times;</span>
	</div>

	<!-- Guided Tour -->
	<ul id="tlyPageGuide" data-tourtitle="Guided Tour" class="hidden-print hide">
	
		<!-- Tour Item -->
		<li class="tlypageguide_left" data-tourtarget=".navbar.main .btn-navbar">
			<div>
				<h4>Toggle menu visibility</h4>
				<p>Show &amp; hide the sidebar menus on desktop, tablet and mobile with the same toggle button on top.</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_right" data-tourtarget=".menu-left .ui-resizable-e, .menu-right .ui-resizable-w">
			<div>
				<h4>Resizable sidebar menu</h4>
				<p>Inspired by real world applications, the sidebar is resizable. When you have a left menu, just drag by the Est margin and by West on right menu. It will remember and keep your preferred sidebar size.</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_top" data-tourtarget="#menu .slim-scroll > ul:first">
			<div>
				<h4>3 Level submenus</h4>
				<p>Supports LOTS of menu items. The sidebar also has a maximum height and becomes scrollable when limits are reached. It's also a nice custom scroll!</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_right" data-tourtarget=".topnav .eyedropper">
			<div>
				<h4>Unlimited Colors</h4>
				<p>Change the color on-page with unlimited color variations. The sky is the limit!</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_right" data-tourtarget="#menu .uniformjs.menu_js">
			<div>
				<h4>Left &amp; right sidebar menus</h4>
				<p>Whether you need a left or right sidebar for your next cool web app, we've got you covered!</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_bottom" data-tourtarget="#menu .uniformjs.layout_js">
			<div>
				<h4>Fixed &amp; Fluid layouts</h4>
				<p>Choose from a 1024px fixed layout to a fully fluid wide screen experience!</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_left" data-tourtarget="#lang_nav">
			<div>
				<h4>Translate System</h4>
				<p>Support for internationalization with easy translation tools.</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_top" data-tourtarget="#content .gallery:first">
			<div>
				<h4>Photo Gallery</h4>
				<p>With three photo gallery layouts and fluid grid compatible, you can make just about anything, from a single product edit page to a fully featured photo album.</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_top" data-tourtarget="#content .widget-activity .filters">
			<div>
				<h4>Turn anything into Tabs</h4>
				<p>Tabs anything! Just add a HTML5 data attribute to any list and voila!</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_left" data-tourtarget="#content .widget-stats:eq(5)">
			<div>
				<h4>Over 400 Stats widgets</h4>
				<p>White widgets, gray widgets, dark widgets, colored widgets, chart widgets, sidebar widgets - we have it all!</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_top" data-tourtarget="#content .widget-scroll:first">
			<div>
				<h4>Turn anything into Nice Scrollable Areas</h4>
				<p>Who likes a standard scroll these days? Wait .. don't answer! We do love nice &amp; custom scollable content.</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
		<!-- Tour Item -->
		<li class="tlypageguide_top" data-tourtarget="#content #pie">
			<div>
				<h4>Awesome charts</h4>
				<p>Lots of charts for your custom analytics pages, from pie charts, bar charts, line charts, stacked charts to even more advanced charts.</p>
			</div>
		</li>
		<!-- // Tour Item END -->
		
	</ul>
	<!-- // Guided Tour END -->

<?php endif; ?>

	<!-- JQuery -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/system/jquery.min.js"></script>
	
	<!-- JQueryUI -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>
	
	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- Modernizr -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/system/modernizr.js"></script>
	
	<!-- Bootstrap -->
	<script src="<?php echo getURL(); ?>bootstrap/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>
	
	<!-- Common Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/common.js?<?php echo time(0); ?>"></script>
	
	<!-- Holder Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/other/holder/holder.js"></script>
	
	<!-- Uniform Forms Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>
	
	<!-- PrettyPhoto -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js"></script>
	
	<!-- Global -->
	<script>
	var basePath = '<?php echo getURL(); ?>';
	</script>

<?php if ($page != 'blank' && $page != 'error' && $page != 'login' && $page != 'signup' && $page != 'choose'): ?>
	<!-- Bootstrap Extended -->
	<script src="<?php echo getURL(); ?>bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
	<script src="<?php echo getURL(); ?>bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script src="<?php echo getURL(); ?>bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php echo getURL(); ?>bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
	<script src="<?php echo getURL(); ?>bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js"></script>
	<script src="<?php echo getURL(); ?>bootstrap/extend/bootbox.js"></script>
	<script src="<?php echo getURL(); ?>bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
	<script src="<?php echo getURL(); ?>bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js"></script>
	
	<!-- Google Code Prettify -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/other/google-code-prettify/prettify.js"></script>
	
	<!-- Gritter Notifications Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js"></script>
	
	<!-- Notyfy Notifications Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js"></script>
	
	<!-- MiniColors Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.js"></script>
	
	<!-- DateTimePicker Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Cookie Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/system/jquery.cookie.js"></script>
	
	<!-- Colors -->
	<script>
	var primaryColor = '<?php echo $primaryColor; ?>',
		dangerColor = '<?php echo $dangerColor; ?>',
		successColor = '<?php echo $successColor; ?>',
		warningColor = '<?php echo $warningColor; ?>',
		inverseColor = '<?php echo $inverseColor; ?>';
	</script>
	
	<!-- Themer -->
	<script>
	var themerPrimaryColor = primaryColor;
	</script>
	<script src="<?php echo getURL(); ?>theme/scripts/demo/themer.js"></script>
	
	<!-- Twitter Feed -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/twitter.js"></script>
	
	<!-- Easy-pie Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.js"></script>
	
	<!-- Sparkline Charts Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/charts/sparkline/jquery.sparkline.min.js"></script>
	
	<!-- Ba-Resize Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/other/jquery.ba-resize.js"></script>
	
<?php endif; ?>
<?php if ($page == 'choose'): ?>
	<!-- Choose Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/choose.js?<?php echo time(0); ?>"></script>
	
<?php endif; ?>
<?php if ($page == 'index'): ?>
	<!-- Dashboard Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/index.js?<?php echo time(0); ?>"></script>
	
<?php endif; ?>
<?php if (GUIDED_TOUR && $page != 'login' && $page != 'signup' && $page != 'documentation' && $page != 'tour' && $page != 'blank' && $page != 'error' && $page != 'choose'): ?>	
	<!-- Pageguide Plugin -->
	<!--[if gt IE 8]><!--><script src="<?php echo getURL(); ?>theme/scripts/plugins/other/pageguide/js/pageguide.js"></script><!--<![endif]-->
	
	<!-- Guided Tour Demo Script -->
	<!--[if gt IE 8]><!--><script src="<?php echo getURL(); ?>theme/scripts/demo/guidedtour.js"></script><!--<![endif]-->
	
<?php endif; ?>
<?php if ($page == 'tour'): ?>	
	<!-- Pageguide Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/other/pageguide/js/pageguide.js"></script>
	
	<!-- Tour Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/tour_demo.js"></script>
	
<?php endif; ?>
<?php if ($page == 'widgets'): ?>
	<!-- Widgets Page Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/widgets.js?<?php echo time(0); ?>"></script>

<?php endif; ?>	
<?php if ($page == 'form_validator'): ?>
	<!-- jQuery Validate Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/forms/jquery-validation/dist/jquery.validate.min.js"></script>
	
	<!-- Form Validator Page Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/form_validator.js"></script>

<?php endif; ?>
<?php if ($page == 'form_elements'): ?>
	<!-- ColorPicker -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/color/farbtastic/farbtastic.js"></script>
	
	<!-- Select2 Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/forms/select2/select2.js"></script>
	
	<!-- Form Elements Page Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/form_elements.js"></script>

<?php endif; ?>
<?php if ($page == 'index' || $page == 'finances' || $page == 'charts'): ?>
	<!-- Google JSAPI -->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		
	<!--  Flot Charts Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/charts/flot/jquery.flot.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/charts/flot/jquery.flot.pie.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/charts/flot/jquery.flot.tooltip.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/charts/flot/jquery.flot.selection.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/charts/flot/jquery.flot.resize.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/charts/flot/jquery.flot.orderBars.js"></script>
	
	<!-- Charts Helper Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/charts.helper.js?<?php echo time(0); ?>"></script>
	
<?php endif; ?>
<?php if ($page == 'charts'): ?>
	<!-- Charts Page Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/charts.js?<?php echo time(0); ?>"></script>
	
<?php endif; ?>
<?php if ($page == 'finances'): ?>
	<!-- Finances Page Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/finances.js?<?php echo time(0); ?>"></script>
	
<?php endif; ?>
<?php if ($page == 'calendar'): ?>
	<!-- Calendar Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/calendars/fullcalendar/fullcalendar/fullcalendar.js"></script>
	
	<!-- Calendar Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/calendar.js"></script>

<?php endif; ?>	
<?php if ($page == 'tables'): ?>	
	<!-- DataTables Tables Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/tables/DataTables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/tables/DataTables/media/js/DT_bootstrap.js"></script>
	
	<!-- Tables Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/tables.js"></script>

<?php endif; ?>
<?php if (MENU_RESIZABLE && $page != 'blank' && $page != 'error' && $page != 'login' && $page != 'signup' && $page != 'choose'): ?>
	<!-- Optional Resizable Sidebars -->
	<!--[if gt IE 8]><!--><script src="<?php echo getURL(); ?>theme/scripts/demo/resizable.js?<?php echo time(0); ?>"></script><!--<![endif]-->
	
<?php endif; ?>
<?php if ($page == 'index' || $page == 'gallery_1' || $page == 'gallery_2' || $page == 'shop_client_product'): ?>
	<!-- Bootstrap Image Gallery -->
	<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
	<script src="<?php echo getURL(); ?>bootstrap/extend/bootstrap-image-gallery/js/bootstrap-image-gallery.min.js" type="text/javascript"></script>

<?php endif; ?>
<?php if ($page == 'maps_vector'): ?>
	<!-- jVectorMaps Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
	
	<!-- Vector Maps data -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jvectormap/data/gdp-data.js"></script>
	
	<!-- Vector Maps maps -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jvectormap/maps/jquery-jvectormap-us-aea-en.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jvectormap/maps/jquery-jvectormap-de-merc-en.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jvectormap/maps/jquery-jvectormap-fr-merc-en.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jvectormap/maps/jquery-jvectormap-es-merc-en.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jvectormap/maps/jquery-jvectormap-us-lcc-en.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jvectormap/maps/mall-map.js"></script>
	
	<!-- Vector Maps Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/maps_vector.js?<?php echo time(0); ?>"></script>

<?php endif; ?>
<?php if ($page == 'maps_google'): ?>
	<!-- jquery-ui-map Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jquery-ui-map/ui/jquery.ui.map.js" type="text/javascript"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jquery-ui-map/ui/jquery.ui.map.extensions.js" type="text/javascript"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jquery-ui-map/ui/jquery.ui.map.services.js" type="text/javascript"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jquery-ui-map/ui/jquery.ui.map.microformat.js" type="text/javascript"></script>
	
	<!-- Google Maps API -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	
	<!-- Addons -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/maps/jquery-ui-map/addons/markerclustererplus/markerclusterer.min.js" type="text/javascript"></script>
	
	<!-- Google Maps Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/maps_google.js?<?php echo time(0); ?>"></script>

<?php endif; ?>
<?php if ($page == 'index'): ?>
	<script>
	//Load the Visualization API and the table/core chart package.
	google.load('visualization', '1.0', {'packages':['table', 'corechart']});
	
	// Set a callback to run when the Google Visualization API is loaded.
	google.setOnLoadCallback(charts.traffic_sources_dataTables.init);
	</script>

<?php endif; ?>
<?php if ($page == 'file_managers'): ?>
	<!-- Third party script for BrowserPlus runtime (Google Gears included in Gears runtime now) -->
	<script src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>

	<!-- Load plupload and all it's runtimes and finally the jQuery queue widget -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/forms/plupload/js/plupload.full.js"></script>
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/forms/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>
	
	<!-- Dropzone -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/forms/dropzone/dropzone.min.js"></script>
	
	<!-- File Managers Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/file_managers.js?<?php echo time(0); ?>"></script>
	
<?php endif; ?>
<?php if ($page == 'form_wizards'): ?>
	<!-- Bootstrap Form Wizard Plugin -->
	<script src="<?php echo getURL(); ?>bootstrap/extend/twitter-bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
	
	<!-- Form Wizards Page Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/form_wizards.js"></script>

<?php endif; ?>
<?php if ($page == 'modals'): ?>
	<!-- Modals Page Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/modals.js"></script>

<?php endif; ?>
<?php if ($page == 'notifications'): ?>
	<!-- Notifications Page Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/notifications.js"></script>

<?php endif; ?>
<?php if ($page == 'sliders'): ?>
	<!-- jQuery Mousewheel Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/other/jquery-mousewheel/jquery.mousewheel.min.js"></script>

	<!-- jQRangeSlider Plugin -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/sliders/jQRangeSlider/jQAllRangeSliders-withRuler-min.js"></script>
	
	<!-- Sliders Page Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/sliders.js"></script>

<?php endif; ?>
<?php if ($page == 'gallery_2'): ?>
	<!-- Masonry -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/gallery/masonry/jquery.masonry.min.js"></script>
	
	<!-- Gallery #2 Page Demo Script -->
	<script src="<?php echo getURL(); ?>theme/scripts/demo/gallery_2.js"></script>

<?php endif; ?>
</body>
</html>