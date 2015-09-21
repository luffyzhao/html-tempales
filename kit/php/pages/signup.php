<!-- Wrapper -->
<div id="login">

	<!-- Box -->
	<div class="form-signin">
		<h3>Create Account <span>Already a member? <a href="<?php echo getURL(array('login')); ?>">Sign in</a></span></h3>
		
		<!-- Form -->
		<form method="post" action="<?php echo getURL(array('index')); ?>">
		
		<!-- Row -->
		<div class="row-fluid row-merge">
		
			<!-- Column -->
			<div class="span6">
				<div class="inner">
					<label class="strong">Username</label>
					<input type="text" class="input-block-level" placeholder="Your Username"/>
					<label class="strong">Password</label>
					<input type="password" class="input-block-level" placeholder="Your Password"/>
					<label class="strong">Confirm Password</label>
					<input type="password" class="input-block-level" placeholder="Confirm Password"/>
				</div>
			</div>
			<!-- // Column END -->
			
			<!-- Column -->
			<div class="span6">
				<div class="inner">
					<label class="strong">Email</label>
					<input type="text" class="input-block-level" placeholder="Your Email Address"/>
					<label class="strong">Confirm Email</label>
					<input type="text" class="input-block-level" placeholder="Confirm Your Email Address"/>
					<a href="<?php echo getURL(array('index')); ?>" class="btn btn-icon-stacked btn-block btn-success glyphicons user_add"><i></i><span>Create account and</span><span class="strong">Join <?php echo APP_NAME; ?> now</span></a>
					<p>Having troubles? <a href="<?php echo getURL(array('faq')); ?>">Get Help</a></p>
				</div>
			</div>
			<!-- // Column END -->
			
		</div>
		<!-- // Row END -->
		
		</form>
		<!-- // Form END -->
		
		<div class="ribbon-wrapper"><div class="ribbon success">register</div></div>
	</div>
	<!-- // Box END -->
	
</div>
<!-- // Wrapper END -->