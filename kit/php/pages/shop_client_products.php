<!-- Filter -->
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
<!-- // Filter END -->

<h3 class="heading-mosaic"><?php echo $translate->_('online_shop'); ?></h3>
<div class="innerLR">

	<!-- Tabs -->
	<div class="tabsbar tabsbar-2 active-fill">
		<ul class="row-fluid row-merge">
			<li class="span3 glyphicons cargo active"><a href="<?php echo getURL(array('shop_client_products')); ?>"><i></i> Product Listing</a></li>
			<li class="span3 glyphicons circle_info"><a href="<?php echo getURL(array('shop_client_product')); ?>"><i></i> <span>Product Details</span></a></li>
			<li class="span3 glyphicons cart_in"><a href="<?php echo getURL(array('shop_client_cart')); ?>"><i></i> <span>Shopping Cart</span></a></li>
			<li class="span3 glyphicons pencil"><a href="<?php echo getURL(array('shop_admin_products')); ?>"><i></i> <span>Shop Management</span></a></li>
		</ul>
	</div>
	<!-- // Tabs END -->
	
	<!-- Products -->
	<div class="shop-client-products list">
		<ul class="row-fluid">
		
			<?php for ($i=1;$i<=9;$i++): ?>
			<!-- Product item -->
			<li class="span4">
				<a href="<?php echo getURL(array('shop_client_product')); ?>">
					<span class="pull-right glyphicons shopping_cart"><i></i></span>
					<h5>Highest Heel Classic</h5>
					<span class="price">Price: &dollar;400</span>
					<span class="clearfix"></span>
					<span class="img">
						<span class="icon"></span>
					</span>
				</a>
			</li>
			<!-- // Product item END -->
			<?php endfor; ?>
			
		</ul>
	</div>
	<!-- // Products END -->
	
</div>