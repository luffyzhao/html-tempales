<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('online_shop'); ?></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('products'); ?></li>
</ul>
<div class="separator bottom"></div>
<!-- // Breadcrumb END -->

<!-- Heading -->
<div class="heading-buttons">
	<h3><?php echo $translate->_('products'); ?><span> | Online Shop</span></h3>
	<div class="buttons pull-right">
		<a href="<?php echo getURL(array('shop_client_products')); ?>" class="btn btn-default btn-icon glyphicons inbox"><i></i> <?php echo $translate->_('Client interface'); ?></a>
		<a href="<?php echo getURL(array('shop_admin_product')); ?>" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> <?php echo $translate->_('add_product'); ?></a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->

<div class="innerLR">

	<!-- Row -->
	<div class="row-fluid">
	
		<!-- Column -->
		<div class="span4">
		
			<!-- Widget -->
			<div class="widget">
				
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading"><?php echo $translate->_('Last order'); ?></h4>
					<a href="" class="details pull-right">view all</a>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body list products">
					<ul>
						<li>
							<span class="img">photo</span>
							<span class="title">10 items<br/><strong>&euro;5,900</strong></span>
							<span class="count"></span>
						</li>
					</ul>
				</div>
			</div>
			<!-- // Widget END -->
			
		</div>
		<!-- // Column END -->
		
		<!-- Column -->
		<div class="span4">
		
			<!-- Widget -->
			<div class="widget">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading"><?php echo $translate->_('Best seller'); ?></h4>
					<a href="" class="details pull-right">view all</a>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body list products">
					<ul>
						<li>
							<span class="img">photo</span>
							<span class="title">Product name<br/><strong>&euro;2,900</strong></span>
							<span class="count"></span>
						</li>
					</ul>
				</div>
			</div>
			<!-- // Widget END -->
			
		</div>
		<!-- // Column END -->
		
		<!-- Column -->
		<div class="span4">
		
			<!-- Widget -->
			<div class="widget">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading"><?php echo $translate->_('Promotion'); ?></h4>
					<a href="" class="details pull-right">view all</a>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body list products">
					<ul>
						<li>
							<span class="img">photo</span>
							<span class="title">Product name<br/><strong>&euro;1,800</strong></span>
							<span class="count"></span>
						</li>
					</ul>
				</div>
			</div>
			<!-- // Widget END -->
			
		</div>
		<!-- // Column END -->
		
	</div>
	<!-- // Row END -->

	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading glyphicons list"><i></i> <?php echo $translate->_('manage_products'); ?></h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Total products & Sort by options -->
			<div class="form-inline separator bottom small">
				<?php echo $translate->_('total_products'); ?>: 26
				<span class="pull-right">
					<label class="strong"><?php echo $translate->_('sort_by'); ?>:</label>
					<select class="selectpicker" data-style="btn-default btn-small">
						<option>Option</option>
						<option>Option</option>
						<option>Option</option>
					</select>
				</span>
			</div>
			<!-- // Total products & Sort by options END -->
			
			<!-- Filters -->
			<div class="filter-bar">
				<form>
					
					<!-- From -->
					<div>
						<label><?php echo $translate->_('from'); ?>:</label>
						<div class="input-append">
							<input type="text" name="from" id="dateRangeFrom" class="input-mini" value="08/05/13" style="width: 53px;" />
							<span class="add-on glyphicons calendar"><i></i></span>
						</div>
					</div>
					<!-- // From END -->
					
					<!-- To -->
					<div>
						<label><?php echo $translate->_('to'); ?>:</label>
						<div class="input-append">
							<input type="text" name="to" id="dateRangeTo" class="input-mini" value="08/18/13" style="width: 53px;" />
							<span class="add-on glyphicons calendar"><i></i></span>
						</div>
					</div>
					<!-- // To END -->
					
					<!-- Min -->
					<div>
						<label>Min:</label>
						<div class="input-append">
							<input type="text" name="from" class="input-mini" style="width: 30px;" value="100" />
							<span class="add-on glyphicons euro"><i></i></span>
						</div>
					</div>
					<!-- // Min END -->
					
					<!-- Max -->
					<div>
						<label>Max:</label>
						<div class="input-append">
							<input type="text" name="from" class="input-mini" style="width: 30px;" value="500" />
							<span class="add-on glyphicons euro"><i></i></span>
						</div>
					</div>
					<!-- // Max END -->
					
					<!-- Select -->
					<div>
						<label><?php echo $translate->_('select'); ?>:</label>
						<select name="from" style="width: 80px;">
							<option>Some option</option>
							<option>Other option</option>
							<option>Some other option</option>
						</select>
					</div>
					<!-- // Select END -->
					
					<div class="clearfix"></div>
				</form>
			</div>
			<!-- // Filters END -->
			
			<!-- Products table -->
			<table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable">
				<thead>
					<tr>
						<th style="width: 1%;" class="uniformjs"><input type="checkbox" /></th>
						<th style="width: 1%;" class="center"><?php echo $translate->_('no_crt'); ?></th>
						<th><?php echo $translate->_('title'); ?></th>
						<th style="width: 1%;" class="center"><?php echo $translate->_('drag'); ?></th>
						<th class="center"><?php echo $translate->_('preview'); ?></th>
						<th class="center"><?php echo $translate->_('stock'); ?></th>
						<th class="center"><?php echo $translate->_('price'); ?></th>
						<th class="center" style="width: 60px;"><?php echo $translate->_('actions'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php $prod = array('Dolor Ipsum', 'Ipsum Sit', 'Amet Dolor'); ?>
					<?php for($i=1;$i<=10;$i++): ?>
					<tr class="selectable<?php if ($i == 2 || $i == 3): ?> selected<?php endif; ?>">
						<td class="center uniformjs"><input type="checkbox"<?php if ($i == 2 || $i == 3): ?> checked="checked"<?php endif; ?> /></td>
						<td class="center"><?php echo $i; ?></td>
						<td class="important">Lorem <?php echo $prod[mt_rand(0,2)]; ?></td>
						<td class="center js-sortable-handle"><span class="glyphicons btn-action single move" style="margin-right: 0;"><i></i></span></td>
						<td class="center"><span class="glyphicons btn-action single picture" style="margin-right: 0;"><i></i></span><?php echo mt_rand(1,3); ?> photos</td>
						<td class="center form-inline small">
							<input type="text" style="width: 30px;" value="<?php echo mt_rand(1,10); ?>" />
						</td>
						<td class="center">&euro;<?php echo mt_rand(10,50); ?></td>
						<td class="center">
							<a href="<?php echo getURL(array('product_edit')); ?>" class="btn-action glyphicons pencil btn-success"><i></i></a>
							<a href="#" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
						</td>
					</tr>
					<?php endfor; ?>
				</tbody>
			</table>
			<!-- // Products table END -->
			
			<!-- Options -->
			<div class="separator top form-inline small">
			
				<!-- With selected actions -->
				<div class="pull-left checkboxs_actions hide">
					<label class="strong"><?php echo $translate->_('with_selected'); ?>:</label>
					<select class="selectpicker dropup" data-style="btn-default btn-small">
						<option>Action</option>
						<option>Action</option>
						<option>Action</option>
					</select>
				</div>
				<!-- // With selected actions END -->
				
				<!-- Pagination -->
				<div class="pagination pagination-small pull-right" style="margin: 0;">
					<ul>
						<li class="disabled"><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
				<!-- // Pagination END -->
				
			</div>
			<!-- // Options END -->
			
		</div>
	</div>
	<!-- // Widget END -->
	
</div>