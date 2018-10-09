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
  	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
	      <a class="navbar-brand" href="index.php">Logo</a>
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
	    	<li><a href="createbusiness.php"><span class="glyphicon glyphicon-hand-right"></span> Create Your Business</a></li>
	      	<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	      	<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    </ul>
	    </div>
    </div>
	</nav>
	</div><br>
	<div class="container">
	<?php $bid = $_GET['bid'];
	include 'conn.php';
	$q = mysqli_query($conn, "SELECT `business`.*, `images`.iname FROM  `business` LEFT JOIN `images` ON `business`.id=`images`.bid WHERE `business`.id='$bid' GROUP BY `business`.id");
	while($res = mysqli_fetch_assoc($q)){
	?>
	<div class="row">
		<h5><?php echo $res['bname'] ?></h5>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<?php 
			$qim = mysqli_query($conn, "SELECT * FROM `images` WHERE bid='$bid'");
			$i=0;

			?>
			<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="card" style="width:250px">
            <div class="card-image">
              <img src="<?php echo 'images/business/'.$res['iname'] ?>" id="firstImage" class="materialboxed">
              <span class="card-title"><?php //echo $res['bname'] ?></span>
            </div>
            
            <div class="card-action">
            	<?php
            	while($resin = mysqli_fetch_assoc($qim)){
            		
            		?>
              <img src="<?php echo 'images/business/'.$resin['iname']; ?>" style="width: 25%; height: 25%">
              <?php
              $i++;
               } ?>
            </div>
          </div>
      </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<?php 
$location = 'https://maps.googleapis.com/maps/api/staticmap?center='.$res['blocation'].'&zoom=17&size=600x300&maptype=roadmap
&markers=color:blue%7Clabel:S%7C40.702147,-74.015794&markers=color:green%7Clabel:G%7C40.711614,-74.012318
&markers=color:red%7Clabel:C%7C40.718217,-73.998284
&key=AIzaSyDlLj6GIDONnI7i5GpK4Mrp9z8uqEKaFS4';

			 ?>
			<img src="<?php echo $location ?>" class="materialboxed" data-caption="A Picture of Pearl Merriage Hall Map" style="width: 100%">
			
		</div>
	</div>
	<div class="row">
		
		<div class="col-lg-6 col-md-6 col-sm-12">
			<ul>
				<li class="col-lg-6 col-md-6 col-sm-12">
					<i class="material-icons">phone</i>
					<?php echo $res['bcontact'] ?>
				</li>
				<li class="col-lg-6 col-md-6 col-sm-12">
					<a class="btn modal-trigger" href="#modal1">Book Now</a>
				</li>
				<li>
					<i class="material-icons">location_on</i>
					<?php echo $res['blocation'] ?>
				</li>
				<li>
					
					<span id="rateYo"></span>
				</li>
			</ul>
		</div>
		<div class="col s6">
			<p>
				<?php echo $res['bdesc']; ?>
			</p>
		</div>
	</div>
<?php } ?>
	 <!-- Modal Structure -->
  <div id="modal1" class="modal" style="height: 100% ">
    <div class="modal-content">
      <?php 
      if(empty($_SESSION['users']))
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
<?php 
if(isset($_GET['bid'])){
	$qd = mysqli_query($conn, "SELECT bookingDate FROM `bookings` WHERE bid='$bid'");
	while($dres = mysqli_fetch_assoc($qd))
	{
		$dis = $dres['bookingDate']; 
 ?>

<script type="text/javascript">
$(document).ready(function(){
	var dbd = "<?php echo $dis ?>";


$(".picker__day").each(function(){
	if($(this).attr("aria-label")==dbd)
		$(this).hide();

});
});
</script>
<?php
}
}
  ?>

  <script type="text/javascript">
	$(document).ready(function(){
		$(function(){
	$("#rateYo").rateYo({
    rating: 3.4,
    readOnly: true
  });
});
});
</script>
	</div>
		<div class="container-fluid">
		<!-- stickyfooter -->
		<?php include 'stickyfooter.php'; ?>
	</div><br>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/all.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
	</body>
</html>