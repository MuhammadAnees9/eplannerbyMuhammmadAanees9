<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome || Contact</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
</head>
	<body>
	<div class="container-fluid">
	<nav class="navbar navbar-inverse">
  	<div class="row">
  		<div class="col-lg-2 col-md-2 cold-sm-12">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Logo</a>
	    </div>
	    </div>
	    <div class="col-lg-6 col-md-6 col-sm-12">
	    <ul class="nav navbar-nav" style="float: left; ">
	    	<li><a href="index.php">Home</a></li>
	      	<li class="active"><a href="#">Deals</a></li>
	      	<li><a href="category.php">Category</a></li>
	   		<li><a href="faqs.php">FAQ</a></li>
	      	<li><a href="about.php">About Us</a></li>
	      	<li><a href="contact.php">Contact Us</a></li>
	    </ul>
	    </div>
	    <div class="col-lg-4 col-md-4 col-lg-12">
	    <ul class="nav navbar-nav navbar-right">
	    	<li><a href="#"><span class="glyphicon glyphicon-hand-right"></span> Create Your Business</a></li>
	      	<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	      	<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    </ul>
	    </div>
    </div>
	</nav><br>
	<section class="container">
		 <div class="row" style="background-color: #788080;">
      <div class="col-lg-2 col-md-2 col-sm-12"></div>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h3>SUBSCRIBE TODAY</h3>
          <h4>subscribe for events and promotions!!</h4>
        </div><br><br>
        <div class="col-lg-4 col-md-4 col-sm-12">  
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
           <button type="submit" class="btn btn-primary btn-block" name="subscribe">Subscribe</button>
        </div>
      </div>
    </div>
	</section><br>
	<div class="row">
		<div class="col-lg-1 col-md-1 col-sm-12"></div>
		<div class="col-lg-10 col-md-10 col-sm-12">
			<div class="col-lg-7 col-md-7 col-sm-12">
				<h2>We Arrange</h2>
				<h1>Most Celebrated Events</h1>
				<img src="images/about-img.jpg">
			</div><br><br><br><br><br><br>
			<div class="col-lg-5 col-md-5 col-sm-12">
				<p>Venuehub.pk is Provides in Lahore Pakistan and it is quite capable of all handling any type and size of functions including Weddings, Birthday Parties , Social Gatherings and Corporate Functions. Asian Events caters to all classes of the country and many reputed national, multinational organizations. We look after clients every need and offer best services of Event Management, Event Designing, Event Services, Decorator & Catering Services.</p><br>
				<p>At Venuehub Events, your special day holds such importance for us that we settle for nothing but perfect. Creating you lasting memories, more than just moments, we take nothing lightly and dedicate ourselves towards weaving your dreams. Taking inspiration from our clients and working closely with them, we give them confidence from sketches to bringing everything alive. We innovate everything we do from architectural set up, floral arrangements, lighting and every tiny detail to make your event gorgeous and surreal – nothing that’ll be forgotten easy!</p>
			</div>
		</div>
	</div>
	</div><br><br>
		<div class="container-fluid">
		<!-- stickyfooter -->
		<?php include 'stickyfooter.php'; ?>
	</div><br>
	</body>
</html>