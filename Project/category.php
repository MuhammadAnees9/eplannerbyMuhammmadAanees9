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
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Deals</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="faqs.php">FAQ</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="contact.php">Contact us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../createbusiness.php"><span class="glyphicon glyphicon-lock"></span> Create your Business</a>
            </li>
            <li><a href="../signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
            </li>
            <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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
</div><br>
  <section>
     <div class="row" style="background-color: #788080;">
      <div class="col-lg-2 col-md-2 col-sm-12"></div>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h5>SUBSCRIBE TODAY</h5>
          <p>subscribe for events and promotions!!</p>
        </div><br><br>
        <div class="col-lg-4 col-md-4 col-sm-12">  
        <input style="background-color: #ffffff;" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
           <button type="submit" class="btn btn-block" name="subscribe">Subscribe</button>
        </div>
      </div>
    </div>
  </section>
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h5 style="text-align: center;">Marriage</h5>
        <img src="images/hqdefault.jpg" class="img-rounded" style="width: 300px; height: 200px;">  
      </div>
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h5 style="text-align: center;">Honeymoon</h5>
        <img src="images/Honeymoon-Special5.jpg" class="img-rounded" style="width: 300px; height: 200px;">
      </div>
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h5 style="text-align: center;">Meetings</h5>
        <img src="images/meetings.jpg" class="img-rounded" style="width: 300px; height: 200px;">
      </div>
       <div class="col-lg-3 col-md-3 col-sm-12">
      <h5 style="text-align: center;">Adds</h5>
    </div>
    </div><br>
    <div class="row">
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h5 style="text-align: center;">Seminars</h5>
        <img src="images/Bangkok-seminar-450.jpg" class="img-rounded" style="width: 300px; height: 200px;">
      </div>
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h5 style="text-align: center;">Party</h5>
        <img src="images/feature.jpg" class="img-rounded" style="width: 300px; height: 200px;">
      </div>
      <div class="col-lg-3 col-md-3 col col-sm-12">
        <h5 style="text-align: center;">Vacation Rental</h5>
        <img src="images/Travel-7.jpg-904.jpg" class="img-rounded" style="width: 300px; height: 200px;">
      </div>
       <div class="col-lg-3 col-md-3 col-sm-12">
      <h5 style="text-align: center;">Adds</h5>
    </div>
    </div>
  </div><br><br><br>

<!-- stickyfooter -->
  <?php include 'stickyfooter.php'; ?>
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/all.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
  </body>
</html>