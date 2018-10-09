<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Welcome || Create Business </title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>
  <body id="page-top">
     <!-- Header.php -->
    <?php include 'header.php'; ?>
    <!-- logoutmodel -->
    <?php include 'logoutmodel.php'; ?>
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
      <!-- Business -->
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
          <a class="nav-link" href="">
            <h5>Business:- </h5></a>
        <li class="nav-item">
          <a class="nav-link" href="businessprofile.php">
            <i class="fas fa-user-circle fa-fw"></i>
            <span>My Profile </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="createbusiness.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Business </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="mybusiness.php">
            <i class="fas fa-fw fa-table"></i>
            <span>My Business </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Booking Schedule </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="createoffers.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Create Offers </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="myoffers.php">
            <i class="fas fa-fw fa-table"></i>
            <span>My Offers </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>View My Clients </span></a>
        </li>
         <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>Logout
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
        <!-- End Business -->
      </ul>
      <div id="content-wrapper">
        <div class="container-fluid">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h5 style="text-align: center;">Create Business </h5></div>
        <div class="card-body">
          <form method="POST" action="createbusinessAction.php">

             <?php 
                    if(!empty($_SESSION['msg'])){
                     ?>
                      <div class="alert alert-success" id="msg">
                        <p><?php echo $_SESSION['msg'];
                        unset($_SESSION['msg']); ?></p>
                      </div>
                      <?php } ?>
                      
            <div class="form-group">
              <h5>Business Name:</h5>
              <div class="form-label-group">
                <input type="Name" id="inputName" class="form-control" placeholder="Business Name" name="bname" required="required" autofocus="autofocus">
                <label for="inputName">Business Name</label>
              </div>
            </div>
            <div class="form-group">
              <h5>City:</h5>
              <div class="form-label-group">
                <input type="text" id="inputCity" class="form-control" placeholder="City" name="bcity" required="required" autofocus="autofocus">
                <label for="inputCity">City</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Area:</h5>
              <div class="form-label-group">
                <input type="text" id="inputArea" class="form-control" placeholder="Area" name="barea" required="required" autofocus="autofocus">
                <label for="inputArea">Area</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Location:</h5>
              <div class="form-label-group">
                <input type="text" id="inputLocation" class="form-control" placeholder="Location" name="blocation" required="required" autofocus="autofocus">
                <label for="inputLocation">Location</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Booking Charges:</h5>
              <div class="form-label-group">
                <input type="text" id="inputCharges" class="form-control" placeholder="Money" name="bookingFee" required="required" autofocus="autofocus">
                <label for="inputCharges">Booking Charges</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Business Contact:</h5>
              <div class="form-label-group">
                <input type="text" id="inputContact" class="form-control" placeholder="Contact" name="bcontact" required="required" autofocus="autofocus">
                <label for="inputContact">Business Contact</label>
              </div>
              </div>
            <div class="form-group">
              <h5>Description:</h5>
              <div class="form-label-group">
                <input type="text" id="inputContact" class="form-control" placeholder="Description" name="bdescription" required="required" autofocus="autofocus">
                <label for="inputServices">Description</label>
              </div>
            </div>
        <div class="form-group">                
            <h5>Open Days:</h5>
            <div class="input-group">
              <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
              <select class="form-control" name="opdays">
              <option>24/7</option>
              <option>Saturday OFF</option>
              <option>Sunday OFF</option>
              <option>Saturday Sunday OFF</option>
              </select>           
          </div>
        </div>
          <div class="form-group">
           <h5>Services:</h5>
              <select multiple="true" class="form-control select" name="services[]">
                <option>Merriage</option>
                <option>Party</option>
                <option>Political Meeting</option>
                <option>Seminars</option>
                <option>Sports</option>
              </select>
          </div>
            <div class="form-group">
              <h5>Paid:</h5>
              <div class="form-label-group">
                <input type="text" id="input-group-append" class="form-control" placeholder="Paid" name="bpaid" required="required" autofocus="autofocus">
                <label for="inputServices">Paid</label>
              </div>
            </div>
             <div class="form-group">
             <h5>Business Images:</h5>                
                  <input type="file" class="fileinput btn-primary" name="bimages[]" id="filename" title="Browse file" multiple="" />
                  <!--span class="help-block">Input type file</span-->
                </div>
              <!-- <div class="form-group">
              <h5>Upload Image:</h5>
              <div class="form-label-group">
                <input type="file" id="Image" class="form-control" placeholder="inputImage" name="bimage" required="required">
              </div>
              </div> -->
              <button type="submit" class="btn btn-primary btn-block" name="addBusiness">Submit</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="updatebusiness.php">Update & Delete</a>
          </div>
        </div>
      </div><br>
      </div>
      <!-- /.content-wrapper -->

    </div><br>
    <!-- /#wrapper -->

    </div>
    <!-- stickyfooter.php -->
    <?php include 'stickyfooter.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
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
</div>
  </body>
</html>