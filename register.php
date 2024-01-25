<?php
include 'config.php';

session_start();

if(isset($_SESSION["username"])){
    header("Location: dashboard.php");
}

if(isset($_POST['submit'])){
    $User_full_name = $_POST['User_full_name'];
    $Login_username = $_POST['Login_username'];
    $User_mobile = $_POST['User_mobile'];
    $User_email = $_POST['User_email'];
    $Login_password = md5($_POST['Login_password']);
    $cpassword = md5($_POST['cpass']);

    if($Login_password == $cpassword){
        $sql = "SELECT * FROM login WHERE Login_username = '$Login_username'";
        $result = mysqli_query($conn, $sql);
        if ($result -> num_rows > 0){
            echo "<p>Username already exists</p>";
        }

        else {
            $sql = "SELECT * FROM users WHERE User_email = '$User_email'";
            $result = mysqli_query($conn, $sql);
            if ($result -> num_rows > 0){
                echo "<p>Email already exists</p>";
            }

            else{
                //login table
                $sql = "INSERT INTO login (Login_username, Login_password, Login_rank) 
                VALUES ('$Login_username', '$Login_password', '1')";
                $result = mysqli_query($conn, $sql);

                //login id
                $sql = "SELECT * FROM login WHERE Login_username = '$Login_username'";
                $login_id = mysqli_query($conn, $sql);
                $arra = mysqli_fetch_array($login_id);
                if(is_array($arra)){
                    $login_id = $arra['Login_id'];
                }

                //owner table
                $sql = "INSERT INTO users (User_full_name, User_mobile, User_email, User_Login_id) 
                VALUES ('$User_full_name', '$User_mobile', '$User_email', '$login_id')";
                $result = mysqli_query($conn, $sql);
                
                if(! $result){
                    echo "<p>Registration not succesful</p>";
                }
                else {
                    header ("Location: login.php?status=success");
                }

            }
        }
        
    } 
    else{
        echo "Passwords do not match!";
    }
}









?>


<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from laravel.spruko.com/dashlead/Leftmenu-Icon-Light/signup by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 09:29:55 GMT -->
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
		<title>Super Admin Registration</title>

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
							<h4 class="text-center">Register</h4>
							<form class="form" method="POST">
								<div class="form-group text-left">
									<input class="form-control" placeholder="Full Name" name="User_full_name" type="text">
								</div>
								<div class="form-group text-left">
									<input class="form-control" placeholder="preffered User Name" name="Login_username" type="text">
								</div>
								<div class="form-group text-left">
									<input class="form-control" placeholder="Email" name="User_email" type="email">
								</div>
								<div class="form-group text-left">
									<input class="form-control" placeholder="Phone Number" name="User_mobile" type="tel">
								</div>
								<div class="form-group text-left">
									<input class="form-control" placeholder="Password" name="Login_password" type="password">
								</div>
								<div class="form-group text-left">
									<input class="form-control" placeholder="Confirm password" name="cpass" type="password">
								</div>
								<button class="btn ripple btn-main-primary btn-block" name="submit">Create Account</button>
							</form>
							<div class="mt-3 text-center">
								<p class="mb-0">Already have an account? <a href="login.php">Sign In</a></p>
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

<!-- Mirrored from laravel.spruko.com/dashlead/Leftmenu-Icon-Light/signup by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 09:29:55 GMT -->
</html>