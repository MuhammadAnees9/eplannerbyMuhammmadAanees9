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
  <nav class="nav-extended" style="background-color: #424342">
    <div class="row">
    <div class="col-lg-12 col-md-12 cold-sm-12">
      <div class="nav-content">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Deals</a></li>
            <li><a href="project/category.php">Category</a></li>
            <li><a href="project/faqs.php">FAQ</a></li>
            <li><a href="project/about.php">About us</a></li>
            <li><a href="project/contact.php">Contact us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="createbusiness.php"><span class="glyphicon glyphicon-lock"></span> Create your Business</a>
            </li>
            <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
            </li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
          </ul>
        </div>
    </div>
</div>
  </nav>
  <div style="margin-top: -20px;" id="myCarousel" class="carousel slide" data-ride="carousel">
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
</div><br>
    <div class="container-fluid">
    <div class="row">
      <!-- for filter category -->
      <div class="col-lg-2 col-md-2 col-sm-12">
         <p>
        <label>Select a Function:</label><br><br>
         <?php
         include 'conn.php';
        $ser = mysqli_query($conn, "SELECT DISTINCT sname FROM `services`");
        while($allS = mysqli_fetch_assoc($ser)){
         ?>
        <input type="checkbox" name="services[]" id="<?php echo $allS['sname']; ?>" value="<?php echo $allS['sname']; ?>">
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
      <div class="col s8" style="border-left: 1px solid;border-right: 1px solid;">
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
    $qbs = mysqli_query($con, "SELECT sname FROM `services` WHERE bid='$bid'");
    
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
            </li>
            <li class="col s6"><i class="material-icons">location_on</i>
            <?php echo $res['blocation']; ?>
            </li>
            <li class="col s9"><i class="material-icons">restaurant</i>
              <?php 
              
              $qin = mysqli_query($conn, "SELECT sname FROM `services` WHERE bid='$bid'");
              while($sall = mysqli_fetch_assoc($qin)){
                echo "<u style='margin-right:6px'>".$sall['sname']."</u> ";
              }
               ?>
              
            </li>
            <li ><i class="material-icons">monetization_on</i>
              <?php echo $res['bookingFee'] ?>
              <a class="btn btn-floating" href="<?php echo 'frontlayout.php?bid='.$res['id'] ?>"><i class="material-icons">arrow_forward</i></a>
            </li>
          </ul>

        </div>
        
      </div>
    </div>
  </div>
  </div>
  <?php } ?>
</div><br>    
</div>
<?php if($c>4){ ?>
  <ul class="pagination" style="text-align: center;">
    <?php for($i=1;$i<=$c/5;$i++){ ?>
    <li class="waves-effect"><a href="<?php echo 'index.php?p='.$i; ?>"><?php echo $i; ?></a></li>
    <?php } ?>
    </ul> <?php } ?>
</div>

  <!-- stickyfooter -->
  <?php include 'stickyfooter.php'; ?>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/all.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
  </body>
</html>