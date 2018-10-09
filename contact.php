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
	      	<li><a href="Signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
	<div class="container" style="background-color: #788080;">
		<div class="row">
			<div class="col-lg-2 col-md-2 cold-sm-12"></div>
				<div class="col-lg-8 col-md-8 col-sm-12">
		<h1 style="text-align: center;">Contact Us</h1>
		<p>If you would like to find out more about our available acts, or have an upcoming event and would like our expert team to help you plan the perfect entertainment for your guests, get in touch using the details below to discuss things further.</p>
			</div>
			<div class="col-lg-2 col-md-2 cold-sm-12"></div>
		</div><br>
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-12"></div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h4 style="text-align: left;">Email:</h4> <h5>assorttec@gmail.com</h5>
				<h6 style="text-align: left;"><h4>Mobile:</h4> 0313-4369199</h6>
				<h6 style="text-align: left;"><h4>Office:</h4> 042-123456789</h6>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<i class="fa fa-facebook-square" style="font-size:36px"></i><br><br>
				<i class="fa fa-git-square" style="font-size:36px"></i><br><br>
				<i class="fa fa-twitter-square" style="font-size:36px"></i>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-12"></div>
			<div class="col-md-8 col-md-8 col-sm-12">
				<div class="col-lg-4 col-md-4 col-sm-12"><h3>Name:</h3>
				<div class="form-label-group">
                <input type="text" id="inputName" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
              </div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12"><h3>Email:</h3>
				<div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              </div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12"><h3>Phone:</h3>
					<div class="form-label-group">
                <input type="text" id="inputContact" class="form-control" placeholder="Contact" required="required" autofocus="autofocus">
              </div>
				</div>
			</div>
		</div>
		<div class="row"><br>
			<div class="col-lg-2 col-md-2 col-sm-12"></div>
			<div class="col-lg-8 col-md-8 col-sm-12">
				<div class="form-label-group">
                <textarea type="textarea" id="inputMessage" class="form-control" placeholder="Leave Message" required="required" autofocus="autofocus"></textarea>
              </div><br>
	            <div class="col-lg-2 col-md-2 col-sm-12">
	           <button type="submit" class="btn btn-primary btn-block" name="subscribe">Submit</button>
        	</div>
			</div>
		</div><br>
	</div><br><br>
	</div>
		<div class="container-fluid">
		<!-- stickyfooter -->
		<?php include 'stickyfooter.php'; ?>
	</div><br>
	</body>
</html>