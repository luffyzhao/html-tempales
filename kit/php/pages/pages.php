<!-- Breadcrumb -->
<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('site_pages'); ?></li>
</ul>
<div class="separator bottom"></div>
<!-- // Breadcrumb END -->

<!-- Heading -->
<div class="heading-buttons">
	<h3><?php echo $translate->_('site_pages'); ?></h3>
	<div class="buttons pull-right">
		<a href="" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> <?php echo $translate->_('add_page'); ?></a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->

<div class="innerLR">
	<?php $pages = array('Home Page', 'About us', 'Photo Gallery', 'Contact us', 'Services', 'Events', 'Testimonials', 'Our Blog', 'Custom Page', 'Opening Hours'); ?>
	
	<!-- Table -->
	<table class="table table-bordered table-condensed table-striped table-vertical-center checkboxs js-table-sortable">
		<thead>
			<tr>
				<th style="width: 1%;" class="uniformjs"><input type="checkbox" /></th>
				<th style="width: 1%;" class="center"><?php echo $translate->_('no_crt'); ?></th>
				<th><?php echo $translate->_('title'); ?></th>
				<th style="width: 1%;" class="center"><?php echo $translate->_('drag'); ?></th>
				<th class="center"><?php echo $translate->_('author'); ?></th>
				<th class="right" colspan="3"><?php echo $translate->_('actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php $authors = array('Admin', 'MosaicPro', 'Guest'); ?>
			<?php $actions = array('<span class="label label-block label-important">created</span>', '<span class="label label-block label-inverse">updated</span>'); ?>
			<?php foreach($pages as $pk => $p): ?>
			<!-- Table row -->
			<tr class="selectable">
				<td class="center uniformjs"><input type="checkbox" /></td>
				<td class="center"><?php echo $pk + 1; ?></td>
				<td><strong><?php echo $p; ?></strong></td>
				<td class="center js-sortable-handle"><span class="glyphicons btn-action single move" style="margin-right: 0;"><i></i></span></td>
				<td class="center important"><?php echo $authors[mt_rand(0,2)]; ?></td>
				<td class="center" style="width: 80px;">22 Jan 2013</td>
				<td class="center" style="width: 80px;"><?php echo $actions[mt_rand(0,1)]; ?></td>
				<td class="center" style="width: 60px;">
					<a href="#" class="btn-action glyphicons pencil btn-success"><i></i></a>
					<a href="#" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
				</td>
			</tr>
			<!-- // Table row END -->
			<?php endforeach; ?>
		</tbody>
	</table>
	<!-- // Table END -->
	
	<!-- With selected options -->
	<div class="separator top form-inline small">
		<div class="pull-left checkboxs_actions hide">
			<label class="strong"><?php echo $translate->_('with_selected'); ?>:</label>
		<select class="selectpicker" data-style="btn-default btn-small">
			<option>Action</option>
			<option>Action</option>
			<option>Action</option>
		</select>
	</div>
	<!-- // With selected options END -->
	
	<!-- Pagination -->
	<div class="pagination pull-right" style="margin: 0;">
			<ul>
				<li class="disabled"><a href="#">&laquo;</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- // Pagination END -->
	
</div>