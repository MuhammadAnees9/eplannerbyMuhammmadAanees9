<?php 
session_start();

if (isset($_POST['update']))
{
  include "conn.php";
  $bname = $_POST['bname'];
  $bcontact = $_POST['bcontact'];
  $bemail = $_POST['bemail'];
  $bpassword = $_POST['bpassword'];
  //$id = $_POST['id'];
  $id = $_SESSION['users']['id'];

  $update = mysqli_query($conn, "UPDATE `users` SET fullName =  '$bname', contact = '$bcontact', email = '$bemail', password = '$bpassword' WHERE id = '$id'");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Welcome || User Profile </title>
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
            
        <div id="content-wrapper">
        <div class="container-fluid">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h5 style="text-align: center;">My Profile</h5></div>
        <div class="card-body">
          <form method="POST" action="userprofile.php">

            <?php 
              if(!empty($_SESSION['msg'])){
            ?>
            <div class="alert alert-success" id="msg">
              <p><?php echo $_SESSION['msg'];
              unset($_SESSION['msg']); ?></p>
            </div>
            <?php } ?>

            <div class="form-group">
              <h5>Name:</h5>
              <div class="form-label-group">
                <!-- <input type="name" id="inputName" class="form-control" placeholder="Name"autofocus="autofocus" value="<?php echo $name;?>">
                <label for="inputName">Name</label> -->

                <input type="text" class="form-control" name="bname" value="<?php echo $_SESSION['users']['fullName'] ?>" />
                <label for="inputName">Name</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Conatc:</h5>
              <div class="form-label-group">
               <!--  <input type="Contact" id="inputContact" class="form-control" placeholder="Contact" autofocus="autofocus" value="<?php echo $contact;?>"> -->

               <input type="text" class="form-control" name="bcontact" value="<?php echo $_SESSION['users']['contact'] ?>" />

                <label for="inputContact">Contact</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Email:</h5>
              <div class="form-label-group">
                <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus="autofocus" value="<?php echo $email;?>"> -->

                <input type="email" class="form-control" name="bemail" value="<?php echo $_SESSION['users']['email'] ?>" />

                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Password:</h5>
              <div class="form-label-group">
                <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" value="<?php echo $password;?>"> -->

                <input type="text" class="form-control" name="bpassword" value="<?php echo $_SESSION['users']['password'] ?>" />
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
             <button type="submit" class="btn btn-warning btn-block" name="update">Update</button>
            </div>
            </div>
          </form>
        </div>
      </div><br>
        <!-- stickyfooter.php -->
    <?php include 'stickyfooter.php'; ?>

      </div>
      <!-- /.container-fluid -->
      </div>
      <!-- /.content-wrapper -->
  </div>
    <div id="wrapper">
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- logoutmodel -->
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
