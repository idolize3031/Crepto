<?php
include('include/header.php');
include('controller/container.php');
$obj = new container();
?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
function SubmitForm() {
var str=true;
var firstname = $("#user_first_name").val();
var lastname = $("#user_last_name").val();
var email = $("#user_email").val();
var country = $("#country").val();
var password = $("#password_again").val();
if(firstname=="")
{
//document.getElementById("user_first_name").innerHTML="Please enter your first name";
return false;
}
else if
(lastname=="")
{
//document.getElementById("user_last_name").innerHTML="Please enter last name";
return false;
}
else if(email=="")
{
//document.getElementById("user_email").innerHTML="Please enter password";
return false;
}
else if(country=="")
{
//document.getElementById("password_again").innerHTML="Please enter confirm password";
return false;
}
else if(password=="")
{
//document.getElementById("password_again").innerHTML="Please enter confirm password";
return false;
}
else 
{
$.post("controller/submit.php", { fname: firstname, lname: lastname, user_email: email, country: country, password_again: password },
   function(data) {
     //alert("Data Loaded: " + data);
   });
}}
</script>
	<div class="main-container inner"><!-- start: PAGE -->
		<div class="main-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-12"><!-- start: FORM WIZARD PANEL -->
						<div class="panel panel-white">
							<div class="row">
								<div style="text-align:center;" class="col-md-12"><br><br>
									<b><h1>CREATE YOUR ACCOUNT</h1></b>
								</div>
							</div>
							<div class="panel-body">
								<form id="form" role="form" method="post" action="controller/value.php"  class="smart-wizard form-horizontal" >
									<div id="wizard" class="swMain">
										<ul> <li> <a href="#step-1"> <div class="stepNumber"> 1 </div>
												<span class="stepDesc"> Step 1 <br /> <small>Create Your Account</small> </span> </a>
											</li>
											<li> <a href="#step-2"> <div class="stepNumber"> 2 </div>
												<span class="stepDesc"> Step 2 <br /> <small>Validate Your Email </small> </span> </a>
											</li>
											<li> <a href="#step-3"> <div class="stepNumber"> 3 </div> 
												<span class="stepDesc"> Step 3 <br /> <small>Start Trading</small> </span> </a>
											</li>
										</ul>
										<div class="progress progress-xs transparent-black no-radius active">
											<div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress-bar partition-green step-bar">
												<span class="sr-only"> 0% Complete (success)</span>
											</div>
										</div>
									 	<div class="basic_info" id="step-1">
										<div class="alert alert-success">	 	 
											<div class="row">
												<div class="col-md-1"></div> 
												<div class="col-md-5">
													<div class="user-left">
														<div class="form-group">
															<label class="col-sm-3 control-label"> First Name <span class="symbol required"></span> </label>
															<div class="col-sm-7">
																<input type="text" size="30" class="form-control" id="user_first_name" name="fname" placeholder="First Name">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label"> Last Name <span class="symbol required"></span> </label>
															<div class="col-sm-7">
																<input type="text" size="30" class="form-control" id="user_last_name" name="lname" placeholder="Last Name">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label"> Country <span class="symbol required"></span> </label>
															<div class="col-sm-7">
																<select name='country' style="width:250px;" id='country'>
																	<option value="NONE">Select Country...</option>
																	<?php
																		$country = $obj->country_list();
																		while($code = mysql_fetch_array($country)){
																	?>
																	<option value="<?php echo $code['country_value'] ?>"><?php echo $code['country_name'] ?></option>
																	<?php } ?>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label"> Email <span class="symbol required"></span> </label>
															<div class="col-sm-7">
																<input type="email" size="30" class="form-control" id="user_email" name="user_email" placeholder="Email Id">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label"> Password <span class="symbol required"></span> </label>
															<div class="col-sm-7">
																<input type="password" size="30" class="form-control" id="password" name="password" placeholder="Password">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label"> Confirm Password <span class="symbol required"></span> </label>
															<div class="col-sm-7">
																<input type="password" size="30" class="form-control" id="password_again" name="password_again" placeholder="Confirm Password">
															</div>
														</div>														
														<div class="form-group">
															<label class="col-sm-3 control-label"></label>
															<div class="col-sm-7">
																<div class="g-recaptcha" data-sitekey="6LeLChITAAAAAOFpIJA1cffah_7vsbEIvELL2D4b"></div>
															</div>
														</div>														
														<div class="form-group">
															<label class="col-sm-3 control-label"></label>
															<div class="col-sm-7">
																<input type="checkbox" name="checkbox" id="agree"/> I agree to the <a href=" ">Terms of Use</a>.
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-4 col-sm-offset-8">
																<button type="button" id="searchForm" onclick="SubmitForm();" class="btn btn-blue next-step" name="next" > Next </button>
															</div>
														</div>													
													</div>
												</div>
											<div class="col-md-4">
													<b><p>The email address you provide will become your Poloniex ID and will be used for all future communications, including account recovery. Protect your email account like you would your Poloniex account. Sign-ups using throwaway email addresses will be rejected.</p> 
													<p>Phone number is optional, but recommended. It will be used to aid in account recovery should you lose access to your email address or 2FA credentials.</p>
													<p>Your password must be at least 8 characters long, but it is HIGHLY recommended that you choose a random, alphanumeric password of at least 32 characters.</p>
													<p>NEVER use a password for an exchange that you use ANYWHERE else, especially for the email address you sign up with.</p></b>
												</div>
											</div>
										</div>
									</div>
									<div style="display:none" class="second_form" id="step-2">
										<div class="alert alert-success">	 	 
											<div class="jumbotron">
												<div class="row">
													<div class="col-md-4"></div>
													<div class="col-md-8">
														<p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thank you for creating your account.</p>
														<p class="lead"> Please check your email for a confirmation letter. </p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Be sure to check your spam box if it does not arrive within a few minutes.
													</div>
												</div>
											</div> 
										</div>
									</div>  
									<div id="step-3">
										<div class="alert alert-success">	 	 
                                        	<div class="row">
												<div class="col-md-3"></div>
												<div class="col-md-4">
													<div class="user-left">
													<h2><b>Sign In</b></h2>
														<div class="form-group">
															<label class="col-sm-3 control-label"> Email <span class="symbol required"></span> </label>
															<div class="col-sm-7">
																<input type="email" class="form-control" id="email" name="email" placeholder="Text Field">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label"> Password <span class="symbol required"></span> </label>
														<div class="col-sm-7">
															<input type="password" class="form-control" id="password" name="password" placeholder="Text Field">
														</div>
														</div>
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a role="button" href="Registration.html" class="btn btn-lg btn-success"> Sign In </a> </p>
													</div>
												</div>
												<div class="col-md-4"><br>
													<h4> <b> Thank you for validating your email address. </b> </h4> Please sign in to start trading.
												</div>
											</div>
										</div>
									</div>
									</div>
							</form>
							</div>
						</div><!-- end: FORM WIZARD PANEL -->
					</div>
				</div><!-- end: PAGE CONTENT-->
			</div>
			<div class="subviews">
				<div class="subviews-container"></div>
			</div>
		</div><!-- end: PAGE -->
	</div>
	<?php include('include/footer.php');?>
