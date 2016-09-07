<link href="<?php echo base_url()?>assets/css/form-elements.css" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="container">
			<div class="row">
                <div class="col-sm-5">
                	<div class="form-box">
	                	<div class="form-top">
	                		<div class="form-top-left">
	                			<h3>Login to Let's Lost</h3>
	                    		<p>Enter username and password to log on:</p>
	                		</div>
	                		<div class="form-top-right">
	                			<i class="fa fa-key"></i>
	                		</div>
	                    </div>
	                    <div class="form-bottom">
			                <form role="form" action="<?php echo base_url()?>login/checklogin" method="post" class="login-form">
			                	<div class="form-group">
			                		<label class="sr-only" for="form-username">Email</label>
			                    	<input type="text" name="email" placeholder="Email..." class="form-username form-control" id="form-username">
			                    </div>
			                    <div class="form-group">
			                    	<label class="sr-only" for="form-password">Password</label>
			                    	<input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password">
			                    </div>
			                    <button type="submit" class="btn">Sign in!</button>
			                </form>
			            </div>
		            </div>
		        
		        	<div class="social-login">
	                	<h3>...or login with:</h3>
	                	<div class="social-login-buttons">
		                	<a class="btn btn-link-1 btn-link-1-facebook" href="<?php echo base_url()?>login/loginFB">
		                		<i class="fa fa-facebook"></i> Facebook
		                	</a>
		                	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                		<i class="fa fa-twitter"></i> Twitter
		                	</a>
		                	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                		<i class="fa fa-google-plus"></i> Google Plus
		                	</a>
	                	</div>
	                </div>
	                
                </div>
                
                <div class="col-sm-1 middle-border"></div>
                <div class="col-sm-1"></div>
                	
                <div class="col-sm-5">
                	
                	<div class="form-box">
                		<div class="form-top">
	                		<div class="form-top-left">
	                			<h3>Sign up now</h3>
	                    		<p>Fill in the form below to get instant access:</p>
	                		</div>
	                		<div class="form-top-right">
	                			<i class="fa fa-pencil"></i>
	                		</div>
	                    </div>
			            <form role="form" action="<?php echo base_url()?>login/signup" method="post" class="registration-form">
	                	    <div class="form-bottom">

			                	<div class="form-group">
			                		<label class="sr-only" for="form-first-name">Username</label>
			                    	<input type="text" name="uname" placeholder="Username" class="form-first-name form-control" id="form-first-name">
			                    </div>
			                    <div class="form-group">
			                    	<label class="sr-only" for="form-last-name">Fullname</label>
			                    	<input type="text" name="fullname" placeholder="Name" class="form-last-name form-control" id="form-last-name">
			                    </div>
			                    <div class="form-group">
			                    	<label class="sr-only" for="form-email">Email</label>
			                    	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
			                    </div>
			                    <div class="form-group">
			                    	<label class="sr-only" for="form-email">Password</label>
			                    	<input type="password" name="pass" placeholder="Password..." class="form-email form-control" id="form-password">
			                    </div>
			                    <div class="form-group">
			                    	<label class="sr-only" for="form-email">Confirm Password</label>
			                    	<input type="password" name="confirm_pass" placeholder="Confirm Password..." class="form-email form-control" id="form-cpassword">
			                    </div>
			                    <div class="form-group">
			                    	<div class="g-recaptcha" data-sitekey="6LcBsyYTAAAAAD_D1iuhLN2GFhW-oy0wXrsOxkzU"></div>
			                    </div>
			                    <button type="submit" class="btn">Sign me up!</button>
			            	</div>
						</form>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>