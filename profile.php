<?php include('controller/container.php');
	include('include/header.php');
	$id = $_SESSION['userid'];
$obj = new container();
 ?>
 <head>
<script>
function validateForm()
{
var a=document.forms["form2"]["id"].value;
var x=document.forms["form2"]["addressone"].value;
var y=document.forms["form2"]["addresstwo"].value;
var z=document.forms["form2"]["city"].value;
var q=document.forms["form2"]["state"].value;
var w=document.forms["form2"]["postal_code"].value;
var e=document.forms["form2"]["phone"].value;
if (a==null ||a=="" || x==null || x=="" || y==null || y=="" || z==null 
|| z=="" || q==null || q=="" ||  w==null || w=="" || e==null || e=="")
{
alert("Please fill all the inputs");
return false;
}
else{
	$.post("controller/value.php", {id: a,addressone: x, addresstwo: y,city: z,state: q,postal_code: w,phone: e},
   function(data) {
	//alert("Data Loaded: " + data);
	var form = document.forms['form2'];
	var elements = form.elements;
	for (var i = 0, len = elements.length; i < len; ++i) {
	elements[i].readOnly = true;
	document.getElementById('second_div').innerHTML='PENDING VERIFICATION';
		document.getElementById('second_div').className = 'second btn btn-dark-beige btn-block';
	}
	});
}
}
window.onload = function () {
    var address = document.forms["form2"]["addressone"].value;
    if(!address == '' || address == null) {
		var form = document.forms['form2'];
		var elements = form.elements;
		for (var i = 0, len = elements.length; i < len; ++i) {
		elements[i].readOnly = true;
		document.getElementById('second_div').innerHTML='PENDING VERIFICATION';
		document.getElementById('second_div').className = 'second btn btn-dark-beige btn-block';
		}
	}
	else {
		var form = document.forms['form2'];
		var elements = form.elements;
		for (var i = 0, len = elements.length; i < len; ++i) {
		elements[i].readOnly = false;
	}
}
}
</script>
</head>
<div class="main-container inner"><!-- start: PAGE -->
	<div class="main-content">
		<div class="container">
			<div class="panel panel-white">
				<div class="panel-body" >
					<div class="demo-main">
						<div class="row">
							<div class="col-md-12" style="text-align:center;"><br> <br>
								<h1>My Profile</h1>
							</div>
						</div><br>
						<div class="alert alert-success">
							<div class="row">
								<div class="col-md-12" style="text-align:center;">
									<h4><b>Complete your user profile to increase your limits.</h4><div class="my"> <small>You may only have one profile. If you have more than one account, you need to link them rather than submit multiple profiles.</small></b></div>
								</div>
							</div><br><br>
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-4">
								<?php
								$sql = $obj->user_details($id);
								while($row = mysql_fetch_array($sql)){
								?>
								<form role="form" action="controller/value.php" method="post" onsubmit="return submitform()" name="form1" class="form-horizontal">
									<div class="user-left">
										<div class="form-group">
											<label class="col-sm-4 control-label">Email</label>
											<div class="col-sm-7">
												<div class="my"><?php echo $row['u_email']; ?></div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-4 control-label"> <small>First Name </small> </label>
											<div class="col-sm-7">
												<input type="text" size="25" id="user_first_name" name="user_first_name" value="<?php echo $row['uf_name']; ?>" placeholder="Text Field">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-4 control-label"> <small>Last Name </small> </label>
											<div class="col-sm-7">
												<input type="text" size="25"id="user_last_name" name="user_last_name" value="<?php echo $row['ul_name']; ?>" placeholder="Text Field">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-4 control-label"> <small>Country </small> </label>
											<div class="col-sm-7">
											<select style="width:215px;" name='country' id='country'>
												<?php 
												$country = $obj->country_list();
												while($code = mysql_fetch_array($country)){
												?>
												<option value="<?php echo $code['country_value'] ?>"<? if($code['country_value'] == $row['country']) echo 'selected'; ?>><?php echo $code['country_name'] ?></option>
												<?php } ?>
											</select>
											</div>
										</div>
									</div>
								</form>
								</div>
								<div class="col-md-5"><h4><b>Level 1 Verification</b></h4>
									<div class="my">Daily withdrawal limit $2,000 USD equivalent</div> <br>
										<div class="col-md-7">
											<button class="btn btn-dark-green btn-block"> Complete </button>
										</div><br><br>
									<div class="my"> <small>Changes to this information may require your account to be re-verified</small></div>
								</div>
							</div>
							<hr class="hr"/>
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-4">
									<form role="form" action="controller/value.php" method="post" onsubmit="return submitform()" name="form2" class="form-horizontal">
										<div class="user-left">
											<div class="form-group">
												<label class="col-sm-4 control-label"> <small>Street Address: </small></label>
												<div class="col-sm-7">
												<input type="hidden" name="id" value="<?php echo $id; ?>"/>
													<input type="text" size="25" id="addressone" value="<?php echo $row['street_address']; ?>"  name="addressone">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"><small> Street Address2: </small></label>
												<div class="col-sm-7">
													<input type="text" size="25" id="addresstwo" name="addresstwo" value="<?php echo $row['street_address2']; ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"><small> City </small></label>
												<div class="col-sm-7">
													<input type="text" size="25" id="city" name="city" value="<?php echo $row['city']; ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"><small> State </small></label>
												<div class="col-sm-7">
													<input type="text" size="25" id="state" name="state" value="<?php echo $row['state']; ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"> <small>Postal Code:</small> </label>
												<div class="col-sm-7">
													<input type="text" size="25" id="postal_code" name="postal_code" value="<?php echo $row['postal_code']; ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"> <small>Phone Number:</small> </label>
												<div class="col-sm-7">
													<input type="tel" size="19" id="phone" name="phone" placeholder="" value="<?php echo $row['phone']; ?>">
												</div>
											</div>
										</div>
									</form>
								</div>
								<?php } ?>
								<div class="col-md-5"><h4><b>Level 2 Verification</b></h4>
									<div class="my">Daily withdrawal limit $7,000 USD equivalent</div> <br>
									<div class="col-md-7">
										<button id="second_div" class="btn btn-light-grey btn-block"> InComplete </button>
									</div>
								</div>
							</div><hr class="hr">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-4">
									<form role="form" action="controller/value.php" method="post" onsubmit="return submitform()" name="form3" class="form-horizontal">
										<div class="user-left">
											<div class="form-group connected-group">
												<div class="row"><div class="col-md-1"></div>
													<div class="col-md-3"> <label class="control-label"> <small>Date of Birth</small> </label></div>
													<div class="col-md-2">
														<select name="dd" id="dd" class="form-control" >
															<option value="">DD</option>
															<option value="01">1</option>
															<option value="02">2</option>
															<option value="03">3</option>
															<option value="04">4</option>
															<option value="05">5</option>
															<option value="06">6</option>
															<option value="07">7</option>
															<option value="08">8</option>
															<option value="09">9</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
															<option value="13">13</option>
															<option value="14">14</option>
															<option value="15">15</option>
															<option value="16">16</option>
															<option value="17">17</option>
															<option value="18">18</option>
															<option value="19">19</option>
															<option value="20">20</option>
															<option value="21">21</option>
															<option value="22">22</option>
															<option value="23">23</option>
															<option value="24">24</option>
															<option value="25">25</option>
															<option value="26">26</option>
															<option value="27">27</option>
															<option value="28">28</option>
															<option value="29">29</option>
															<option value="30">30</option>
															<option value="31">31</option>
														</select>
													</div>
													<div class="col-md-2">
														<select name="mm" id="mm" class="form-control" >
															<option value="">MM</option>
															<option value="01">1</option>
															<option value="02">2</option>
															<option value="03">3</option>
															<option value="04">4</option>
															<option value="05">5</option>
															<option value="06">6</option>
															<option value="07">7</option>
															<option value="08">8</option>
															<option value="09">9</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
														</select>
													</div>
													<div class="col-md-2">
														<select name="mm" id="yyyy" class="form-control" >
															<option value="">YYYY</option>
															<option value="01">1991</option>
															<option value="02">1992</option>
															<option value="03">1993</option>
															<option value="04">1994</option>
															<option value="05">1995</option>
															<option value="06">1996</option>
															<option value="07">1997</option>
															<option value="08">1998</option>
															<option value="09">1999</option>
															<option value="10">2000</option>
															<option value="11">2001</option>
															<option value="12">2002</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"> SSN/Passport ID:	</label>
												<div class="col-sm-7">
													<input type="text" maxlength="10" size="25" id="passport_id" name="passport_id">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"> Scan of Photo ID: </label>
													<div class="col-sm-7">
														<input type="file"  name='photoiesc' id='photoiesc' >
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label"> Picture of yourself holding Photo ID: <span class="symbol required"></span> </label>
													<div class="col-sm-7">
														<input type="file" name="photoid" id="photoid">
													</div>
												</div>
										</div>
									</form>
								</div>
								<div class="col-md-5"><h4><b>Level 3 Verification</b></h4>
									<div class="my">Daily withdrawal limit $25,000 USD equivalent</div><br>
									<div class="col-md-7">
										<button class="btn btn-light-grey btn-block"> InComplete </button>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-5"> 
									<div class="form-actions">
								        <label for="remember" class="checkbox-inline">
										<input type="checkbox" class="black remember" id="remember" name="remember">
								        <div class="my">I agree to the Terms of Use.</div>
								        </label>
								    </div><br>
									<div class="col-md-7">
										<button type="submit" onclick="javascript: validateForm()" name="update_profile" class="btn btn-dark-green"> <b>Save Profile</b> </button>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div><!-- end: PAGE CONTENT-->
		</div>
		<div class="subviews">
			<div class="subviews-container"></div>
		</div>
	</div><!-- end: PAGE -->
</div><!-- end: MAIN CONTAINER --><!-- start: FOOTER -->
<script src="assets/js/intlTelInput.js"></script>
<script>
$("#phone").intlTelInput({
	utilsScript: "assets/js/utils.js"
});
</script>
<?php include('include/footer.php'); ?>