<div id="readNote">
		<div class="barTopSubview">
			<a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i> Add new note</a>
	</div>
		<div class="noteWrap col-md-8 col-md-offset-2">
			<div class="panel panel-note">
				<div class="e-slider owl-carousel owl-theme">
					<div class="item">
						<div class="panel-heading">
							<h3>This is a Note</h3>
						</div>
						<div class="panel-body">
							<div class="note-short-content">
								Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
							</div>
						<div class="note-content">
							Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
								Quis aute iure reprehenderit in <strong>voluptate velit</strong> esse cillum dolore eu fugiat nulla pariatur.
								<br>
							Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								<br>
								Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
								<br>
								Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
								<br>
								Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
								<br>
								At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
								<br>
								Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
								<br>
								Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
							</div>
							<div class="note-options pull-right">
								<a href="#readNote" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
							</div>
						</div>
						<div class="panel-footer">
							<div class="avatar-note"><img src="assets/images/avatar-2-small.jpg" alt=""></div>
							<span class="author-note">Nicole Bell</span>
							<time class="timestamp" title="2014-02-18T00:00:00-05:00">
								2014-02-18T00:00:00-05:00
							</time>
						</div>
					</div>
				</div>
		</div>
		</div>
</div><!-- *** SHOW CALENDAR *** --><!-- end: SUBVIEW SAMPLE CONTENTS -->
	 <script src="assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
	<script src="assets/js/form-wizard.js"></script>
	<script src="assets/js/main.js"></script> 
	<script>
		jQuery(document).ready(function() {
			Main.init();
			SVExamples.init();
			FormWizard.init();
		});
	</script>
	
	
	