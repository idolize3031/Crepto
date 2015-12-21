<?php
include('include/header.php');
include('controller/container.php');
$obj = new container();
 ?>
<div class="main-container inner"><!-- start: PAGE -->
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12"><!-- start: FORM WIZARD PANEL -->
					<div class="panel panel-white">
						<div class="row">
							<div class="col-md-12" style="text-align:center;"><br/> <br/> <br/>
								<b><h1>MY LOGIN HISTORY</h1></b>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="table-responsive">
										<table class="table table-bordered  table-hover" id="sample-table-1" style="height: 10px;">
											<thead>
												<tr class="info">
													<th>Date</th>
													<th>IP Address</th>
													<th>Used 2FA</th>
												</tr>
											</thead>
											<tbody>
											<?php $id = $_SESSION['userid'];
												$sql = $obj->login_details($id);
												while($row = mysql_fetch_array($sql)){ ?>
												<tr>
													<td><?php echo $row['date']; ?></td>
													<td><?php echo $row['ip_address']; ?></td>
													<td><?php echo $row['2fa']; ?></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-md-2"></div>
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
<?php include('include/footer.php'); ?>