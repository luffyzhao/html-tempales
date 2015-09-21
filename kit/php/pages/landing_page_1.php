<div id="landing_1">
	<h2 class="heading-mosaic center margin-none">AdminKIT - Responsive Landing Page #1</h2>
	<div class="banner">
		<div class="container-960">
			<div class="banner-wrapper banner-1">
				<?php if (DEMO): ?>
				<img src="<?php echo getURL(); ?>theme/images/landing_1_banner_1.jpg" alt="Banner" />
				<?php else: ?>
				<img src="http://dummyimage.com/960x321/000000/151515&amp;text=Banner" alt="Banner" />
				<?php endif; ?>
				<h3>Amazing, Clean &amp; Pixel Perfect</h3>
				<p>Grunge Portrait Of A Beautiful American Retro Female Cadet Dressed In Navy <a href="">Uniform</a> While Saluting In A Military Pin Up Girl Concept On Army Star Background</p>
				<a href="" class="btn btn-large btn-icon btn-primary glyphicons chevron-right"><i></i>Check it out</a>
			</div>
		</div>
	</div>
	<div class="mosaic-line">
		<div class="container-960 right">
			<div class="innerLR"><span class="innerR">Do you like this?</span> <a href="" class="btn btn-success">Learn more</a></div>
		</div>
	</div>
	<div class="container-960">
		<div class="row-fluid row-merge">
			<div class="span6">
				<div class="innerAll">
					<div class="separator bottom"></div>
					<div class="glyphicons glyphicon-large shield">
						<i></i>
						<h4>Fully Responsive Landing Page</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an <br/> <a href="">learn more</a></p>
					</div>
					<div class="separator bottom"></div>
					<div class="glyphicons glyphicon-large group">
						<i></i>
						<h4>User Friendly &amp; Retina Ready Design</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an <br/> <a href="">learn more</a></p>
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="innerAll">
					<div class="banner-1 carousel slide" id="myCarousel">
						<div class="carousel-inner">
							<?php for ($i=1;$i<=5;$i++): ?>
							<!-- Item -->
							<div class="item<?php if ($i == 1): ?> active<?php endif; ?>">
								<div class="row-fluid">
									<div class="span5 relativeWrap">
										<div class="carousel-caption">
											<h4>Get this item now!</h4>
											<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.<br/> <a href="http://themeforest.net/item/adminkit-premium-admin-template/4437902?ref=mosaicpro" target="_blank">Buy AdminKIT</a></p>
										</div>
									</div>
									<div class="span7">
										<img src="<?php echo getURL(); ?>theme/images/gallery-2/<?php echo $i; ?>.jpg" alt="" />
									</div>
								</div>
							</div>
							<!-- // Item END -->
							<?php endfor; ?>
						</div>
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="separator-line margin-none"></div>
	<div class="container-960">
		<div class="row-fluid row-merge">
			<div class="span6">
				<div class="innerAll">
					<h5>News</h5>
					<div class="glyphicons circle_info">
						<i></i>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="social-large">
					<a href="" class="active glyphicons facebook"><i></i>facebook</a>
					<a href="" class="glyphicons google_plus"><i></i>google+</a>
					<a href="" class="glyphicons twitter"><i></i>twitter</a>
					<a href="" class="glyphicons forrst"><i></i>forrst</a>
					<a href="" class="glyphicons skype"><i></i>skype</a>
				</div>
			</div>
		</div>
	</div>
</div>