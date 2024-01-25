<?php
include 'config.php';
session_start();

if(isset($_SESSION["login_rank"])){
    header("Location: dashboard.php");
}

if (isset($_POST['submit'])){
    $Login_username = $_POST['Login_username'];
    $Login_password = md5($_POST['Login_password']);

    $sql = "SELECT * FROM login WHERE Login_username = '$Login_username' AND Login_password='$Login_password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login_rank'] = $row['Login_rank'];
		$_SESSION['id'] = $row['Login_id'];

        if ($_SESSION["login_rank"] == '1'){
            header("Location: dashboard.php");
        }  
        else {
            header("Location: notauthorized.php");
        }
        
    }
    else {
        echo "<p>Your credentials do not match</p>";
    }
}








?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from laravel.spruko.com/dashlead/Leftmenu-Icon-Light/signin by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 09:29:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
		<!-- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<title>Sign In</title>

		<!---Fontawesome css-->
		<link href="assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

		<!---Ionicons css-->
		<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

		<!---Typicons css-->
		<link href="assets/plugins/typicons.font/typicons.css" rel="stylesheet">

		<!---Feather css-->
		<link href="assets/plugins/feather/feather.css" rel="stylesheet">

		<!---Falg-icons css-->
		<link href="assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

		<!---Style css-->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/custom-style.css" rel="stylesheet">
		<link href="assets/css/skins.css" rel="stylesheet">
		<link href="assets/css/dark-style.css" rel="stylesheet">
		<link href="assets/css/custom-dark-style.css" rel="stylesheet">

		
	</head>

	<body>
		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->


							<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row text-center pl-0 pr-0 ml-0 mr-0">
				<div class="col-lg-3 d-block mx-auto">
					<div class="card custom-card">
						<div class="card-body">
							<h4 class="text-center">Sign in to Your Account</h4>
							<form class="form" method="POST">
								<div class="form-group text-left">
									<input class="form-control" placeholder="Enter your user name" name="Login_username" type="text">
								</div>
								<div class="form-group text-left">
									<input class="form-control" placeholder="Enter your password" name="Login_password" type="password">
								</div>
								<button class="btn ripple btn-main-primary btn-block" name="submit">Sign In</button>
							</form>
							<div class="mt-3 text-center">
								<p class="mb-0">Don't have an account? <a href="register.php">Sign Up</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

		
		<!-- End Page -->
		<!-- Jquery js-->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js-->
		<script src="assets/plugins/ionicons/ionicons.js"></script>
		
		<!-- Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		
		<!-- Custom js-->
		<script src="assets/js/custom.js"></script>



	
	</body>

<!-- Mirrored from laravel.spruko.com/dashlead/Leftmenu-Icon-Light/signin by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 09:29:55 GMT -->
</html>