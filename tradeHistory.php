<?php include('include/header.php'); ?>
<div class="main-container inner">
	<div class="main-content">
		<div class="container"><br/><br/>
			<div class="panel panel-white">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10">
							<h1>YOUR TRADE HISTORY</h1>
						</div><br/>
						<div class="col-md-2">
							<a href="">Export Complete Trade History</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-bordered table-hover" id="sample-table-1">
									<thead>
										<tr>
											<th>Trade Analysis</th>
											<th> <div class="pull-right"><input type="text">/
												<select class="popUpMenu"> 
													<option value="BTC">BTC</option>
													<option value="XMR">XMR</option>
													<option value="USDT">USDT</option>
													<option value="XUSD">XUSD</option>
													<option value="LTC">LTC</option>
													<option value="-">-</option>
												</select>
												<button type="button" class="btn btn-default" disabled="disabled">Analyze</button>
												<button type="button" class="btn btn-default" disabled="disabled">Clear</button>
												 </div>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="9"><b class="my">To analyze your trades, enter a Coin name, select a Market, and click Analyze.</b> <br/>
												<i><small>Tip: Click a coin name in the table below to quickly analyze that coin.</small></i>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8"></div>
						<div class="col-md-4">Show&nbsp;&nbsp;&nbsp;
						<select class="popUpMenu">
							<option value="all">Buys &amp; Sells</option> 
							<option value="buy">Buys Only</option> 
							<option value="sell">Sells Only</option>
							<option value="lending">Loan Earnings</option>
						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From All Date &nbsp;&nbsp; <i class="fa fa-calendar"></i>  
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-bordered  table-hover" id="sample-table-1">
									<thead>
										<tr class="info">
											<th></th>
											<th>Market</th>
											<th>Type</th>
											<th>Category</th>
											<th>Price/Share</th>
											<th>Amount</th>
											<th>Fee</th>
											<th>Total</th>
											<th>Transaction Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="9"><b class="my">No trades</b> <br/><br/>
												You have not made any trades yet. 
												Once you make some trades, they will appear here.
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div><!-- end: PAGE -->
</div>
<?php include('include/footer.php'); ?>