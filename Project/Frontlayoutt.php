<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome || Online Event Booking System </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	      	<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	      	<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    </ul>
	    </div>
    </div>
	</nav>
	</div><br>
	<div class="container">
		<div class="row">
		           		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Book Now</button>

							<div id="myModal1" class="modal fade" role="dialog">
							<div class="modal-dialog">
							<div class="modal-content" style="background-color: #6E7676;">
							<div class="card bg-secondary text-white">
						    <div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4 class="modal-title" style="color: #FFFFFF;">Pearl Continental Hotal Mall Road</h4>
      					</div>
      				<div class="modal-body">
      					<div class="row">
      					<!-- For popup -->
      					<!-- Modal Structure -->
  <div id="modal1" class="modal" style="height: 100% ">
    <div class="modal-content">
      <?php 
      if(empty($_SESSION['user']))
      { ?>
      	<a class="btn btn-large" href="login.php">LOGIN</a>
      	<a class="btn btn-large" href="signup.php">SIGN UP</a>
      <?php }
      else
      { ?>
      	<h5>Booking Info</h5>
      	<form action="bookingAction.php?bid=<?php echo $bid; ?>" method="post">
      		<div class="input-field">
      			<input type="text" class="datepicker" name="bdate">
      			<label>Booking Date</label>
      		</div>
      		<div class="input-field">
      			<input type="text" name="stime" class="timepicker" placeholder="Start Time">
      		</div>
      		<div class="input-field">
      			<input type="text" name="etime" class="timepicker" placeholder="End Time">
      		</div>
      		<div class="input-field">
      			<select name="eventType">
      				<?php $event = mysqli_query($conn, "SELECT * FROM `services` WHERE bid='$bid'");
      				while($sres = mysqli_fetch_assoc($event)){
      					echo "<option value='".$sres['sname']."'>".$sres['sname']."</option>";
      				} ?>
      			</select>
      		</div>
      		<!--div class="input-field">
      			<select>
      				<option>Biryani</option>
      				<option>Chicken</option>
      				<option>Mutton</option>
      			</select>
      			<label>Meal Selection</label>
      		</div-->

      		<div class="input-field">
      			<button class="btn" type="submit" name="book">CONFIRM</button>
      		</div>
      	</form>
      <?php }
      ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">CANCEL</a>
    </div>
  </div>
      					</div>
      					</div>
      					</div>
      				</div>
    					</div>
  						</div>
						</div>
		     		</div>
		    	</div>
			</div>
			<!-- for Ads  -->
			<div class="col-lg-4 col-md-4 cold-sm-12">
				<img src="images/itemImage_1.jpg" style="width: 350px; height: 220px;">
			</div>
		</div><br>
	</div>
	<div class="container">
		<div class="row">
			<!-- for hall image and description box -->
			<div class="col-lg-8 col-md-8 col-sm-12">
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
  						<div id="dem" class="collapse">Book online or call 1-866-599-6674</div><br>
						<h5>Double Room</h5>
						<h5>Price for 2 nights</h5>
					</div>
					<!-- for address and book now button -->
					<div class="col-lg-4 col-md-4 col-sm-12">   
						<p>Abdul Haque Road | adjoining Emporium Mall, Lahore 54600, Pakistan</p><br>
						<h4>PKR 32,000</h4>
						<h5>Breakfast included</h5>
						<br>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Book Now</button>
						<a href="signup.php" type="button" class="btn btn-primary">Registration</a>
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
					    <div class="modal-content" style="background-color: #6E7676;">
					    <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title" style="color: #FFFFFF;">The Nishat Hotel Johar Town</h4>
					    </div>
      						<div class="modal-body">
      					<div class="row">
      					<!-- For popup -->
      					<div class="col-lg-12 col-md-12 col-sm-12">
      						<input id="usr" type="Date" class="form-control" name="name" placeholder=" Please Select Date"><br>
      						<input id="usr" type="Time" class="form-control" name="name" placeholder=" Please Select Starting Time"><br>
      						<input id="usr" type="Time" class="form-control" name="name" placeholder=" Please Select End Time"><br>
			      			 <div class="form-label-group">
                			<select type="text" id="selectType" class="form-control" name="type" autofocus="autofocus">
                  			<option>As Admin</option>
                  			<option>As Business</option>                  
                  			<option>As User</option>
              				</select>
              				</div><br>
    			  		    <button type="button"class="btn btn-primary" data-dismiss="modal" data-target="#">Cancel</button>
	      				    <button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#">Book now</button><br>
      					</div>
      					</div>
      					</div>
    					</div>
  					</div>
				</div>
					</div>
				</div>
			</div>
			<!-- for ads -->
			<div class="col-lg-4 col-md-4 cold-sm-12">
				<img src="images/Lahore-Cable.jpg" style="height: 220px;px; width: 350px;">
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<!-- for filters category -->
			<div style="height: 200px;" class="col-lg-12 col-md-12 cold-sm-12"></div>
		</div>
	</div>
		<div class="container-fluid">
		<!-- stickyfooter -->
		<?php include 'stickyfooter.php'; ?>
	</div><br>
	</body>
</html>