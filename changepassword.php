<?php include('include/header.php'); ?>
<div class="main-container inner">
	<div class="main-content">
		<div class="container"><br/><br/>
			<div class="panel panel-white">
				<div class="panel-body" >
					<div class="row">
						<div class="col-md-12" style="text-align:center;">
							<h1>CHANGE YOUR PASSWORD</h1>
						</div>
					</div>
				</div>
				<div class="alert alert-success">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<form action="controller/value.php" role="form" class="form-horizontal">
								<div class="user-left">
									<div class="form-group">
										<label class="col-sm-5 control-label"> Email: <span class="symbol required"></span> </label>
										<div class="col-sm-7">
											<input type="email" id="email" name="email" placeholder="Email" maxlength="10" size="20" style="padding: 4px 4px;">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-5 control-label"> Old Password: <span class="symbol required"></span> </label>
										<div class="col-sm-7">
											<input type="password" id="password" name="password" placeholder="Old Password" maxlength="10" size="20" style="padding: 4px 4px;">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-5 control-label"> New Password: <span class="symbol required"></span> </label>
										<div class="col-sm-7">
											<input type="password" maxlength="10" size="20" id="password" name="password" placeholder="New Password" style="padding: 4px 4px;">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-5 control-label"> Repeat New Password: <span class="symbol required"></span> </label>
										<div class="col-sm-7">
											<input type="password"  maxlength="10" size="20" id="password" name="password" placeholder="Repeat Password" style="padding: 4px 4px;">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-10">
											<div class="g-recaptcha" data-sitekey="6LeLChITAAAAAOFpIJA1cffah_7vsbEIvELL2D4b"></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-blue" name="repassword"> Submit </button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-4">
							Use this form to change your password.<br><br>
                            Once submitted, you will be logged out and will need to log in with your new password.<br><br>
                            Your password must be at least 8 characters long, but it is HIGHLY recommended that you choose a random, alphanumeric password of at least 32 characters.<br><br>
                            NEVER use a password for an exchange that you use ANYWHERE else.
						</div>
					</div>
				</div>  
			</div>
		</div><!-- end: PAGE -->
	</div>
<?php include('include/footer.php'); ?>