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
			<li class="span3 glyphicons cargo"><a href="<?php echo getURL(array('shop_client_products')); ?>"><i></i> Product Listing</a></li>
			<li class="span3 glyphicons circle_info"><a href="<?php echo getURL(array('shop_client_product')); ?>"><i></i> <span>Product Details</span></a></li>
			<li class="span3 glyphicons cart_in active"><a href="<?php echo getURL(array('shop_client_cart')); ?>"><i></i> <span>Shopping Cart</span></a></li>
			<li class="span3 glyphicons pencil"><a href="<?php echo getURL(array('shop_admin_products')); ?>"><i></i> <span>Shop Management</span></a></li>
		</ul>
	</div>
	<!-- // Tabs END -->
	
	<!-- Shopping cart -->
	<div class="shop-client-products cart">
	
		<!-- With selected actions -->
		<div class="checkboxs_actions hide form-inline small pull-right">
			<label class="strong"><?php echo $translate->_('with_selected'); ?>:</label>
			<select class="selectpicker" data-style="btn-default btn-small">
				<option>Action</option>
				<option>Action</option>
				<option>Action</option>
			</select>
			<div class="separator bottom"></div>
		</div>
		<div class="clearfix"></div>
		<!-- // With selected actions END -->
		
		<!-- Cart table -->
		<table class="table table-bordered table-primary table-striped table-vertical-center checkboxs js-table-sortable">
			<thead>
				<tr>
					<th style="width: 1%;" class="uniformjs"><input type="checkbox" /></th>
					<th style="width: 1%;" class="center"><?php echo $translate->_('no_crt'); ?></th>
					<th></th>
					<th style="width: 50px;">Qty</th>
					<th style="width: 80px;">Price</th>
					<th style="width: 80px;">VAT</th>
					<th style="width: 80px;">TAX incl.</th>
				</tr>
			</thead>
			<tbody>
			
				<?php for ($i=1;$i<=3;$i++): ?>
				<!-- Cart item -->
				<tr class="selectable">
					<td class="center uniformjs"><input type="checkbox" /></td>
					<td class="center"><?php echo $i; ?></td>
					<td class="product">
						<div class="media">
							<a href="<?php echo getURL(array('shop_client_product')); ?>" class="media-object pull-left"><img class="thumb" src="theme/images/gallery-2/1.jpg" width="80" alt=""></a>
							<div class="media-body">
								<a href="<?php echo getURL(array('shop_client_product')); ?>" class="heading"><h5>Product name goes here</h5><span>Product Category</span></a>
								<span class="col">
									Size:<br/>
									<span class="label">3-4 Years</span>
								</span>
								<span class="col">
									Color:<br/>
									<span class="label">Blue Navy</span>
								</span>
								<div class="clearfix"></div>
							</div>
						</div>
					</td>
					<td class="center"><input type="text" value="1" class="input-block-level" style="margin: 0;" /></td>
					<td class="center">&dollar;1,000.00</td>
					<td class="center">&dollar;119.00</td>
					<td class="center">&dollar;1,119.00</td>
				</tr>
				<!-- // Cart item END -->
				<?php endfor; ?>
				
			</tbody>
		</table>
		<!-- // Cart table END -->
		
		<div class="separator bottom"></div>
		
		<!-- Row -->
		<div class="row-fluid">
		
			<!-- Column -->
			<div class="span5">
				<div class="box-generic center">
					<strong>Discount Code:</strong>
					<div class="separator bottom"></div>
					<input type="text" value="723-WTX31" class="span12" />
					<button class="btn btn-inverse">Apply code</button>
				</div>
			</div>
			<!-- Column END -->
			
			<!-- Column -->
			<div class="span4 offset3">
				<table class="table table-borderless table-condensed cart_total">
					<tbody>
						<tr>
							<td class="right">Subtotal:</td>
							<td class="right strong">&dollar;1,000.00</td>
						</tr>
						<tr>
							<td class="right">Delivery:</td>
							<td class="right strong">&dollar;5.00</td>
						</tr>
						<tr>
							<td class="right">VAT:</td>
							<td class="right strong">&dollar;119.00</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="separator bottom"></div>
								<span class="label center label-block large">Total: &dollar;1,195.95</span>
							</td>
						</tr>
						<tr>
							<td colspan="2"><button type="submit" class="btn btn-block btn-primary btn-icon glyphicons right_arrow"><i></i>Proceed to Payment</span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- // Column END -->
			
		</div>
		<!-- // Row END -->
		
	</div>
	<!-- // Shopping cart END -->
	
</div>