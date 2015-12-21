<?php include('include/header.php'); ?>	
<div class="main-container inner"><!-- start: PAGE -->
	<div class="main-content"><!-- start: PANEL CONFIGURATION MODAL FORM -->
		<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
						<h4 class="modal-title">Panel Configuration</h4>
					</div>
					<div class="modal-body"> Here will be a configuration form </div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
						<button type="button" class="btn btn-primary"> Save changes </button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-9"> <br>
					<div class="panel panel-white">
						<div class="panel-body">
							<h1>BTC LENDING </h1>
						</div>
					</div>
					<div class="panel panel-white">
						<div class="panel-heading border-light panel-grey">
							<h4 class="panel-title">Open<span class="text-bold">Position</span></h4>
							<div class="panel-tools">
								<div class="dropdown">
									<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i class="fa fa-cog"></i> </a>
									<ul class="dropdown-menu dropdown-light pull-right" role="menu">
										<li> <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a> </li>
										<li> <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a> </li>
										<li> <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span> </a> </li>
										<li> <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span> </a> </li>
									</ul>
								</div>
								<a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> 
							</div>
						</div>
						<div class="panel-body">
						<?php
						if(!isset($_SESSION['useremail'])) { ?>
							<a href="login.php">Sign</a> In or <a href="registration.php">Create an Account</a> to see your margin account.
						<?php } else { ?>
						<div class="row">
							<label class="col-md-1 control-label"> Rate </label>
							<div class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" style="padding: 4px 4px;"> <span class="input-group-addon" style="padding: 2px 4px;">%</span>
								</div>
							</div>
							<label class="col-md-1 control-label"> Amount </label>
							<div class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" style="padding: 4px 4px;" maxlength="30" size="30"> <span class="input-group-addon" style="padding: 2px 4px;">BTC</span>
								</div>
							</div>
							<label class="col-md-1 control-label"> Amount </label>
							<div class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" style="padding: 4px 4px;"> <span class="input-group-addon" style="padding: 2px 4px;">Days</span>
								</div>
							</div>
							<div class="col-md-2">
								<input type="checkbox">Auto-renew
							</div>
							<button>Offer Loan</button>
						</div>
						<?php } ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-white">
								<div class="panel-heading  border-light panel-grey">
									<h4 class="panel-title">  <span class="text-bold">Loan Offer</span></h4>
									<div class="pull-right">
										<b>Total :</b> 296.77115681 <b>BTC</b>
									</div>
								</div>
								<div class="panel-body">
									<div class=" panel-scroll height-250">
										<div class="table-responsive">
											<table class="table table-hover" id="sample-table-1">
												<thead>
													<tr class="info">
														<th>Rate</th>
														<th>Amount(BTC)</th>
														<th>Duration</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>0.0138%</td>
														<td>2.05133705</td>
														<td>2-7 Days</td>
													</tr>
													<tr>
														<td>0.0138%</td>
														<td>2.05133705</td>
														<td>2-7 Days</td>
													</tr>
													<tr>
														<td>0.0138%</td>
														<td>2.05133705</td>
														<td>2-7 Days</td>
													</tr>
													<tr>
														<td>0.0138%</td>
														<td>2.05133705</td>
														<td>2-7 Days</td>
													</tr>
													<tr>
														<td>0.0138%</td>
														<td>2.05133705</td>
														<td>2-7 Days</td>
													</tr>
													<tr>
														<td>0.0138%</td>
														<td>2.05133705</td>
														<td>2-7 Days</td>
													</tr>
													<tr>
														<td>0.0138%</td>
														<td>2.05133705</td>
														<td>2-7 Days</td>
													</tr>
													<tr>
														<td>0.0138%</td>
														<td>2.05133705</td>
														<td>2-7 Days</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-white">
								<div class="panel-heading  border-light panel-grey">
									<h4 class="panel-title"><span class="text-bold">Loan Demands</span></h4>
									<div class="pull-right">
										<b>Total :</b> 0.0000000 <b>BTC</b>
									</div>
								</div>
								<div class="panel-body">
									<div class=" panel-scroll height-250">
										<div class="table-responsive">
											<table class="table table-hover" id="sample-table-1">
												<thead>
													<tr class="info">
														<th>Rate</th>
														<th>Amount(BTC)</th>
														<th>Duration</th>
													</tr>
												</thead>
												<tbody>
													<tr><td>There are no loan demands.</td></tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
 	  			</div><br>
				<div class="col-md-3">								
					<div class="panel panel-white">
						<div class="panel-heading  border-light panel-grey">
							<h4 class="panel-title"> <span class="text-bold">My Balance</span></h4>
						</div>
						<div class="panel-body">
						<?php
						if(!isset($_SESSION['useremail'])) { ?>
							<a href="login.php">Sign</a> In or <a href="registration.php">Create an Account</a> to see your margin account.
						<?php } else { ?>
							<div class=" panel-scroll height-250">
								<div class="table-responsive">
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th><small>Coin</small></th>
												<th><small>Exchange</small></th>
												<th><small>Margin</small></th>
											    <th><small>Leading</small></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>BTC</td>
												<td><small>-</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
											</tr>
											<tr>
												<td>BTS</td>
												<td><small>-</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
											</tr>
											<tr>
												<td>CLAM</td>
												<td><small>-</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
											</tr>
											<tr>
												<td>DOGE</td>
												<td><small>-</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
											</tr>
											<tr>
												<td>DASH</td>
												<td><small>-</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
											</tr>
											<tr>
												<td>LTC</td>
												<td><small>-</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
											</tr>
											<tr>
												<td><small>MAID</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
											</tr>
											<tr>
												<td><small>STR</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
											</tr>
											<tr>
												<td><small>XMR</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
											</tr>
											<tr>
												<td><small>XRP</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
											</tr>
											<tr>
												<td><small>ETH</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
												<td><small>-</small></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
					<div class="panel panel-white">
						<div class="panel-heading panel-grey">
							<h4 class="panel-title">Troll<span class="text-bold">Box</span></h4>
							<div class="panel-tools">
								<div class="dropdown">
									<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i class="fa fa-cog"></i> </a> 
									<ul class="dropdown-menu dropdown-light pull-right" role="menu">
										<li> <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a> </li>
										<li> <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a> </li>
										<li> <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span> </a> </li>
										<li> <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span> </a> </li>
									</ul>
								</div>
								<a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
							</div>
						</div>
						<div class="panel-body">
							<div class=" panel-scroll height-250">
								<p> Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. </p>
								<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
								<p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. </p>
								<p> Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. </p>
								<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
								<p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. </p>
								<p> Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. </p>
								<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
								<p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. </p>
							</div>
						</div>
					</div>
					<div class="panel panel-white">
						<div class="panel-heading panel-grey">
							<h4 class="panel-title"><span class="text-bold">Notices</span></h4>
							<div class="panel-tools">
								<div class="dropdown">
									<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i class="fa fa-cog"></i> </a>
									<ul class="dropdown-menu dropdown-light pull-right" role="menu">
										<li><a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a></li>
										<li><a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span></a></li>
										<li><a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span> </a></li>
										<li><a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span> </a></li>
									</ul>
								</div>
								<a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
							</div>
						</div>
						<div class="panel-body">
							<div class=" panel-scroll height-250">
								<table class="table table-striped table-hover">
									<tbody>
										<tr>
											<td><span class="text-large">The LQD asset migration is complete.</span><span class="text-small block text-light">Posted by MobyDick at 2015-11-06 17:03:27</span></td>
											<td class="center"><div></div></td>
										</tr>
										<tr>
											<td><span class="text-large">The LQD asset migration is complete.</span><span class="text-small block text-light">Posted by MobyDick at 2015-11-06 17:03:27</span></td>
											<td class="center"> <div></div> </td>
										</tr>
										<tr>
											<td><span class="text-large">The LQD asset migration is complete.</span><span class="text-small block text-light">Posted by MobyDick at 2015-11-06 17:03:27</span></td>
											<td class="center"> <div></div> </td>
										</tr>
										<tr>
											<td><span class="text-large">The LQD asset migration is complete.</span><span class="text-small block text-light">Posted by MobyDick at 2015-11-06 17:03:27</span></td>
											<td class="center"> <div></div> </td>
										</tr>
										<tr>
											<td><span class="text-large">The LQD asset migration is complete.</span><span class="text-small block text-light">Posted by MobyDick at 2015-11-06 17:03:27</span></td>
											<td class="center"> <div></div> </td>
										</tr>
									</tbody>
								</table>
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
</div><!-- end: MAIN CONTAINER -->
<?php include('include/footer.php'); ?>