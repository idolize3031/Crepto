<?php
include('include/header.php');
include('controller/container.php');
$obj = new container();
include('include/trading-api.php');
$poloniex = new poloniex(
			/*API KEY:    */'AU04SSJF-RGA9O99O-5LN3ZG39-01W6ZZ4Z',
			/*API SECRET: */'771e542c64fcdd441b10aa9af58f4a8748db848c0d1d254d63e639683fad41b342bbb2bbf7c96042511e2967a3dbddd67a2afd109fb1845fc3c2e1df2d16e2a3'
		);
?>
<script>
function calculate() {
	var sllimit = document.getElementById('sllimit').value;	
	var slamount = document.getElementById('slamount').value;
	var result = document.getElementById('sltotal');	
	var myResult = sllimit * slamount;
	result.value = myResult;
}
$( document ).ready(function() {
	$('#buyamount').on('keyup',function(){
		var per = $('#buyamount').val() * 0.25/100;
		$('#buypercent').val(per);
		var total = $('#buyprice').val() * this.value;
		$('#buytotal').val(total);
	});

	$('#sellamount').on('keyup',function(){
		var tol = $('#sellprice').val() * this.value;
		var total = tol.toFixed(7);
		$('#selltotal').val(total);
		var sell = total * 0.25/100;
		var sellper = sell.toFixed(8);
		$('#sellpercent').val(sellper);
	});
	
});
</script>
<div class="main-container inner"><!-- start: PAGE -->
	<div class="main-content"> <br> 
		<div class="container">
			<div class="row">
				<div class="col-md-9"><br>
					<div class="panel panel-white">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-7"> 
									<h2> <b>MONERO MARGIN TRADING</b> </h2> XMR/BTC
								</div>
								<div class="col-md-5">
									<div class="table-responsive">
										<table class="table table-hover table-striped table-bordered">
											<tbody>
												<tr>
													<td>Last Price <p>0.00117609</p> </td>
													<td>24hr Change <p>-1.99%</p> </td>
													<td>24hr High <p>0.00123907</p> </td>
													<td>24Hr Low <p>0.00116579</p> </td>
												</tr>
												<tr>
													<td colspan="4" style="text-align: center;">24hr Volume: <b>43.02177927</b>BTC / <b>35918.17022562</b> XMR </td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12"><!-- start: SIMPLE LINE CHART -->
							<div class="panel panel-white">
								<div class="panel-heading  border-light panel-grey">
									<h4 class="panel-title"> <span class="text-bold">Chart</span> </h4>
									<div class="panel-tools">
										<div class="dropdown">
											<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i class="fa fa-cog"></i> </a>
											<ul class="dropdown-menu dropdown-light pull-right" role="menu">
												<li> <a class="panel-collapse collapses" href="#"> <i class="fa fa-angle-up"></i> <span>Collapse</span> </a> </li>
												<li> <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a> </li>
												<li> <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span> </a> </li>
												<li> <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span> </a> </li>
											</ul>
										</div>
										<a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
									</div>
								</div>
								<div class="panel-body">
									<div id="demo-chart-1" style="height:400px;width:1000px;overflow:hidden;">
										<iframe frameborder="0" style="height:400px;width:945px;" src="https://embed.cryptowat.ch/btce/btcusd/1hr?theme=standard&config=external&locale=en" id="cw-embed-1821e092"></iframe>
										<script>document.getElementById("cw-embed-1821e092").onload = function() {this.contentWindow.postMessage({config:{"candleWidth":5,"candles":{"spacing":3},"depthZoomLevel":0.015,"indicators":{"ema":{"periods":[10,21,100,null,null],"show":true},"sma":{"periods":[15,50,null,null,null],"show":false},"sar":{"step":0.025,"maxStep":0.05,"show":true},"bollingerBands":{"show":false,"period":20,"stddevs":2},"keltnerChannel":{"show":false,"atrPeriod":14,"atrs":2},"volume":{"show":true,"height":50},"macd":{"show":true,"periods":[10,26],"lag":9,"height":150},"rsi":{"show":false,"periods":14,"height":100},"stochRSI":{"show":false,"periods":14,"maPeriods":5,"height":90},"obv":{"show":false,"maPeriods":21,"height":100},"aroon":{"show":false,"periods":25,"height":100},"ichimoku":{"show":false,"tenkanPeriod":9,"kijunPeriod":26},"chandelierExit":{"show":false,"periods":22,"atrs":1},"zigzag":{"show":false,"threshold":7}},"mouse":{"scrollX":true,"scrollY":true},"showTrades":true,"showOrders":true,"grid":true,"chartStyle":"OHLC","yAxis":"linear","yaxis":{"depth":true},"padding":{"price":25},"performance":{"animateFeeds":false,"frameRate":10},"drawing":{"snap":true,"snapThreshold":25,"extrapolate":false}}}, "https://embed.cryptowat.ch") };</script>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-white">
						<div class="panel-heading border-light panel-grey">
							<h4 class="panel-title"> <span class="text-bold"> Open Position</span> </h4>
							<div class="panel-tools">
								<div class="dropdown">
									<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i class="fa fa-cog"></i> </a>
									<ul class="dropdown-menu dropdown-light pull-right" role="menu">
										<li><a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a></li>
										<li><a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a></li>
										<li><a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span> </a></li>
										<li><a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span> </a></li>
									</ul>
								</div>
								<a class="btn btn-xs btn-link panel-close" href="#"> <i	class="fa fa-times"></i> </a>
							</div>
						</div>
						<div class="panel-body">
						<?php
						if(!isset($_SESSION['useremail'])) { ?>
							<a href="login.php">Sign</a> In or <a href="registration.php">Create an Account</a> to see your margin account.
						<?php } else { ?>
							<div class="">
								<p>To begin margin trading, you must first <a href=" ">transfer</a> balances into your margin account. Once you open a margin position, it will appear here.</p> 
							</div>
						<?php } ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-white">
								<div class="panel-heading border-light panel-grey">
									<h4 class="panel-title"> <span class="text-bold">BUY XMR</span>	</h4>
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
									<?php if(isset($_SESSION['useremail'])) { ?>
									<div class="details">
										<div class="pull-right"><a href=" ">Deposit</a> | <a href=" ">Tranfer</a></div>
										<div class="coindetails">
											You have:&nbsp;&nbsp;&nbsp;&nbsp;<label class="balance">0.0000000</label>&nbsp;<label class="cointype">BTC</label><br/>
											Lowest ask: <label class="balance">0.0000000</label>&nbsp;<label class="cointype">BTC</label>
										</div>
									</div><?php } ?>
								</div>
								<div class="panel-body">
									<div class="form-group">
										<label class="col-sm-3 control-label"> <small>Price</small> </label>
										<div class="input-group">
											<input type="text" id="buyprice" class="form-control"> <span class="input-group-addon"> <small>BTC</small> </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"> <small>Amount</small></label>
										<div class="input-group">
											<input type="text" id="buyamount" class="form-control"> <span class="input-group-addon"> <small>XMR</small> </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"><small> Loan Rate </small></label>
										<div class="input-group">
											<input type="text" class="form-control"> <span class="input-group-addon">%</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"><small>Total</small></label>
										<div class="input-group">
											<input type="text" id="buytotal" class="form-control"> <span class="input-group-addon"> <small>BTC</small> </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"> <small>0.25% Fee:</small> </label>
										<div class="input-group">
											<input type="text" id="buypercent" class="form-control"> <span class="input-group-addon"> <small>XMR</small> </span> 
										</div>
									</div>
									<div class="form-group">
									<?php
									if(!isset($_SESSION['useremail'])) { ?>
										<a href="login.php">Sign</a> In or <a href="registration.php">Create an Account</a> to see your margin account.
									<?php } else { ?>
										<div class="pull-right">
											<button type="button" class="btn btn-light-grey btn-sm "> BUY </button> 
										</div>
									<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-white">
								<div class="panel-heading border-light panel-grey">
									<h4 class="panel-title"> <span class="text-bold">STOP LIMIT</span> </h4>
									<a class="pull-right" href=" ">What's this?</a>
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
										<a class="btn btn-xs btn-link panel-close" href="#"> <i Class="fa fa-times"></i> </a>
									</div>
									<?php if(isset($_SESSION['useremail'])) { ?>
									<div class="details">
										<div class="coindetails">
											You have:&nbsp;&nbsp;&nbsp;&nbsp;<label class="balance">0.0000000</label>&nbsp;<label class="cointype">BTC</label><br/>
											Lowest ask: <label class="balance">0.0000000</label>&nbsp;<label class="cointype">XMR</label>
										</div>
									</div><?php } ?>
								</div>
								<div class="panel-body">
									<div class="form-group">
										<p><i class="fa fa-exclamation-triangle"></i><small>Stop Limit margin orders are not guaranteed to trigger at the amount specified.<a href=" "> Why not?</a></small></p>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"> <small>Stop</small></label>
										<div class="input-group">
											<input type="text" id="slstop" class="form-control"> <span class="input-group-addon"> <small>BTC</small> </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"><small>Limit</small></label>
										<div class="input-group">
											<input type="text" id="sllimit" oninput="calculate()" class="form-control"> <span class="input-group-addon"> <small>BTC</small> </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"><small> Amount </small></label>
										<div class="input-group">
											<input type="text" id="slamount" oninput="calculate()" class="form-control"> <span class="input-group-addon"> <small>XMR</small> </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"><small> Total</small> </label>
										<div class="input-group">
											<input type="text" id="sltotal" class="form-control"> <span class="input-group-addon"> <small>BTC</small> </span>
										</div>
									</div>
									<div class="form-group">
									<?php
									if(!isset($_SESSION['useremail'])) { ?>
										<a href="login.php">Sign</a> In or <a href="registration.php">Create an Account</a> to see your margin account.
									<?php } else { ?>
										<div class="pull-right">
											<button type="button" class="btn btn-light-grey btn-sm "> BUY </button>&nbsp;&nbsp;&nbsp;&nbsp; 
											<button type="button" class="btn btn-light-grey btn-sm"> SELL </button>
										</div>
									<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-white">
								<div class="panel-heading border-light panel-grey">
									<h4 class="panel-title"> <span class="text-bold">SELL XMR</span> </h4>
									<div class="panel-tools">
										<div class="dropdown">
											<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i class="fa fa-cog"></i> </a> 
											<ul class="dropdown-menu dropdown-light pull-right"	role="menu"> 
												<li> <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span> Collapse </span> </a> </li>
												<li> <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span> Refresh </span> </a> </li>
												<li> <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span> Configurations </span> </a> </li>
												<li> <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span> Fullscreen </span> </a> </li>
											</ul>
										</div>
										<a class="btn btn-xs btn-link panel-close" href="#"> <i	class="fa fa-times"></i> </a>
									</div>
									<?php if(isset($_SESSION['useremail'])) { ?>
									<div class="details">
										<div class="pull-right"><a href=" ">Deposit</a> | <a href=" ">Tranfer</a></div>
										<div class="coindetails">
											You have:&nbsp;&nbsp;&nbsp;&nbsp;<label class="balance">0.0000000</label>&nbsp;<label class="cointype">XMR</label><br/>
											Lowest ask: <label class="balance">0.0000000</label>&nbsp;<label class="cointype">BTC</label>
										</div>
									</div><?php } ?>
								</div>
								<div class="panel-body">
									<div class="form-group">
										<label class="col-sm-3 control-label"> <small>Price</small></label>
										<div class="input-group">
											<input type="text" id="sellprice" class="form-control"> <span class="input-group-addon"><small>BTC</small></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"><small> Amount </small></label>
										<div class="input-group">
											<input type="text" id="sellamount" class="form-control"> <span class="input-group-addon"><small>XMR</small></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"><small> Loan Rate </small></label>
										<div class="input-group">
											<input type="text" class="form-control" name="lonarate"> <span class="input-group-addon">%</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"><small> Total </small></label>
										<div class="input-group">
											<input type="text" id="selltotal" class="form-control"> <span class="input-group-addon"><small>BTC</small></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"><small> 0.25% Fee:</small> </label>
										<div class="input-group">
											<input type="text" id="sellpercent" class="form-control"> <span class="input-group-addon"><small>XTC</small></span>
										</div>
									</div>
									<div class="form-group">
									<?php
									if(!isset($_SESSION['useremail'])) { ?>
										<a href="login.php">Sign</a> In or <a href="registration.php">Create an Account</a> to see your margin account.
									<?php } else { ?>
										<div class="pull-right">
											<button type="button" class="btn btn-light-grey btn-sm "> Sell </button> 
										</div>
									<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-white">
								<div class="panel-heading  border-light panel-grey">
									<h4 class="panel-title"> <span class="text-bold">Sell Order</span> </h4>
									<div class="pull-right">
										<b>Total :</b> 376120.12022836 <b>XMR</b>
									</div>
								</div>
								<div class="panel-body">
									<div class=" panel-scroll height-250">
										<div class="table-responsive">
											<table class="table table-hover" id="sample-table-1">
												<thead>
													<tr>
														<th><small>Price1</small></th>
														<th><small>Volume</small></th>
														<th><small>Change</small></th>
														<th><small>Name</small></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><small>Chinna</small></td>
														<td><small>1</small></td>
														<td><small>QWWW</small></td>
														<td><small>19.1</small></td>
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
									<h4 class="panel-title"> <span class="text-bold">Buy Order</span> </h4>
									<div class="pull-right">
										<b>Total :</b> 376120.12022836 <b>BTC</b>
									</div>
								</div>
								<div class="panel-body">
									<div class=" panel-scroll height-250">
										<div class="table-responsive">
											<table class="table table-hover" id="sample-table-1">
												<thead>
													<tr>
														<th><small>Price</small></th>
														<th><small>Volume</small></th>
														<th><small>Change</small></th>
														<th><small>Name</small></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><small>Chinna</small></td>
														<td><small>1</small></td>
														<td><small>QWWW</small></td>
														<td><small>19.1</small></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12"><!-- start: STACKED AREA CHART -->
							<div class="panel panel-white">
								<div class="panel-heading  border-light panel-grey">
									<h4 class="panel-title"> <span class="text-bold">Market Depth Chart</span> </h4>
									<div class="panel-tools">
										<div class="dropdown">
											<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i class="fa fa-cog"></i> </a>
											<ul class="dropdown-menu dropdown-light pull-right" role="menu">
												<li><a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a></li>
												<li><a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a></li>
												<li><a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a> </li>
												<li><a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a></li>
											</ul>
										</div>
										<a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
									</div>
								</div>
								<div class="panel-body">
									<div id="demo-chart-6" class="height-300"> <svg></svg> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-white">
						<div class="panel-heading  border-light panel-grey">
							<h4 class="panel-title"><span class="text-bold">Table</span></h4>
							<div class="panel-tools">
								<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i class="fa fa-cog"></i> </a>
									<ul class="dropdown-menu dropdown-light pull-right" role="menu">
										<li><a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a></li>
										<li><a class="panel-refresh" href="#"><i class="fa fa-refresh"></i> <span>Refresh</span></a></li>
										<li><a class="panel-config" href="#panel-config" data-toggle="modal"><i class="fa fa-wrench"></i> <span>Configurations</span></a></li>
										<li><a class="panel-expand" href="#"><i class="fa fa-expand"></i> <span>Fullscreen</span></a></li>
									</ul>
								</div>
								<a class="btn btn-xs btn-link panel-close" href="#"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body">
							<div class=" panel-scroll height-250"> 
								<div class="table-responsive">
									<?php
										$pair = 'BTC_XMR';
										$alltrade_history = $poloniex->get_trade_history($pair);
									?>
									<table class="table table-striped table-hover" id="sample_2">
										<thead>
											<tr>
												<th>Date</th>
												<th>Type</th>
												<th>Price(BTC)</th>
												<th>Amount(XMR)</th>
												<th>Total(BTC)</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($alltrade_history as $row){ ?>
											<tr>
												<td><?php echo substr($row['date'],0,10); ?></td>
												<td><?php echo $row['type']; ?></td>
												<td><?php echo $row['rate']; ?></td>
												<td><?php echo $row['amount']; ?></td>
												<td><?php echo $row['total']; ?></td> 
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div><br>
				<div class="col-md-3">
					<div class="panel panel-white">
						<div class="panel-heading border-light panel-grey">
							<h4 class="panel-title"> <span class="text-bold">Market</span>&nbsp;&nbsp <input type="checkbox"><small class="my">show </small><i class="fa fa-star"></i><small class="my">only</small>
							<div class="inner-addon right-addon"> <i class="glyphicon glyphicon-search"></i> <input type="text"	Size="10" class="round" placeholder="Filter(Ctrl+f)" /></div></h4>
						</div>
					</div>
					<div class="tab-pane" id="faq_example1">
						<div id="accordion"	class="panel-group accordion accordion-custom accordion-teal">
							<div class="panel panel-white">
								<div class="panel-heading">
									<h4 class="panel-title"> <a href="#faq_1_1" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed"> <i class="icon-arrow"></i><strong>BTC</strong> </a></h4>
								</div>
								<div class="panel-collapse collapse" id="faq_1_1">
									<div class="panel-tools">
										<div class="dropdown">
											<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i class="fa fa-cog"></i> </a>
											<ul class="dropdown-menu dropdown-light pull-right" role="menu">
												<li><a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a></li>
												<li><a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a></li>
												<li><a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span> </a></li>
												<li><a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span> </a></li>
											</ul>
										</div>
										<a class="btn btn-xs btn-link panel-close" href="#"> <i Class="fa fa-times"></i> </a>
									</div>
									<div style="height:220px; overflow:auto;" class="panel-body">
										<div class="table-responsive">
										<?php
											$tricker = $poloniex->get_ticker($pair = "ALL");
										?>
										<table class="table table-hover" id="sample-table-1" style="height: 10px;">
											<thead>
												<tr>
													<th><i class="fa fa-star"></i></th>
													<th><small>Coin</small></th>
													<th><small>Price</small></th>
													<th><small>Volume</small></th>
													<th><small>Change</small></th>
													<th><small>Name</small></th>
												</tr>
											</thead>
											<tbody>
											<?php 
											foreach($tricker as $key=>$value){
												$match = strstr($key, '_', true);
												if($match=='BTC'){
													$change = number_format((float)$value['percentChange'],4, '.', '')*100;
													$volume = number_format((float)$value['baseVolume'],3, '.', '');
													$coin = substr($key, strpos($key, "_") +1);
													$sql = $obj-> full_currencyname($coin);
													while($row1= mysql_fetch_array($sql)) {
												?>
												<tr><td><i class="fa fa-star"></i></td>
													<td><small data-url="<?php echo $key ;?>"><?php echo $coin; ?></small></td>
													<td><small1><?php echo $value['last']; ?></small></td>
													<td><small1><?php echo $volume; ?></small></td>
													<td