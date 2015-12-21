<?php include('include/header.php'); ?>
<div class="main-container inner"><!-- start: PAGE -->
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12"><!-- start: FORM WIZARD PANEL -->
					<div class="panel panel-white">
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-7"><br><br><br>
								<b><h1>TRANSFER BALANCES</h1></b>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-10"> Transfer&nbsp;&nbsp;
									<input type="text" placeholder="Amount">
									<select id="balanceTransferCurrency" class="popUpMenu">
										<option value="BTC">BTC</option>
										<option value="BTS">BTS</option>
										<option value="CLAM">CLAM</option>
										<option value="DOGE">DOGE</option>
										<option value="DASH">DASH</option>
										<option value="LTC">LTC</option>
										<option value="MAID">MAID</option>
										<option value="STR">STR</option>
										<option value="XMR">XMR</option>
										<option value="XRP">XRP</option>
										<option value="ETH">ETH</option>
									</select>&nbsp;&nbsp; From <select class="popUpMenu">
										<option value="exchange">Exchange</option>
										<option value="margin">Margin</option>
										<option value="lending">Lending</option>
									</select>&nbsp;&nbsp;account to&nbsp;&nbsp;<select
										id="balanceTransferToWallet" class="popUpMenu">
										<option value="exchange">Exchange</option>
										<option value="margin" selected="selected">Margin</option>
										<option value="lending">Lending</option>
									</select>&nbsp;&nbsp;account&nbsp;&nbsp;
									<button>Transfer</button>
								</div>
							</div><br><br>
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-6">
									<div class="table-responsive">
										<table class="table table-bordered  table-hover" id="sample-table-1" style="height: 10px;">
											<thead>
												<tr class="info">
													<th>Coin</th>
													<th>Exchange</th>
													<th>Margin</th>
													<th>Lending</th>
													<th class="total">Total Balance</th>
													<th class="action">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>BTC</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>0.00000000</td>
													<td><a href="#">Deposit/Withdraw</a></td>
												</tr>
												<tr>
													<td>BTS</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>0.00000000</td>
													<td><a href="#">Deposit/Withdraw</a></td>
												</tr>
												<tr>
													<td>CLAM</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>0.00000000</td>
													<td><a href="#">Deposit/Withdraw</a></td>
												</tr>
												<tr>
													<td>DOGE</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>0.00000000</td>
													<td><a href="#">Deposit/Withdraw</a></td>
												</tr>
												<tr>
													<td>DASH</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>0.00000000</td>
													<td><a href="#">Deposit/Withdraw</a></td>
												</tr>
												<tr>
													<td>LTC</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>0.00000000</td>
													<td><a href="#">Deposit/Withdraw</a></td>
												</tr>
												<tr>
													<td>MAID</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>0.00000000</td>
													<td><a href="#">Deposit/Withdraw</a></td>
												</tr>
												<tr>
													<td>STR</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>0.00000000</td>
													<td><a href="#">Deposit/Withdraw</a></td>
												</tr>
												<tr>
													<td>XMR</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>0.00000000</td>
													<td><a href="#">Deposit/Withdraw</a></td>
												</tr>
												<tr>
													<td>XRP</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>0.00000000</td>
													<td><a href="#">Deposit/Withdraw</a></td>
												</tr>
												<tr>
													<td>ETH</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>0.00000000</td>
													<td><a href="#">Deposit/Withdraw</a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-md-3">
									<table class="table table-bordered table-hover" id="sample-table-1" style="height: 10px;">
										<thead>
											<tr class="info">
												<th colspan="2">Estimated Margin Tradable Balance by Coin</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>0.0000000</td>
												<td>BTC</td>
											</tr>
											<tr>
												<td>0.0000000</td>
												<td>BTS</td>
											</tr>
											<tr>
												<td>0.0000000</td>
												<td>CLAM</td>
											</tr>
											<tr>
												<td>0.0000000</td>
												<td>DOGE</td>
											</tr>
											<tr>
												<td>0.0000000</td>
												<td>DASH</td>
											</tr>
											<tr>
												<td>0.0000000</td>
												<td>LTC</td>
											</tr>
											<tr>
												<td>0.0000000</td>
												<td>MAID</td>
											</tr>
											<tr>
												<td>0.0000000</td>
												<td>STR</td>
											</tr>
											<tr>
												<td>0.0000000</td>
												<td>XMR</td>
											</tr>
											<tr>
												<td>0.0000000</td>
												<td>XRP</td>
											</tr>
											<tr>
												<td>0.0000000</td>
												<td>ETH</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Your Margin Tradable Balance is an estimate of how much of each
								currency you can leverage to margin trade. It is based on the
								current market value of all deposits (across currencies) in
								your Margin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;account. Actual tradable balances are dependent on
								market conditions and your open positions.
						</div><!-- end: FORM WIZARD PANEL -->
					</div>
				</div><!-- end: PAGE CONTENT-->
			</div>
			<div class="subviews">
				<div class="subviews-container"></div>
			</div>
		</div><!-- end: PAGE -->
	</div>
</div>
<?php include('include/footer.php'); ?>