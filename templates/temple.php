<?php
include 'config.php';
session_start();
if(! isset($_SESSION["login_rank"])){
    header("Location: login.php");
} else {
    if ($_SESSION["login_rank"] != '1'){
        header("Location: notauthorized.php");
    }
}


?>


<?php require_once 'ti.php' ?>
<!DOCTYPE html>
<html lang="en">
	
<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
		<meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
		<!-- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<title>Goods Dispatch System</title>

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

		<!---Select2 css-->
<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">
<!--Mutipleselect css-->
<link rel="stylesheet" href="assets/plugins/multipleselect/multiple-select.css">
<!---Jquery.mCustomScrollbar css-->
<link href="assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

		<!---Sidebar css-->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!---Sidemenu css-->
		<link href="assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">
		
		
		<!---Switcher css-->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="assets/switcher/demo.css" rel="stylesheet">	</head>

	<body>
		
		<!-- Start Switcher -->
		<div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="demo-icon bg_dark"><i class="fa fa-cog fa-spin  text_primary"></i></div>
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							
							<div class="swichermainleft">
								<h4>Theme Layout</h4>
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Light Theme</span>
										<div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch" class="onoffswitch2-checkbox" checked>
											<label for="myonoffswitch" class="onoffswitch2-label"></label>
										</div>
									</div>
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Dark Theme</span>
										<div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch1" class="onoffswitch2-checkbox" >
											<label for="myonoffswitch1" class="onoffswitch2-label"></label>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="swichermainleft">
								<h4>Header Styles Mode</h4>
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Color Header</span>
										<div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox">
											<label for="myonoffswitch3" class="onoffswitch2-label"></label>
										</div>
									</div>
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Graident Header</span>
										<div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
											<label for="myonoffswitch4" class="onoffswitch2-label"></label>
										</div>
									</div>
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Reset Header</span>
										<div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch2" class="onoffswitch2-checkbox">
											<label for="myonoffswitch2" class="onoffswitch2-label"></label>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Leftmenu Styles Mode</h4>
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Color Menu</span>
										<div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch10" class="onoffswitch2-checkbox">
											<label for="myonoffswitch10" class="onoffswitch2-label"></label>
										</div>
									</div>
									<div class="switch-toggle d-flex dark-switch">
										<span class="mr-auto">Dark Menu</span>
										<div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch11" class="onoffswitch2-checkbox">
											<label for="myonoffswitch11" class="onoffswitch2-label"></label>
										</div>
									</div>
									<div class="light-switch">
										<div class="switch-toggle d-flex">
											<span class="mr-auto">Light Menu</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch9" class="onoffswitch2-checkbox">
												<label for="myonoffswitch9" class="onoffswitch2-label"></label>
											</div>
										</div>
									</div>
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Gradient-Color Menu</span>
										<div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch12" class="onoffswitch2-checkbox">
											<label for="myonoffswitch12" class="onoffswitch2-label"></label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Switcher -->
		


		<!-- Page -->
		<div class="page">
			<!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				
				<div class="main-sidebar-body">
					<ul class="nav">
						<li class="nav-label">Dashboard</li>
						<li class="nav-item show">
							<a class="nav-link" href="dashboard.php"><i class="fe fe-airplay"></i><span class="sidemenu-label">Dashboard</span></a>
						</li>
						<li class="nav-label">Features</li>
						
			
                        <li class="nav-item">
							<a class="nav-link with-sub" href="#"><i class="fe fe-briefcase"></i><span class="sidemenu-label">Categories</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="addcategory.php">Create Category</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="category.php">View Categories</a>
								</li>
								
							</ul>
						</li>

                        <li class="nav-item">
							<a class="nav-link with-sub" href="#"><i class="fe fe-flag"></i><span class="sidemenu-label">Dispatches</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="adddispatch.php">Create Dispatch</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="dispatch.php">View Dispatches</a>
								</li>
								
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><i class="fe fe-user"></i><span class="sidemenu-label">Drivers</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="adddriver.php">Add Driver</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="driver.php">View Drivers</a>
								</li>
								
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><i class="fe fe-dollar-sign"></i><span class="sidemenu-label">Payment</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="selectpayment.php">Create Payment</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="payment.php">View Payments</a>
								</li>
								
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><i class="fe fe-message-square"></i><span class="sidemenu-label">Customer Requests</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="addrequest.php">Create New Request</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="request.php">View Customer Requests</a>
								</li>
								
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><i class="fe fe-map-pin"></i><span class="sidemenu-label">Stations</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="addstation.php">Add Station</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="station.php">View Stations</a>
								</li>
								
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><i class="fe fe-truck"></i><span class="sidemenu-label">Vehicles</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="addvehicle.php">Add Vehicle</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="vehicle.php">View Vehicles</a>
								</li>
								
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><i class="fe fe-users"></i><span class="sidemenu-label">Users</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								
							
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="users.php">View Users</a>
								</li>
							</ul>
						</li>
						

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><i class="fe fe-file-text"></i><span class="sidemenu-label">Receipts</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="print.php">View Receipts</a>
								</li>

								
							</ul>
						</li>
                        
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->
			<!-- Main Content-->
			<div class="main-content side-content pt-0">
				<!-- Main Header-->
				<div class="main-header side-header sticky">
					<div class="container-fluid">
						<div class="main-header-left">
							
							<a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
						</div>
						<div class="main-header-right">
							
							<div class="dropdown main-profile-menu">
								<a class="main-img-user" href="#"><img alt="avatar" src="assets/img/users/1.png"></a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="changepassword.php">
										<i class="fe fe-edit"></i> Change Password
									</a>
									
									<a class="dropdown-item" href="logout.php">
										<i class="fe fe-power"></i> Sign Out
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>
            </div>    
			<div class="main-content side-content pt-0">
            <?php startblock('student') ?>
			

            <?php endblock() ?>
			</div>
			<div class="main-footer text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<span> <a href="#">Goods Dispatch System</a>. Designed by LIH. All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
			<!--End Footer-->
		</div>
		<!-- End Page -->
		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js-->
		<script src="assets/plugins/ionicons/ionicons.js"></script>
		
		<!-- Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- Flot Chart js-->
<script src="assets/plugins/jquery.flot/jquery.flot.js"></script>
<script src="assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
<script src="assets/js/chart.flot.sampledata.js"></script>
<!-- Chart.Bundle js-->
<script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Peity js-->
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<!-- Jquery-Ui js-->
<script src="assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>
<!-- Select2 js-->
<script src="assets/plugins/select2/js/select2.min.js"></script>
<!--MutipleSelect js-->
<script src="assets/plugins/multipleselect/multiple-select.js"></script>
<script src="assets/plugins/multipleselect/multi-select.js"></script>
<!-- Jquery.mCustomScrollbar js-->
<script src="assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- index -->
<script src="assets/js/index.js"></script>
		
		<!-- Perfect-scrollbar js-->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- Sidemenu js-->
		<script src="assets/plugins/sidemenu/sidemenu.js"></script>
		
		<!-- Sidebar js-->
		<script src="assets/plugins/sidebar/sidebar.js"></script>

		<!-- Sticky js-->
		<script src="assets/js/sticky.js"></script>
		
		<!-- Switcher js-->
		<script src="assets/switcher/js/switcher.js"></script>
		
		<!-- Custom js-->
		<script src="assets/js/custom.js"></script>

		

	
	</body>

<!-- Mirrored from laravel.spruko.com/dashlead/Leftmenu-Icon-Light/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 09:23:39 GMT -->
</html>