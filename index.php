<?php 
session_start();
include 'conn.php';
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
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
						<a class="navbar-brand" href="index.php">logo</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Deals</a></li>
						<li><a href="Project/category.php">Category</a></li>
						<li><a href="Project/faqs.php">FAQ</a></li>
						<li><a href="Project/about.php">About us</a></li>
						<li><a href="Project/contact.php">Contact us</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="createbusiness.php"><span class="glyphicon glyphicon-lock"></span> Create your Business</a>
						</li>
						<li><a href="signup.php" ><span class="glyphicon glyphicon-user"></span> Sign Up</a>
						</li>
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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
			<div class="col-lg-2 col-md-2 col-sm-12">
				 <p>
        <h4>Select a Function</h4>
        <?php 
        $ser = mysqli_query($conn, "SELECT DISTINCT sname FROM `services`");
        while($allS = mysqli_fetch_assoc($ser)){
         ?><br>
        
        <input type="checkbox" name="services[]" id="<?php echo $allS['sname']; ?>" value="<?php echo $allS['sname']; ?>"><br>
        <label style="width: 100%" for="<?php echo $allS['sname']; ?>"> <?php
        echo $allS['sname'];
         ?></label>
        <?php } ?>
      </p>
      <p class="range-field">
        <label>Price Range</label>
      <input type="range" id="bfee" min="500" max="5000" />
    </p>
     <button class="btn" id="filter">FILTER</button>
			</div>
			<!-- for Hall images and descritpion box  -->
			<div class="col-lg-6 col-md-6 col-sm-12" >
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-12"></div>
    <?php 
    $fq = "SELECT `business`.*, `images`.iname FROM `business` LEFT JOIN `images` ON `business`.id=`images`.bid ";
    if(isset($_GET['city']))
    {
      $bcity = $_GET['city'];
      $fq .= "WHERE `business`.bcity='$bcity' ";
    }
    if(isset($_GET['area']))
    {
      $barea = $_GET['area'];
      $fq .= "AND `business`.barea='$barea' ";
    }
    $services = array();
    if(isset($_GET['services']))
    $services = explode(",",$_GET['services']);
    array_pop($services);

    if(isset($_GET['fee']))
    {
      $fee = $_GET['fee'];
      $fq = $fq." AND `business`.bookingFee<='$fee'";
    }
    $fq = $fq." GROUP BY `business`.id";
    $fetch = mysqli_query($conn, $fq);
    $c = mysqli_num_rows($fetch);
    
$isS = 'true';
    while($res = mysqli_fetch_assoc($fetch)){
      $bid = $res['id'];
     if(!empty($services)){
    $qbs = mysqli_query($conn, "SELECT sname FROM `services` WHERE bid='$bid'");
    
    while($bs = mysqli_fetch_assoc($qbs)){
      if(in_array($bs['sname'], $services)){
        $isS = 'false';
       
      }
      else{
        $isS = 'true';
      }
    }
  }
  if($isS=='false')
    continue;
    ?>
  <div class="row">
    <div class="col s12 m12">
    <h5 class="header"><?php echo $res['bname']; ?></h5>
    <div class="card horizontal">
      <div class="card-image col s3">
        <img style="height: 130px !important" src="<?php echo 'images/business/'.$res['iname']; ?>" class="materialboxed">
        
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <span><?php echo $res['bdesc'] ?></span>
          
          <ul class="row">
            <li class="col s6"><i class="material-icons">phone</i>
            <?php echo $res['bcontact']; ?>  
            </li><br>
            <li class="col s6"><i class="material-icons">location_on</i>
            <?php echo $res['blocation']; ?>
            </li><br>
            <li class="col s9"><i class="material-icons">restaurant</i><br>
              <?php 
              
              $qin = mysqli_query($conn, "SELECT sname FROM `services` WHERE bid='$bid'");
              while($sall = mysqli_fetch_assoc($qin)){
                echo "<u style='margin-right:6px'>".$sall['sname']."</u> ";
              }
               ?>
              
            </li><br>
            <li ><i class="material-icons">monetization_on</i>
              <?php echo $res['bookingFee'] ?>
              <a class="btn btn-floating" href="<?php echo 'Frontlayout.php?bid='.$res['id'] ?>"><i class="material-icons">arrow_forward</i></a>
            </li>
          </ul>

        </div>
        
      </div>
    </div>
  </div>
  </div>
  <?php } ?>
</div>		
</div><br>		
</div>
<?php if($c>4){ ?>
  <ul class="pagination" style="text-align: center;">
    <?php for($i=1;$i<=$c/5;$i++){ ?>
    <li class="waves-effect"><a href="<?php echo 'index.php?p='.$i; ?>"><?php echo $i; ?></a></li>
    <?php } ?>
    </ul> <?php } ?>
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
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/all.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
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