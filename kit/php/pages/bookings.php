<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('bookings'); ?></li>
</ul>
<div class="separator bottom"></div>
<!-- // Breadcrumb END -->

<!-- Heading -->
<div class="heading-buttons">
	<h3><?php echo $translate->_('bookings'); ?></h3>
	<div class="buttons pull-right">
		<a href="" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> <?php echo $translate->_('add_booking'); ?></a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->

<div class="innerLR">

	<!-- Filters -->
	<div class="filter-bar margin-bottom-none">
		<form>
		
			<!-- Filter -->
			<div>
				<label><?php echo $translate->_('from'); ?>:</label>
				<div class="input-append">
					<input type="text" name="from" id="dateRangeFrom" class="input-mini" value="08/05/13" style="width: 53px;" />
					<span class="add-on glyphicons calendar"><i></i></span>
				</div>
			</div>
			<!-- // Filter END -->
			
			<!-- Filter -->
			<div>
				<label><?php echo $translate->_('to'); ?>:</label>
				<div class="input-append">
					<input type="text" name="to" id="dateRangeTo" class="input-mini" value="08/18/13" style="width: 53px;" />
					<span class="add-on glyphicons calendar"><i></i></span>
				</div>
			</div>
			<!-- // Filter END -->
			
			<!-- Filter -->
			<div>
				<label>Min:</label>
				<div class="input-append">
					<input type="text" name="from" class="input-mini" style="width: 30px;" value="100" />
					<span class="add-on glyphicons euro"><i></i></span>
				</div>
			</div>
			<!-- // Filter END -->
			
			<!-- Filter -->
			<div>
				<label>Max:</label>
				<div class="input-append">
					<input type="text" name="from" class="input-mini" style="width: 30px;" value="500" />
					<span class="add-on glyphicons euro"><i></i></span>
				</div>
			</div>
			<!-- // Filter END -->
			
			<!-- Filter -->
			<div>
				<label><?php echo $translate->_('select'); ?>:</label>
				<select name="from" style="width: 80px;">
					<option>Some option</option>
					<option>Other option</option>
					<option>Some other option</option>
				</select>
			</div>
			<div class="clearfix"></div>
			<!-- // Filter END -->
			
		</form>
	</div>
	<!-- // Filters END -->
	
	<!-- Widget -->
	<div class="widget" style="margin-top: -1px;">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading glyphicons calendar"><i></i> Friday, 14 December 2012</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Total bookings & sort by options -->
			<div class="separator bottom form-inline small">
				<?php echo $translate->_('total_bookings'); ?>: 26
				<span class="pull-right">
					<label class="strong">Sort by:</label>
					<select class="selectpicker" data-style="btn-default btn-small">
						<option>Option</option>
						<option>Option</option>
						<option>Option</option>
					</select>
				</span>
			</div>
			<!-- // Total bookings & sort by options END -->
			
			<!-- Table -->
			<table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs">
				<thead>
					<tr>
						<th style="width: 1%;" class="uniformjs"><input type="checkbox" /></th>
						<th class="center"><?php echo $translate->_('no_crt'); ?></th>
						<th class="center"><?php echo $translate->_('time'); ?></th>
						<th><?php echo $translate->_('client'); ?></th>
						<th class="center"><?php echo $translate->_('phone'); ?></th>
						<th class="center"><?php echo $translate->_('amount'); ?></th>
						<th class="center"><?php echo $translate->_('heard_from'); ?></th>
						<th class="center" style="width: 90px;"><?php echo $translate->_('actions'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php $heard = array('Google Search', 'Friend', 'Radio', 'Flyer'); ?>
					<?php $location = array('Hollywood', 'Las Vegas', 'New York', 'Miami'); ?>
					
					<?php for($i=1;$i<=4;$i++): ?>
					<!-- Item -->
					<tr class="selectable<?php if ($i == 2): ?> selected<?php endif; ?>">
						<td class="center uniformjs"><input type="checkbox"<?php if ($i == 2): ?> checked="checked"<?php endif; ?> /></td>
						<td class="center"><?php echo $i; ?></td>
						<td class="center">1<?php echo $i; ?>:00</td>
						<td><strong>Lorem Ipsum</strong><br/><small><?php echo $translate->_('location'); ?>: <?php echo $location[mt_rand(0,3)]; ?></small></td>
						<td class="center">0740000000</td>
						<td class="center">&euro;<?php echo mt_rand(10,50); ?></td>
						<td class="center"><?php echo $heard[mt_rand(0,3)]; ?></td>
						<td class="center">
							<a href="#" class="btn-action glyphicons eye_open btn-info"><i></i></a>
							<a href="#" class="btn-action glyphicons pencil btn-success"><i></i></a>
							<a href="#" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
						</td>
					</tr>
					<!-- // Item END -->
					<?php endfor; ?>
					
				</tbody>
			</table>
			<!-- // Table END -->
			
			<!-- Options -->
			<div class="separator top form-inline small">
			
				<!-- With selected actions -->
				<div class="pull-left checkboxs_actions hide">
					<label class="strong"><?php echo $translate->_('with_selected'); ?>:</label>
					<select class="selectpicker" data-style="btn-default btn-small">
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
	<!-- // Widget -->
	
	<!-- Row -->
	<div class="row-fluid">
	
		<!-- Column -->
		<div class="span4">
		
			<!-- Widget -->
			<div class="widget widget-3">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading"><span class="glyphicons coins"><i></i></span><?php echo $translate->_('total_amount'); ?></h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body large">
					&euro;15,368.50
				</div>
				
				<!-- Widget footer -->
				<div class="widget-footer align-right">
					<a href="#" class="glyphicons print"><i></i> <?php echo $translate->_('print'); ?></a>
					<a href="#" class="glyphicons list"><i></i> <?php echo $translate->_('view'); ?></a>
				</div>
				<!-- // Widget footer END -->
				
			</div>
			<!-- // Widget END -->
			
		</div>
		<!-- // Column END -->
		
		<!-- Column -->
		<div class="span4">
		
			<!-- Widget -->
			<div class="widget widget-3">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading"><span class="glyphicons user_add"><i></i></span><?php echo $translate->_('new_clients'); ?></h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body large">
					21
				</div>
				
				<!-- Widget footer -->
				<div class="widget-footer">
					<a href="#" class="glyphicons print"><i></i> <?php echo $translate->_('print'); ?></a>
					<a href="#" class="glyphicons list"><i></i> <?php echo $translate->_('view'); ?></a>
				</div>
				<!-- // Widget footer END -->
				
			</div>
			<!-- // Widget END -->
			
		</div>
		<!-- // Column -->
		
		<!-- Column -->
		<div class="span4">
		
			<!-- Widget -->
			<div class="widget widget-3">
			
				<!-- Widget heading -->
				<div class="widget-head">
					<h4 class="heading"><span class="glyphicons user_remove"><i></i></span><?php echo $translate->_('cancellations'); ?></h4>
				</div>
				<!-- // Widget heading END -->
				
				<div class="widget-body large cancellations">
					4 
					<span>
						<span><?php echo $translate->_('lost'); ?></span>
						<span>&euro;89.00</span>
					</span>
				</div>
				
				<!-- Widget footer -->
				<div class="widget-footer align-center">
					<a href="#" class="glyphicons print"><i></i> <?php echo $translate->_('print'); ?></a>
					<a href="#" class="glyphicons list"><i></i> <?php echo $translate->_('view'); ?></a>
				</div>
				<!-- // Widget footer END -->
				
			</div>
			<!-- // Widget END -->
			
		</div>
		<!-- // Column -->
		
	</div>
	<!-- // Row END -->
	
</div>