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
    <title> Welcome || Create Offers </title>
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
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
      <!-- Business -->
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
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
      <div class="card card-login mx-auto mt-5" >
        <div class="card-header"><h5 style="text-align: center;">Create Offers</h5></div>
        <div class="card-body">
          <form method="POST" action="createoffersAction.php">
            <!-- <div class="form-group">
              <h5>Select Business:</h5>
              <div class="form-label-group">
                <input type="Select" id="inputName" class="form-control" placeholder="Select Business" name="selectbusiness" required="required" autofocus="autofocus">
                <label for="inputName">Select Business</label>
              </div>
            </div> -->
            <div class="form-group">
              <h5>Offer Name:</h5>
              <div class="form-label-group">
                <input type="Name" id="inputName" class="form-control" placeholder="Offer Name" name="offername" required="required">
                <label for="inputName">Offer Name</label>
              </div>
            </div>
            <div class="form-group">
            <div class="form-group">
              <h5>Description:</h5>
              <div class="form-label-group">
                <input type="text" id="inputDescription" class="form-control" placeholder="Description" name="description" required="required">
                <label for="inputDescription">Description</label>
              </div>
            </div>
              <h5>Starting From:</h5>
              <div class="form-label-group">
                <input type="Date" id="inputDate" class="form-control" placeholder="calendar" name="startdate" required="required">
                <label for="inputDate">Starting From</label>
              </div>
            </div>
            <div class="form-group">
              <h5>End Date:</h5>
              <div class="form-label-group">
                <input type="Date" id="inputDate" class="form-control" placeholder="calendar" name="enddate" required="required">
                <label for="inputDate">End Date</label>
              </div>
            </div>
            <div class="form-group">
              <h5>% off:</h5>
              <div class="form-label-group">
                <input type="text" id="inputPercentage" class="form-control" placeholder="% off" name="discount" required="required">
                <label for="inputPercentage">% off</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="Submit">Create</button>
          </form>
           <div class="text-center">
            <a class="d-block small mt-3" href="deleteupdateoffers.php">Update & Delete</a>
          </div>
        </div>
      </div><br>
        <!-- stickyfooter.php -->
    <?php include 'stickyfooter.php'; ?>
      </div>
      <!-- /.content-wrapper -->
    </div>
  </div>
     <!-- stickyfooter.php -->
    <?php include 'stickyfooter.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <?php include 'logoutmodel.php'; ?>

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