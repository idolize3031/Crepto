<?php include('include/header.php'); ?>
<script>
$(document).ready(function(){
	$('#marking').click(function(){
		$('#heading').text('ENABLE').attr('class','text-green');
		$('#marking').text('Disable Marking');
		$('#note').text('Marking is enabled on your account.');
	});
});
</script>
<div class="main-container inner">
	<div class="main-content">
		<div class="container"> <br/> <br/>
			<div class="panel panel-white">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-8"><br/>
							<h1> MARKING IS <span id="heading" class="text-red">DISABLED</span> </h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8"><br/>
							<div class="my">
								<h3> <b>What Is Marking?</b> </h3>
								<p>In the context of the Trollbox, marking is a reputation
								and tipping system. When you mark another user, you are
								awarding them reputation points and a small amount of BTM.
								You may mark other users for saying something useful,
								interesting, amusing, or for any other reason.
								</p><br/> 
								<p> <h3> <b>How Do I Mark Other Users?</b> </h3> </p>
								<p>Once you have enabled marking on this page, you can mark other users by typing a command in the Trollbox. The syntax is: </p>
								<p> 
									<div class="alert alert-success"> /mark 
										<username> < amount> [reason]
									</div>
								</p>
								<p>[reason] is optional. If specified, it will be displayed to other users and recorded in the marking ledger, along with the username and amount. </p>
								<p>Each mark is worth 0.001 BTM. When you mark another user, 0.001 <b>BTM per mark will be deducted from your balance and added to the other user's balance.</b> Additionally, the other user's reputation scores will increase according to a custom algorithm.</p>
								<p> For example, suppose user Mary types /mark Jane 50 in the Trollbox. The following will happen:<br> Mary's BTM balance will decrease by 0.05 BTM <br>Jane's BTM balance will increase by 0.05 BTM <br>Jane's reputation score will increase according to our custom algorithm</p>
								<p> The algorithm is designed to give an accurate representation of reputation and discourage gaming. For example, it provides a greater reputation score to users who have been marked by a variety of other users — in other words, a user who receives 10 marks each from 10 different users will have a greater reputation score than a user who receives 100 marks from a single user. Please note that the algorithm is in beta and subject to change, and that changes will be applied retroactively. To check a user's reputation score, type:</p>
								<div class="alert alert-success"> /rep < username > </div>
								<p>Remember, when you mark someone, check your amounts carefully, as markings cannot be reversed for any reason.</p>
								<h3> <b>Rules</b> </h3>
								<p>In order to protect users and reduce spam, there are some limitations to how much and how often you can mark.</p>
								<p><b>If you do not have 2FA enabled:</b></p>
								<ul>
									<li>You can mark once per minute</li>
                                    <li>You can award up to 50 marks at a time</li>
								</ul>
								<p><b>If you do have 2FA enabled:</b></p>
								<ul>
									<li>You can mark once every 10 seconds</li>
                                    <li>You can award up to 1000 marks at a time</li>
								</ul><br><br>
								<h3>
									<div align="center">
										<span id="note"> Marking is not enabled on your account. </span><br><br>
										<button id="marking" class="btn btn-dark-yellow"> Enable Marking </button>
									</div>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('include/footer.php'); ?>