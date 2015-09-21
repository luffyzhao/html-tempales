<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('forms'); ?></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('form_demo'); ?></li>
</ul>
<!-- // Breadcrumb END -->

<h3 class="heading-mosaic"><?php echo $translate->_('my_account'); ?></h3>
<div class="innerLR">

	<!-- Widget -->
	<div class="widget widget-tabs border-bottom-none">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a class="glyphicons edit" href="#account-details" data-toggle="tab"><i></i><?php echo $translate->_('account_details'); ?></a></li>
				<li><a class="glyphicons settings" href="#account-settings" data-toggle="tab"><i></i><?php echo $translate->_('account_settings'); ?></a></li>
			</ul>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
			<form class="form-horizontal" style="margin: 0;">
				<div class="tab-content" style="padding: 0;">
				
					<!-- Tab content -->
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
					<!-- // Tab content END -->
					
					<!-- Tab content -->
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
					<!-- // Tab content END -->
				</div>
			</form>
		</div>
	</div>
	<!-- // Widget END -->
	
</div>