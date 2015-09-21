<!-- Filters -->
<div class="filter-bar dark margin-bottom-none border-none">
	<form>
		<div>
			<div class="input-append">
				<input type="text" name="from" class="input-mini" style="width: 100px;" placeholder="Quick search .." />
				<button type="submit" class="add-on glyphicons search"><i></i></button>
			</div>
		</div>
		<div class="clearfix"></div>
	</form>
</div>
<!-- // Filters END -->

<h3 class="heading-mosaic"><?php echo $translate->_('online_shop'); ?></h3>
<div class="innerLR">

	<!-- Tabs -->
	<div class="tabsbar tabsbar-2 active-fill">
		<ul class="row-fluid row-merge">
			<li class="span3 glyphicons cargo"><a href="<?php echo getURL(array('shop_client_products')); ?>"><i></i> Product Listing</a></li>
			<li class="span3 glyphicons active circle_info"><a href="<?php echo getURL(array('shop_client_product')); ?>"><i></i> <span>Product Details</span></a></li>
			<li class="span3 glyphicons cart_in"><a href="<?php echo getURL(array('shop_client_cart')); ?>"><i></i> <span>Shopping Cart</span></a></li>
			<li class="span3 glyphicons pencil"><a href="<?php echo getURL(array('shop_admin_products')); ?>"><i></i> <span>Shop Management</span></a></li>
		</ul>
	</div>
	<!-- // Tabs END -->
	
	<!-- Product details -->
	<div class="shop-client-products product-details">
	
		<!-- Heading -->
		<div class="heading-buttons">
			<h1>Product name goes here</h1>
			<div class="buttons pull-right">
				<a href="<?php echo getURL(array('shop_client_products')); ?>" class="btn glyphicons btn-icon btn-default btn-small left_arrow"><i></i> back to catalog</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- // Heading END -->
		
		<!-- Row -->
		<div class="row-fluid">
		
			<!-- Product Gallery -->
			<div class="span7" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
				<a class="thumb" href="<?php echo getURL(); ?>theme/images/gallery-2/1.jpg" data-gallery="gallery"><img src="<?php echo getURL(); ?>theme/images/gallery-2/1.jpg" alt="photo" /></a>
				<div class="separator bottom"></div>
				<div class="gallery gallery-2">
					<ul class="row-fluid">
						<?php for($i=1;$i<=4;$i++): ?>
						<li class="span3"><a class="thumb" href="<?php echo getURL(); ?>theme/images/gallery-2/<?php echo $i; ?>.jpg" data-gallery="gallery"><img src="<?php echo getURL(); ?>theme/images/gallery-2/<?php echo $i; ?>.jpg" alt="photo" /></a></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>
			<!-- // Product Gallery END -->
			
			<div class="span5">
				<form class="margin-bottom-none form-horizontal">
				
					<!-- Price -->
					<div class="box">
						<div class="control-group">
							<label class="control-label">Price</label>
							<div class="controls"><span class="price">&dollar;1,000.00</span><span class="label large">&dollar;1,119 incl. VAT</span></div>
						</div>
						<div class="ribbon-wrapper"><div class="ribbon primary">50% Off</div></div>
					</div>
					<!-- // Price END -->
					
					<!-- Purchase Options -->
					<div class="box">
						<h5>Options:</h5>
						<div class="control-group">
							<label class="control-label">Select size</label>
							<div class="controls">
								<select class="selectpicker span12" data-style="btn-default btn-small">
									<option>Option</option>
									<option>Option</option>
									<option>Option</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Qty</label>
							<div class="controls"><input type="text" class="span6 input-block-level" value="1" /></div>
						</div>
					</div>
					<!-- // Purchase Options END -->
					
					<!-- Add to cart / Share -->
					<div class="row-fluid">
						<div class="span6"><a href="<?php echo getURL(array('shop_client_cart')); ?>" class="btn btn-icon glyphicons cart_in btn-primary btn-block"><i></i>Add to cart</a></div>
						<div class="span6 right">
							<span class="share">
								Share <a href="" class="glyphicons standard facebook"><i></i></a><a href="" class="glyphicons standard twitter"><i></i></a>
							</span>
						</div>
					</div>
					<!-- // Add to cart / Share END -->
					
				</form>
			</div>
		</div>
		<!-- // Row END -->
		
		<!-- Product description -->
		<div class="box">
			<h5>Product Description</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis porta purus, pulvinar mattis nulla tempus ut. Curabitur quis dui orci. Ut nisi dolor, dignissim a aliquet quis, vulputate id dui. Proin ultrices ultrices ligula.</p> 
			<p>Dictum varius turpis faucibus non. Curabitur faucibus ultrices nunc, nec aliquet leo tempor cursus. Pellentesque sed felis ipsum. Quisque in lacus sed ante malesuada condimentum et a risus.</p>
		</div>
		<!-- // Product description END -->
		
	</div>
	<div class="separator bottom"></div>
	<!-- // Product details END -->
	
	<!-- Product reviews & delivery -->
	<div class="widget widget-tabs widget-quick">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a href="#reviewsTab" data-toggle="tab" class="glyphicons star"><i></i><?php echo $translate->_('Reviews'); ?></a></li>
				<li><a href="#deliveryTab" data-toggle="tab" class="glyphicons car"><i></i><?php echo $translate->_('Delivery'); ?></a></li>
			</ul>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
			<div class="tab-content">
			
				<!-- Delivery Tab -->
				<div class="tab-pane" id="deliveryTab">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis porta purus, pulvinar mattis nulla tempus ut. Curabitur quis dui orci. Ut nisi dolor, dignissim a aliquet quis, vulputate id dui. Proin ultrices ultrices ligula, dictum varius turpis faucibus non. Curabitur faucibus ultrices nunc, nec aliquet leo tempor cursus. Pellentesque sed felis ipsum. Quisque in lacus sed ante malesuada condimentum et a risus. Morbi accumsan euismod rutrum. Etiam vitae turpis eu est lacinia condimentum a sit amet erat. Sed augue turpis, lobortis ac feugiat eget, cursus ac justo.</p>
				</div>
				<!-- // Delivery Tab END -->
				
				<!-- Reviews Tab -->
				<div class="tab-pane active" id="reviewsTab">
				
					<!-- Media item -->
					<div class="media">
						<img class="media-object pull-left thumb" src="theme/images/mrawesome.jpg" alt="">
						<div class="media-body">
							<blockquote>
								  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien. Duis a odio id erat scelerisque fermentum in ut leo. Suspendisse potenti. Nunc semper cursus dui luctus porttitor. Donec facilisis semper magna sit amet ullamcorper. Cras rutrum magna eget risus vulputate congue. Sed sem libero, dignissim sit amet viverra vitae, suscipit sit amet elit. Integer tincidunt risus in metus rhoncus molestie.</p>
								  <small><a href="#" title="">John Doe</a><cite> | client @ Famous Company</cite></small>
							</blockquote>
						</div>
					</div>
					<!-- // Media item END -->
					
				</div>
				<!-- // Reviews Tab END -->
			
			</div>
		</div>
	</div>
	<!-- // Product reviews & delivery END -->
	
</div>