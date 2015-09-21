<!-- Filter -->
<div class="filter-bar dark margin-bottom-none border-none hidden-print">
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

<h3 class="heading-mosaic">Invoice</h3>
<div class="innerLR shop-client-products cart invoice">

	<table class="table table-invoice">
		<tbody>
			<tr>
				<td style="width: 58%;">
					<div class="media">
						<img class="media-object pull-left thumb" src="http://3.s3.envato.com/files/53054377/avatar-adminkit.jpg" alt="Logo" />
						<div class="media-body hidden-print">
							<div class="alert alert-primary">
								<strong>Note:</strong><br/>
								This page is optimized for print. Try print the invoice and check out the preview.
								For example, this note will not be visible.
							</div>
						</div>
					</div>
				</td>
				<td class="right">
					<div class="innerL">
						<h3>#12345678 / <?php echo date('d M Y'); ?></h3>
						<button type="button" data-toggle="print" class="btn btn-default btn-icon glyphicons print hidden-print"><i></i> Print invoice</button>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="separator bottom"></div>
	<div class="well margin-none">
		<table class="table table-invoice">
			<tbody>
				<tr>
					<td style="width: 50%; border-right: 1px solid #e5e5e5;">
						<p class="lead">Company information</p>
						<h2>Apple Inc.</h2>
						<address class="margin-none">
							<strong>1 Infinite Loop</strong><br/>
							Cupertino, CA 95014<br/>
							408.996.1010<br/>
							<abbr title="Work email">e-mail:</abbr> <a href="mailto:#">company@mybiz.com</a><br /> 
							<abbr title="Work Phone">phone:</abbr> (012) 345-678-901<br/>
							<abbr title="Work Fax">fax:</abbr> (012) 678-132-901
						</address>
					</td>
					<td class="right">
						<p class="lead">Client information</p>
						<h2>John Doe</h2>
						<address class="margin-none">
							<strong>Business manager</strong> at 
							<strong><a href="#">Business</a></strong><br> 
							<abbr title="Work email">e-mail:</abbr> <a href="mailto:#">john.doe@mybiz.com</a><br /> 
							<abbr title="Work Phone">phone:</abbr> (012) 345-678-901<br/>
							<abbr title="Work Fax">fax:</abbr> (012) 678-132-901
							<div class="separator line"></div>
							<p class="margin-none"><strong>Note:</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique rutrum libero, vel bibendum nunc.</p>
						</address>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<table class="table table-bordered table-primary table-striped table-vertical-center">
		<thead>
			<tr>
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
			<tr>
				<td class="center"><?php echo $i; ?></td>
				<td>
					<div class="media">
						<span class="media-object pull-left"><img class="thumb" src="theme/images/gallery-2/1.jpg" width="80" alt=""></span>
						<div class="media-body">
							<h5>Product name goes here <span>Additional info</span></h5>
							Size: <span class="label">3-4 Years</span>
							Color: <span class="label">Blue Navy</span>
						</div>
					</div>
				</td>
				<td class="center">1</td>
				<td class="center">&dollar;1,000.00</td>
				<td class="center">&dollar;119.00</td>
				<td class="center">&dollar;1,119.00</td>
			</tr>
			<!-- // Cart item END -->
			<?php endfor; ?>
			
		</tbody>
	</table>
	<div class="separator bottom"></div>
	
	<!-- Row -->
	<div class="row-fluid">
	
		<!-- Column -->
		<div class="span5">
			<div class="box-generic">
				<p class="margin-none"><strong>Note:</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique rutrum libero, vel bibendum nunc.</p>
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
						<td class="right">Total:</td>
						<td class="right strong">&dollar;1,195.95</td>
					</tr>
					<tr class="hidden-print">
						<td colspan="2"><button type="submit" class="btn btn-block btn-primary btn-icon glyphicons right_arrow"><i></i>Proceed to Payment</span></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- // Column END -->
		
	</div>
	<!-- // Row END -->
	
</div>