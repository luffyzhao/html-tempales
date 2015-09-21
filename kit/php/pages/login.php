<!-- Wrapper -->
<div id="login">

	<!-- Box -->
	<div class="form-signin">
		<h3>Sign in to Your Account</h3>
		
		<!-- Row -->
		<div class="row-fluid row-merge">
		
			<!-- Column -->
			<div class="span7">
				<div class="inner">
				
					<!-- Form -->
					<form method="post" action="<?php echo getURL(array('index')); ?>">
						<label class="strong">Username or Email</label>
						<input type="text" class="input-block-level" placeholder="Your Username or Email address"/> 
						<label class="strong">Password <a class="password" href="">forgot your password?</a></label>
						<input type="password" class="input-block-level" placeholder="Your Password"/> 
						<div class="uniformjs"><label class="checkbox"><input type="checkbox" value="remember-me">Remember me</label></div>
						<div class="row-fluid">
							<div class="span5 center">
								<button class="btn btn-block btn-primary" type="submit">Sign in</button>
							</div>
							<div class="span2 center">or</div>
							<div class="span5 center">
								<a href="<?php echo getURL(array('signup')); ?>" class="btn btn-block btn-info">Sign up</a>
							</div>
						</div>
					</form>
					<!-- // Form END -->
					
				</div>
			</div>
			<!-- // Column END -->
			
			<!-- Column -->
			<div class="span5">
				<div class="inner center">
					<p>Alternatively</p>
					<a href="<?php echo getURL(array('index')); ?>" class="btn btn-icon-stacked btn-block btn-facebook glyphicons facebook"><i></i><span>Join using your</span><span class="strong">Facebook Account</span></a>
					<p>or</p>
					<a href="<?php echo getURL(array('index')); ?>" class="btn btn-icon-stacked btn-block btn-google glyphicons google_plus"><i></i><span>Join using your</span><span class="strong">Google Account</span></a>
					<p>Having troubles? <a href="<?php echo getURL(array('faq')); ?>">Get Help</a></p>
				</div>
			</div>
			<!-- // Column END -->
			
		</div>
		<!-- // Row END -->
		
		<div class="ribbon-wrapper"><div class="ribbon primary">members</div></div>
	</div>
	<!-- // Box END -->
	
</div>
<!-- // Wrapper END -->