<?php include('include/header.php'); ?>
<div class="main-container inner">
	<div class="main-content">
		<div class="container"><br/><br/>
			<div class="panel panel-white">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-8">
							<h1>API ACCESS IS <a class="text-red">DISABLED</a></h1>
						</div>
					</div>
				</div>
				<div class="alert alert-success">
					<div class="row">
						<div class="col-md-12">
							<div style="text-align:center;">Enable API access on your account to generate keys</div>
							<div style="text-align:center;">Please see the<a href=" "> API documentation </a> for information on how to use your API keys.</div><br>
							<div style="text-align:center;"><a href="controller/value.php?aid=<?php echo $_SESSION['userid'] ?>" class="btn btn-dark-yellow"><b>Enable API</b></a></div><br>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: PAGE -->
	</div>
</div>
<?php include('include/footer.php'); ?>