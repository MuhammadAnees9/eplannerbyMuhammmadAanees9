<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Welcome || Online Event Booking System</title>
	 <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 ">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">logo</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Deals</a></li>
						<li><a href="category.php">Category</a></li>
						<li><a href="faqs.php">FAQ</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="contact.php">Contact us</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-lock"></span> Create your Business</a>
						</li>
						<li><a href="signup.html" ><span class="glyphicon glyphicon-user"></span> Sign Up</a>
						</li>
						<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a>
						</li>
					</ul>
				</div>
			</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<?php include 'textbox.php'; ?>
					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		</nav>
	</div>
	<br>
	<div class="container-fluid">
		<div class="row">
			<!-- for filter category -->
			<div class="col-lg-3 col-md-3 col-sm-12">
				<h3>Filter Category:</h3><br>
				<label><input type="checkbox" name="checkbox"> Marriage</label><br>
				<label><input type="checkbox" name="checkbox"> Vacation Rental</label><br>
				<label><input type="checkbox" name="checkbox"> Honeymoon</label><br>
				<label><input type="checkbox" name="checkbox"> Meetings</label><br><br>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Find</button>
			</div>
			<!-- for Hall images and descritpion box  -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="row" style="background-color: #4435;">
					<!-- For image  -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4 ">
						<h4>Pearl Continental Hotel Mall Road.</h4>
						<img src="images/SC_0100_1.jpg" class="img-rounded" style="height: 160px; width: 200px;">
					</div>
					<!-- for description -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4">
						<p>15% discount on Laundry, Pastry & Bakery Shop, Business Center & Rent-a-Car service.
						</p>
						<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Contact Detail</button>
						<br>
						<div id="demo" class="collapse">Tel: +92 (042) 111-505-505Ext. 2883 or Email: hafiz.asim@pchotels.com
						</div><br>
						<h5>Delux King Room</h5>
						<h5>Price for 1 night</h5>
					</div>
					<!-- for addresa and book now button   -->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<p>Mall Rd, G.O.R. - I, Lahore, Punjab</p><br>
						<h4>PKR 21,000</h4>
						<h5>3 People</h5>
						<h5>1 King Bed</h5><br>
						<a href="Project/Frontlayout.php" class="btn btn-primary">Booki Now</a>
					</div>
				</div>
			</div>
			<!-- for Ads  -->
			<div class="col-lg-3 col-md-3 cold-sm-12">
				<img src="images/itemImage_1.jpg" style="width: 300px; height: 220px;">
			</div>
		</div><br>
		<div class="row">
			<!-- for filters category -->
			<div class="col-lg-3 col-md-3 cold-sm-12">
				<!-- empity -->
			</div>
			<!-- for hall image and description box -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="row" style="background-color: #4435;">
					<!-- for image -->
					<div class="col-lg-4 col-md-4 col-sm-12">
						<h4>The Nishat Hotel Johar Town.</h4>
						<img src="images/the-nishat-hotel-johar.jpg" class="img-rounded" style="height: 160px; width: 200px;">
					</div>
					<!-- for description -->
					<div class="col-lg-4 col-md-4 col-sm-12">
						<p>Free WiFi in lobby and free parking</p><br>
						<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#dem">Contact Detail</button><br>
						<div id="dem" class="collapse">Book online or call 1-866-599-6674
						</div><br>
						<h5>Double Room</h5>
						<h5>Price for 2 nights</h5>
					</div>
					<!-- for address and book now button -->
					<div class="col-lg-4 col-md-4 col-sm-12">
						<p>Abdul Haque Road | adjoining Emporium Mall, Lahore 54600, Pakistan</p><br>
						<h4>PKR 32,000</h4>
						<h5>Breakfast included</h5><br>
						<a href="Project/Frontlayout.php" class="btn btn-primary">Booki Now</a>
					</div>
				</div>
			</div>
			<!-- for ads -->
			<div class="col-lg-3 col-md-3 cold-sm-12">
				<img src="images/Lahore-Cable.jpg" style="height: 230px;px; width: 280px;">
			</div>
		</div>
		<div class="row">
			<!-- for filters category -->
			<div style="height: 200px;" class="col-lg-12 col-md-12 cold-sm-12">
				
			</div>
		</div>
	</div>
	<div class="container-fluid">
		 <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
		<!-- stickyfooter -->
		<?php include 'stickyfooter.php'; ?>
	</div><br>
     <!-- Bootstrap core JavaScript-->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Core plugin JavaScript-->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
		<!-- Page level plugin JavaScript-->
		<script src="vendor/chart.js/Chart.min.js"></script>
		<script src="vendor/datatables/jquery.dataTables.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
		<!-- Custom scripts for all pages-->
		<script src="js/sb-admin.min.js"></script>
		<!-- Demo scripts for this page-->
		<script src="js/demo/datatables-demo.js"></script>
		<script src="js/demo/chart-area-demo.js"></script>
	</body>
	</html>