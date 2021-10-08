<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<meta name="description" content=""/>
		<meta name="author" content=""/>
		<title>A-Mart  Smart Shopping-forget password</title>
		<!--favicon-->
		<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
		<!-- Bootstrap core CSS-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
		<!-- animate CSS-->
		<link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
		<!-- Icons CSS-->
		<link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
		<!-- Custom Style-->
		<link href="assets/css/app-style.css" rel="stylesheet"/>
	</head>
	<body class="bg-dark">
		<!-- Start wrapper-->
		<div id="wrapper">
			<div class="card card-authentication1 mx-auto my-5">
				<div class="card-body">
					<div class="card-content p-2">
						<div class="text-center">
							<img src="../images/logo/1.png" alt="logo icon" style="height: 53px;width: 125px;">
						</div>
						<div class="card-title text-uppercase text-center py-3">Forget Password</div>
						<form action="php/forgetpwd" method="post">
							<div class="form-group">
								<label for="exampleInputUsername" class="">Email Id</label>
								<div class="position-relative has-icon-right">
									<input type="email" id="exampleInputUsername" name="email" class="form-control input-shadow" placeholder="Enter Emailid" required> 
									<div class="form-control-position">
										<i class="icon-user"></i>
									</div>
								</div>
							</div>
							<br>
							<button type="submit" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Submit</button>
							<div class="form-row mt-4">
							</div>
						</form>
					</div>
				</div>
				<div class="card-footer text-center py-3">
					<p class="text-muted mb-0">A-Mart Smart Shopping</p>
				</div>
			</div>
			<!--Start Back To Top Button-->
			<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
			<!--End Back To Top Button-->
		</div>
		<!--wrapper-->
		<!-- Bootstrap core JavaScript-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>