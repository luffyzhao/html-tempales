<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('finances'); ?></li>
</ul>
<div class="separator bottom"></div>
<!-- // Breadcrumb END -->

<!-- Heading -->
<div class="heading-buttons">
	<h3><?php echo $translate->_('finances'); ?></h3>
	<div class="buttons pull-right">
		<a href="" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> <?php echo $translate->_('add_record'); ?></a>
		<a href="" class="btn btn-default btn-icon glyphicons history"><i></i> <?php echo $translate->_('history'); ?></a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->

<div class="innerLR">

	<!-- Widget -->
	<div class="widget finances_summary">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading glyphicons alarm"><i></i> <?php echo $translate->_('summary'); ?></h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Filters -->
			<div class="filter-bar">
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
			
			<!-- Row -->
			<div class="row-fluid">
			
				<!-- Column -->
				<div class="span4">
					<div class="well">
						<?php echo $translate->_('total_expenses'); ?>
						<strong>&euro;32,156.00</strong>
					</div>
					<div class="separator bottom center">
						<span class="glyphicons flash standard"><i></i></span>
					</div>
					<div class="well">
						<?php echo $translate->_('total_income'); ?>
						<strong>&euro;122,134.00</strong>
					</div>
				</div>
				<!-- // Column END -->
				
				<!-- Column -->
				<div class="span8">
					<div id="chart_simple" style="height: 290px;"></div>
				</div>
				<!-- // Column END -->
				
			</div>
			<!-- // Row END -->
			
			<a href="" class="glyphicons list single"><i></i> <?php echo $translate->_('view_details'); ?></a>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading glyphicons fire"><i></i> <?php echo $translate->_('transactions'); ?></h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
		
			<!-- Table -->
			<table class="table table-condensed table-vertical-center table-thead-simple">
				<thead>
					<tr>
						<th class="center" style="width: 1%"><?php echo $translate->_('no_crt'); ?></th>
						<th><?php echo $translate->_('transaction'); ?></th>
						<th class="center"><?php echo $translate->_('date'); ?></th>
						<th class="center"><?php echo $translate->_('amount'); ?></th>
						<th class="right"><?php echo $translate->_('actions'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$trans = array('ThemeForest', 'Bank of Ireland', 'Amazon Web Services', 'Supplier Abc Xyz');
					$type = array(
						'<span class="glyphicons up_arrow btn-success btn-action single"><i></i></span>',
						'<span class="glyphicons down_arrow btn-danger btn-action single"><i></i></span>'	
					); 
					?>
					
					<?php for($i=1;$i<=6;$i++): ?>
					<!-- Item -->
					<tr class="selectable">
						<td class="center"><?php echo $i; ?></td>
						<td class="important"><?php echo $type[mt_rand(0,1)] . $trans[mt_rand(0,3)]; ?></td>
						<td class="center"><span class="label label-important">23 Jan 2013</span></td>
						<td class="center">&euro;<?php echo number_format(mt_rand(100,800),2); ?></td>
						<td class="right actions">
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
			
			<div class="separator top"><a href="" class="glyphicons list single"><i></i> <?php echo $translate->_('show_all'); ?></a></div>
		</div>
	</div>
	<!-- // Widget END -->
	
</div>