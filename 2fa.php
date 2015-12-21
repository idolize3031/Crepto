<?php include('include/header.php'); ?>
<div class="main-container inner">
	<div class="main-content">
		<div class="container"><br/><br/>
			<div class="panel panel-white">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<h1>TWO-FACTOR AUTHENTICATION (2FA) IS <span class="text-red">DISABLED</span></h1>
						</div>
					</div>
				</div>
				<div class="alert alert-success">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<form role="form" class="form-horizontal">
								<div class="user-left">
									<h4> <b>Two Factor Authentication Disabled</b> </h4>
									<div class="my">
										For extra account security, you can turn on two-factor
										authentication (2FA).<br><br> Poloniex uses Google Authenticator for
										2FA. In order to use 2FA, scan the QR code to the right into
										the Google Authenticator app on your phone, or enter the
										16-digit key that appears under the QR code. Input the
										six-digit code provided by the Google Authenticator app and
										your account password below, then click "Enable 2FA".<br> <br> Before
										turning on 2FA, write down the 16-digit key and put keep it
										in a safe place. If your phone gets stolen or erased, you
										will need this key to get back into your account!<br><br>
										Username/Email:	<?php echo $username; ?><br>
										Password: <input type="text"><br><br>
										Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"> <br><br> 
										<button class="btn btn-dark-yellow" style="margin-left:100px;"><b>Enable 2FA</b></button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-4">
							<img src="assets/images/chart1.png" alt=""><br>
							<div class="my">Key: NSOF6L43FJYNZQYE</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: PAGE -->
	</div>
</div>
<?php include('include/footer.php'); ?>