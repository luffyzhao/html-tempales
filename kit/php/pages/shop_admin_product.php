<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('online_shop'); ?></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('add_product'); ?></li>
</ul>
<div class="separator bottom"></div>
<!-- // Breadcrumb END -->

<!-- Heading -->
<div class="heading-buttons">
	<h3><?php echo $translate->_('add_product'); ?><span> | Online Shop</span></h3>
	<div class="buttons pull-right">
		<a href="" class="btn btn-default btn-icon glyphicons share"><i></i> <?php echo $translate->_('preview'); ?></a>
		<a href="" class="btn btn-primary btn-icon glyphicons ok_2"><i></i> <?php echo $translate->_('save'); ?></a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->

<div class="innerLR">

	<!-- Widget -->
	<div class="widget widget-tabs">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a href="#productDescriptionTab" data-toggle="tab" class="glyphicons font"><i></i><?php echo $translate->_('description'); ?></a></li>
				<li><a href="#productPhotosTab" data-toggle="tab" class="glyphicons picture"><i></i><?php echo $translate->_('photos'); ?></a></li>
				<li><a href="#productAttributesTab" data-toggle="tab" class="glyphicons adjust_alt"><i></i><?php echo $translate->_('custom_attributes'); ?></a></li>
				<li><a href="#productPriceTab" data-toggle="tab" class="glyphicons table"><i></i><?php echo $translate->_('qty_and_price'); ?></a></li>
				<li><a href="#productSeoTab" data-toggle="tab" class="glyphicons podium"><i></i>SEO</a></li>
			</ul>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
			<div class="tab-content">
			
				<!-- Description -->
				<div class="tab-pane active" id="productDescriptionTab">
				
					<!-- Row -->
					<div class="row-fluid">
					
						<!-- Column -->
						<div class="span3">
							<strong><?php echo $translate->_('product_title'); ?></strong>
							<p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle"><?php echo $translate->_('title'); ?></label>
							<input type="text" id="inputTitle" class="span6" value="" placeholder="Enter product title ..." />
							<div class="separator"></div>
						</div>
						<!-- // Column END -->
						
					</div>
					<!-- // Row END -->
					
					<hr class="separator bottom" />
					
					<!-- Row -->
					<div class="row-fluid">
					
						<!-- Column -->
						<div class="span3">
							<strong><?php echo $translate->_('description'); ?></strong>
							<p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="textDescription"><?php echo $translate->_('description'); ?></label>
							<textarea id="textDescription" class="wysihtml5" style="width: 96%;" rows="5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</textarea>
						</div>
						<!-- // Column END -->
						
					</div>
					<!-- // Row END -->
					
				</div>
				<!-- // Description END -->
				
				<!-- Photos -->
				<div class="tab-pane" id="productPhotosTab">
				
				</div>
				<!-- // Photos END -->
				
				<!-- Attributes -->
				<div class="tab-pane" id="productAttributesTab">
				
				</div>
				<!-- // Attributes END -->
				
				<!-- Price -->
				<div class="tab-pane" id="productPriceTab">
				
				</div>
				<!-- // Price END -->
				
				<!-- SEO -->
				<div class="tab-pane" id="productSeoTab">
				
				</div>
				<!-- // SEO END -->
				
			</div>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Bottom buttons -->
	<div class="heading-buttons">
		<div class="buttons pull-right" style="margin: 0;">
			<a href="" class="btn btn-default btn-icon glyphicons share"><i></i> <?php echo $translate->_('preview'); ?></a>
			<a href="" class="btn btn-primary btn-icon glyphicons ok_2"><i></i> <?php echo $translate->_('save'); ?></a>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- // Bottom buttons END -->
	
</div>