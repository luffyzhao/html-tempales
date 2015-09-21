<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('forms'); ?></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('form_demo'); ?></li>
</ul>
<!-- // Breadcrumb END -->

<h3 class="heading-mosaic"><?php echo $translate->_('Advanced profile'); ?></h3>
<div class="innerLR">

	<!-- Widget -->
	<div class="widget widget-tabs widget-tabs-double-2 border-bottom-none">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a class="glyphicons display" href="#overview" data-toggle="tab"><i></i><?php echo $translate->_('overview'); ?></a></li>
				<li><a class="glyphicons edit" href="#edit-account" data-toggle="tab"><i></i><?php echo $translate->_('Edit account'); ?></a></li>
				<li><a class="glyphicons luggage" href="#projects" data-toggle="tab"><i></i><?php echo $translate->_('Projects'); ?></a></li>
			</ul>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<form class="form-horizontal" style="margin: 0;">
				<div class="tab-content" style="padding: 0;">
				
					<div class="tab-pane active widget-body-regular" id="overview">
					
						<div class="row-fluid row-merge">
							<div class="span3 center">
							
								<div class="innerR">
									<!-- Profile Photo -->
									<a href="" class="thumb"><img<?php if (DEMO): ?> src="<?php echo getURL(); ?>theme/images/mrawesome_large.jpg"<?php else: ?> data-src="holder.js/100%x200"<?php endif; ?> alt="Profile" /></a>
									<div class="separator bottom"></div>
									<!-- // Profile Photo END -->
									
									<!-- Social Icons -->
									<a href="" class="glyphicons standard primary facebook"><i></i></a>
									<a href="" class="glyphicons standard twitter"><i></i></a>
									<a href="" class="glyphicons standard linked_in"><i></i></a>
									<div class="clearfix separator bottom"></div>
									<!-- // Social Icons END -->
									
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
								
							</div>
							<div class="span9">
							
								<div class="row-fluid innerL">
									<div class="span7">
									
										<!-- About -->
										<h4>Mr.Awesome</h4>
										<div class="menubar links primary">
											<ul>
												<li>Website:</li>
												<li><a href="">www.mosaicpro.biz</a></li>
												<li>Other:</li>
												<li><a href="">www.other.biz</a></li>
											</ul>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis porta purus, pulvinar mattis nulla tempus ut. Curabitur quis dui orci. Ut nisi dolor, dignissim a aliquet quis, vulputate id dui. Proin ultrices ultrices ligula, dictum varius turpis faucibus non. Curabitur faucibus ultrices nunc, nec aliquet leo tempor cursus.</p>
										<!-- // About END -->
									
									</div>
									<div class="span5">
								
										<!-- Bio -->
										<h4>Bio <span>Personal information</span></h4>
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
								
								<div class="innerL innerT">
									<div class="alert alert-primary">
										<a class="close" data-dismiss="alert">&times;</a>
										<p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est. Pellentesque at justo urna, eu pharetra tortor. Aenean aliquam, tellus vel suscipit luctus.</p>
									</div>
								</div>
								
								<div class="innerL">
									<div class="row-fluid">
										<div class="span7">
										
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
														
														<?php for ($i=0;$i<=3;$i++): ?>
														<!-- List item -->
														<li>
															<span class="img">photo</span>
															<span class="title">Product name<br/><strong>&euro;2,900</strong></span>
															<span class="count"></span>
														</li>
														<!-- // List item END -->
														<?php endfor; ?>
														
													</ul>
												</div>
											</div>
											<!-- // Latest Orders/List Widget END -->
										
										</div>
										<div class="span5">
											
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
														
														<?php for ($i=0;$i<=1;$i++): ?>
														<!-- List item -->
														<li>
															<span>Some other stats</span>
															<span class="count"><?php echo number_format(mt_rand(10000, 40000)); ?></span>
														</li>
														<!-- // List item END -->
														<?php endfor; ?>
														
													</ul>
												</div>
											</div>
											
											<div class="widget" data-toggle="collapse-widget">
				
												<!-- Widget Heading -->
												<div class="widget-head">
													<h4 class="heading glyphicons history"><i></i><?php echo $translate->_('Widget'); ?></h4>
												</div>
												<!-- // Widget Heading END -->
												
												<div class="widget-body">
													Curabitur quis dui orci. Ut nisi dolor, dignissim a aliquet quis, vulputate id dui. Proin ultrices ultrices ligula, dictum varius turpis faucibus non. Curabitur faucibus ultrices nunc, nec aliquet leo tempor cursus.
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
						</div>
					
					</div>
				
					<!-- Tab content -->
					<div class="tab-pane widget-body-regular" id="edit-account">
					
						<div class="widget widget-tabs widget-tabs-vertical row-fluid row-merge margin-none">
	
							<!-- Widget heading -->
							<div class="widget-head span3">
								<ul>
									<li class="active"><a class="glyphicons pencil" href="#account-details" data-toggle="tab"><i></i><?php echo $translate->_('account_details'); ?></a></li>
									<li><a class="glyphicons settings" href="#account-settings" data-toggle="tab"><i></i><?php echo $translate->_('account_settings'); ?></a></li>
									<li><a class="glyphicons eye_open" href="#privacy-settings" data-toggle="tab"><i></i><?php echo $translate->_('Privacy settings'); ?></a></li>
								</ul>
							</div>
							<!-- // Widget heading END -->
							
							<div class="widget-body span9">
							
								<div class="tab-content">
								<div class="tab-pane active" id="account-details">
							
								<!-- Row -->
								<div class="row-fluid">
								
									<!-- Column -->
									<div class="span6">
									
										<!-- Group -->
										<div class="control-group">
											<label class="control-label"><?php echo $translate->_('first_name'); ?></label>
											<div class="controls">
												<input type="text" value="John" class="span10" />
												<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="First name is mandatory"><i></i></span>
											</div>
										</div>
										<!-- // Group END -->
										
										<!-- Group -->
										<div class="control-group">
											<label class="control-label"><?php echo $translate->_('last_name'); ?></label>
											<div class="controls">
												<input type="text" value="Doe" class="span10" />
												<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Last name is mandatory"><i></i></span>
											</div>
										</div>
										<!-- // Group END -->
										
										<!-- Group -->
										<div class="control-group">
											<label class="control-label"><?php echo $translate->_('date_of_birth'); ?></label>
											<div class="controls">
												<div class="input-append">
													<input type="text" id="datepicker" class="span12" value="13/06/1988" />
													<span class="add-on glyphicons calendar"><i></i></span>
												</div>
											</div>
										</div>
										<!-- // Group END -->
										
									</div>
									<!-- // Column END -->
									
									<!-- Column -->
									<div class="span6">
									
										<!-- Group -->
										<div class="control-group">
											<label class="control-label"><?php echo $translate->_('gender'); ?></label>
											<div class="controls">
												<select class="span12">
													<option><?php echo $translate->_('male'); ?></option>
													<option><?php echo $translate->_('female'); ?></option>
												</select>
											</div>
										</div>
										<!-- // Group END -->
										
										<!-- Group -->
										<div class="control-group">
											<label class="control-label"><?php echo $translate->_('age'); ?></label>
											<div class="controls">
												<input type="text" value="25" class="input-mini" />
											</div>
										</div>
										<!-- // Group END -->
										
									</div>
									<!-- // Column END -->
									
								</div>
								<!-- // Row END -->
								
								<div class="separator line bottom"></div>
								
								<!-- Group -->
								<div class="control-group row-fluid">
									<label class="control-label"><?php echo $translate->_('about_me'); ?></label>
									<div class="controls">
										<textarea id="mustHaveId" class="wysihtml5 span12" rows="5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</textarea>
									</div>
								</div>
								<!-- // Group END -->
								
								<!-- Form actions -->
								<div class="form-actions" style="margin: 0;">
									<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i><?php echo $translate->_('save_changes'); ?></button>
									<button type="button" class="btn btn-icon btn-default glyphicons circle_remove"><i></i><?php echo $translate->_('cancel'); ?></button>
								</div>
								<!-- // Form actions END -->
								
								</div>
								<div class="tab-pane" id="account-settings">
								
									<!-- Row -->
									<div class="row-fluid">
									
										<!-- Column -->
										<div class="span3">
											<strong><?php echo $translate->_('change_password'); ?></strong>
											<p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</div>
										<!-- // Column END -->
										
										<!-- Column -->
										<div class="span9">
											<label for="inputUsername"><?php echo $translate->_('username'); ?></label>
											<input type="text" id="inputUsername" class="span10" value="john.doe2012" disabled="disabled" />
											<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Username can't be changed"><i></i></span>
											<div class="separator"></div>
													
											<label for="inputPasswordOld"><?php echo $translate->_('old_password'); ?></label>
											<input type="password" id="inputPasswordOld" class="span10" value="" placeholder="Leave empty for no change" />
											<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Leave empty if you don't wish to change the password"><i></i></span>
											<div class="separator"></div>
											
											<label for="inputPasswordNew"><?php echo $translate->_('new_password'); ?></label>
											<input type="password" id="inputPasswordNew" class="span12" value="" placeholder="Leave empty for no change" />
											<div class="separator"></div>
											
											<label for="inputPasswordNew2"><?php echo $translate->_('repeat_new_password'); ?></label>
											<input type="password" id="inputPasswordNew2" class="span12" value="" placeholder="Leave empty for no change" />
											<div class="separator"></div>
										</div>
										<!-- // Column END -->
										
									</div>
									<!-- // Row END -->
									
									<div class="separator line bottom"></div>
									
									<!-- Row -->
									<div class="row-fluid">
									
										<!-- Column -->
										<div class="span3">
											<strong><?php echo $translate->_('contact_details'); ?></strong>
											<p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</div>
										<!-- // Column END -->
										
										<!-- Column -->
										<div class="span9">
											<div class="row-fluid">
												<div class="span6">
													<label for="inputPhone"><?php echo $translate->_('phone'); ?></label>
													<div class="input-prepend">
														<span class="add-on glyphicons phone"><i></i></span>
														<input type="text" id="inputPhone" class="input-large" placeholder="01234567897" />
													</div>
													<div class="separator"></div>
														
													<label for="inputEmail">E-mail</label>
													<div class="input-prepend">
														<span class="add-on glyphicons envelope"><i></i></span>
														<input type="text" id="inputEmail" class="input-large" placeholder="contact@mosaicpro.biz" />
													</div>
													<div class="separator"></div>
														
													<label for="inputWebsite">Website</label>
													<div class="input-prepend">
														<span class="add-on glyphicons link"><i></i></span>
														<input type="text" id="inputWebsite" class="input-large" placeholder="http://www.mosaicpro.biz" />
													</div>
													<div class="separator"></div>
												</div>
												<div class="span6">
													<label for="inputFacebook">Facebook</label>
													<div class="input-prepend">
														<span class="add-on glyphicons facebook"><i></i></span>
														<input type="text" id="inputFacebook" class="input-large" placeholder="/mosaicpro" />
													</div>
													<div class="separator"></div>
													
													<label for="inputTwitter">Twitter</label>
													<div class="input-prepend">
														<span class="add-on glyphicons twitter"><i></i></span>
														<input type="text" id="inputTwitter" class="input-large" placeholder="/mosaicpro" />
													</div>
													<div class="separator"></div>
													
													<label for="inputSkype">Skype ID</label>
													<div class="input-prepend">
														<span class="add-on glyphicons skype"><i></i></span>
														<input type="text" id="inputSkype" class="input-large" placeholder="mySkypeID" />
													</div>
													<div class="separator"></div>
													
													<label for="inputYahoo">Yahoo ID</label>
													<div class="input-prepend">
														<span class="add-on glyphicons yahoo"><i></i></span>
														<input type="text" id="inputYahoo" class="input-large" placeholder="myYahooID" />
													</div>
													<div class="separator"></div>
												</div>
											</div>
										</div>
										<!-- // Column END -->
										
									</div>
									<!-- // Row END -->
									
									<!-- Form actions -->
									<div class="form-actions" style="margin: 0;">
										<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i><?php echo $translate->_('save_changes'); ?></button>
									</div>
									<!-- // Form actions END -->
								
								</div>
								<div class="tab-pane" id="privacy-settings">
									<div class="uniformjs">
										<label class="checkbox"><input type="checkbox" checked="checked" /> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
										<label class="checkbox"><input type="checkbox" /> Vivamus et risus vel metus feugiat semper at sed odio.</label>
										<label class="checkbox"><input type="checkbox" /> Aenean bibendum faucibus tellus, et facilisis justo imperdiet vel.</label>
										<div class="alert alert-primary">
											<a class="close" data-dismiss="alert">&times;</a>
											<p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est. Pellentesque at justo urna, eu pharetra tortor. Aenean aliquam, tellus vel suscipit luctus, risus enim ornare tellus, ac ultrices nisi enim sed magna.</p>
										</div>
									</div>
								</div>
								</div>
							
							</div>
						</div>
						
					</div>
					<!-- // Tab content END -->
					
					<!-- Tab content -->
					<div class="tab-pane widget-body-regular" id="projects">
					
						<div class="well">
							<button type="button" class="btn btn-primary btn-icon glyphicons circle_plus pull-right"><i></i>Add project</button>
							<p class="lead margin-none">1024 sales this week</p>
							<div class="clearfix"></div>
						</div>
						
						<table class="table table-primary table-striped table-vertical-center table-projects">
							<thead>
								<tr>
									<th colspan="2">Project</th>
									<th width="100" class="center"></th>
									<th width="100" class="center"></th>
									<th width="140" class="center"></th>
									<th width="120" class="center"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td width="80" class="center"><span class="thumb"><img src="http://2.s3.envato.com/files/50444644/80-avatar.jpg" alt="" /></span></td>
									<td class="important">Smashing - Premium Admin Template</td>
									<td class="center stats"><span>Sales today</span><span class="count">153</span></td>
									<td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
									<td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
									<td class="center"><button type="button" class="btn btn-default">Manage</button></td>
								</tr>
								<tr>
									<td width="80" class="center"><span class="thumb"><img src="http://0.s3.envato.com/files/52347478/admin-avatar-12.jpg" alt="" /></span></td>
									<td class="important">AdminPlus - Premium Bootstrap Admin Template</td>
									<td class="center stats"><span>Sales today</span><span class="count">153</span></td>
									<td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
									<td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
									<td class="center"><button type="button" class="btn btn-default">Manage</button></td>
								</tr>
								<tr>
									<td width="80" class="center"><span class="thumb"><img src="http://2.s3.envato.com/files/50868169/avatar80.jpg" alt="" /></span></td>
									<td class="important">AIR - Responsive Bootstrap Admin Template</td>
									<td class="center stats"><span>Sales today</span><span class="count">153</span></td>
									<td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
									<td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
									<td class="center"><button type="button" class="btn btn-default">Manage</button></td>
								</tr>
								<tr>
									<td width="80" class="center"><span class="thumb"><img src="http://3.s3.envato.com/files/47008628/boot-admin-80_v13.jpg" alt="" /></span></td>
									<td class="important">BootAdmin - All-In-One Admin Responsive Template</td>
									<td class="center stats"><span>Sales today</span><span class="count">153</span></td>
									<td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
									<td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
									<td class="center"><button type="button" class="btn btn-default">Manage</button></td>
								</tr>
							</tbody>
						</table>
						
					</div>
					<!-- // Tab content END -->
				</div>
			</form>
		</div>
	</div>
	<!-- // Widget END -->
	
</div>