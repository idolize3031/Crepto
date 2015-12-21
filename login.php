<?php include('include/header.php');?>
	<div class="main-container inner">
		<div class="main-content">
			<div class="container"><br><br>
				<div class="panel panel-white">
					<div class="panel-body" >
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-8">
								<h1>SIGN IN TO YOUR ACCOUNT</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="alert alert-success">
					<form action="controller/value.php" method="post" class="form-horizontal">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<div class="user-left">
								<h2><b>Sign In</b></h2>
								<div class="form-group">
									<label class="col-sm-3 control-label"> Email <span class="symbol required"></span>	</label>
									<div class="col-sm-7">
										<input type="email" size="30" class="form-control" id="email" name="user_email" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label"> Password <span class="symbol required"></span>	</label>
									<div class="col-sm-7">
										<input type="password" size="30" class="form-control" id="password" name="user_password" placeholder="Password">
									</div>
								</div>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" name="user_login" class="btn btn-lg btn-success"> Sign In </button> </p>
								<a href="http://idolize.co.in/commodity/forgot.php">Forgot Your Password ?</a>
							</div>
						</div>
						<div class="col-md-4">
							<h2><b> Don't have an account?</b></h2>
							Create one and start trading in minutes.All it takes is a is a few simple steps. <br> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> 
							<a role="button" href="registration.php" class="btn btn-lg btn-success"> Create Your Account </a> </p>
						</div>
					</div>
					</form>
				</div>
			</div><!-- end: PAGE -->
		</div>
	</div>
<?php include('include/footer.php'); ?>