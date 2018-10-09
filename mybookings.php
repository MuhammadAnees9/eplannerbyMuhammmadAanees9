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
    <title> Welcome || My Offers </title>
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
    <!-- /End Header.php -->

 <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        
        <!-- User -->
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
          <a class="nav-link" href="">
            <h5>User:- </h5></a>
        <li class="nav-item">
          <a class="nav-link" href="userprofile.php">
            <i class="fas fa-user-circle fa-fw"></i>
            <span>My Profile </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mybookings.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Bookings </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>New Offers </span></a>
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

      <!-- End User -->
      </ul>
      
<div class="container">
  <h2 style="text-align: center;">My Bookings</h2><br>
   <div class="panel-heading">                                
                                    <h3 class="panel-title">Default</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Hotel</th>
                                                <th>Location</th>
                                                <th>Event Date</th>
                                                <th>Payment</th>
                                                <th>Event Type</th>
                                                <th>Print</th>
                                            </tr>
                                        </thead>
                                        <tbody>
    <?php
    include 'conn.php';
    $uid = $_SESSION['user']['id'];
    $q = mysqli_query($conn, "SELECT `bookings`.id, `bookings`.`bookingDate`, `business`.`bookingFee`, `bookings`.bstatus, `bookings`.eventType, `business`.bname, `business`.blocation FROM `bookings` LEFT JOIN business ON `business`.id=`bookings`.bid WHERE `bookings`.uid='$uid' GROUP BY `bookings`.id");
    while($res = mysqli_fetch_assoc($q)){ 
     ?>
                                            <tr>
                                                <td><?php echo $res['bname']; ?></td>
                                                <td><?php echo $res['blocation']; ?></td>
                                                <td><?php echo $res['bookingDate']; ?></td>
                                                <td><?php 
            if($res['bstatus']=='Pending'){
                echo "<a href='payments.php?booking=".$res['id']."' class='btn btn-primary'>Pay</a>";
            }
            else
            echo "Paid";                                    


                                                 ?></td>
                                                <td><?php echo $res['eventType']; ?></td>
                                                    <td>
                <?php if($res['bstatus']=='Pending'){ ?>
            <a class="btn btn-success disabled" href="<?php echo '../report.php?uid='.$uid.'&bid='.$res['id']; ?>" >Print</a>
        <?php } else{ ?>
        <a class="btn btn-success" href="<?php echo '../report.php?uid='.$uid.'&bid='.$res['id']; ?>" >Print</a> <?php } ?>
                                                    </td>
                                            </tr>
            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
</div>
      <!-- /.content-wrapper -->
    
    <!-- logoutmodel -->
    <?php include 'logoutmodel.php'; ?>
    <!-- /End logoutmodel -->

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
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
  </body>
</html>
