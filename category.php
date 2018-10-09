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
            <li><a href="Project/signup.html" ><span class="glyphicon glyphicon-user"></span> Sign Up</a>
            </li>
            <li><a href="Project/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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
          <?php include 'textboxex.php'; ?>
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
    <div class="row" style="background-color: #788080;">
      <div class="col-lg-2 col-md-2 col-sm-12"></div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="col-lg-5 col-md-5 col-sm-12">
          <h3>SUBSCRIBE TODAY</h3>
          <h4>subscribe for events and promotions!!</h4>
        </div><br><br>
        <div class="col-lg-5 col-md-5 col-sm-12">  
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
           <button type="submit" class="btn btn-primary btn-block" name="subscribe">Subscribe</button>
        </div>
      </div>
    </div>
    </div><br>
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h3 style="text-align: center;">Marriage</h3>
        <img src="images/hqdefault.jpg" class="img-rounded" style="width: 300px; height: 200px;">  
      </div>
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h3 style="text-align: center;">Honeymoon</h3>
        <img src="images/Honeymoon-Special5.jpg" class="img-rounded" style="width: 300px; height: 200px;">
      </div>
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h3 style="text-align: center;">Meetings</h3>
        <img src="images/meetings.jpg" class="img-rounded" style="width: 300px; height: 200px;">
      </div>
       <div class="col-lg-3 col-md-3 col-sm-12">
      <h3 style="text-align: center;">Adds</h3>
    </div>
    </div><br>
    <div class="row">
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h3 style="text-align: center;">Seminars</h3>
        <img src="images/Bangkok-seminar-450.jpg" class="img-rounded" style="width: 300px; height: 200px;">
      </div>
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h3 style="text-align: center;">Party</h3>
        <img src="images/feature.jpg" class="img-rounded" style="width: 300px; height: 200px;">
      </div>
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h3 style="text-align: center;">Vacation Rental</h3>
        <img src="images/Travel-7.jpg-904.jpg" class="img-rounded" style="width: 300px; height: 200px;">
      </div>
       <div class="col-lg-3 col-md-3 col-sm-12">
      <h3 style="text-align: center;">Adds</h3>
    </div>
    </div>
  </div><br><br>
  <div class="container-fluid">
    <!-- stickyfooter -->
    <?php include 'stickyfooter.php'; ?>
  </div><br>
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