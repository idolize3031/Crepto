<?php include('include/header.php');?>
<script type="text/javascript" language="javascript">
	function resetpass() {
		var str=true;
		document.getElementById("np").innerHTML="";
		document.getElementById("rnp").innerHTML="";

		var newp=document.getElementById("password1").value;
		if(newp=="") {
			document.getElementById("np").innerHTML="<font color='red'>Please Enter Password.</font>";
			document.getElementById("password1").focus();
			return false;	
		}
		var repass=document.getElementById("password2").value;
		if(repass=="") {
			document.getElementById("rnp").innerHTML="<font color='red'>Please Enter Password.</font>";
			document.getElementById("password2").focus();
			return false;	
		}
		if(newp!=repass) {
			document.getElementById("rnp").innerHTML="<font color='red'>Your Passwords are Not Match.</font>";
			document.getElementById("password2").focus();
			return false;
		}
	}
</script>
<div class="main-container inner">
	<div class="main-content">
		<div class="container"><br><br>
			<div class="panel panel-white">
				<div class="panel-body" >
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-8">
							<h1>Reset Password</h1>
							<span id="msg"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="alert alert-success">
				<form action="" onSubmit="return resetpass();" method="post" class="form-horizontal">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="user-left">
							<div class="form-group">
								<label class="col-sm-3 control-label"> New Password <span class="symbol required"></span>	</label>
								<div class="col-sm-7">
									<input type="password" class="form-control" placeholder="New Password" id="password1" name="password1" style="width:250px;margin-left:30px"/>
									<span id="np"></span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label"> confirm Password <span class="symbol required"></span>	</label>
								<div class="col-sm-7">
									<input type="password" class="form-control" placeholder="Re-type Password" id="password2" name="password2" style="width:250px;margin-left:30px" />
									<span id="rnp"></span>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-8">
									<button type="submit" class="btn btn-blue" name="repassword"> Submit </button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<h2><b> Forget Your Password?</b></h2>
						<p>You can use this form to reset it.</p>
						<p>Once submitted, you will recieve an email with further instructions.</p>
					</div>
				</div>
				</form>
			</div>
		</div><!-- end: PAGE -->
	</div>
</div>
<?php
require("controller/container.php");
	if(isset($_POST['repassword'])) {
	$id=$_GET['id'];
	$password=$_POST['password1'];
	$password1=MD5($_POST['password2']);
	$sql = $obj-> forgetpassword($id,$password1);
	if($sql) { ?>
		<script>
			window.location.href = 'http://idolize.co.in/commodity/login.php';
		</script>
	<?php } } ?>
<?php include('include/footer.php'); ?>