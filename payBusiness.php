<!-- Header.php -->
<?php include 'header.php'; ?>


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
    <style type="text/css">
    .fa {
      line-height: 2;
    }
    .tab-pane{
      margin: 3%;
    }
    </style>
    </head>
    <body id="page-top">
      <!-- logoutmodel -->
      <?php include 'logoutmodel.php'; ?>
      <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <div id="content-wrapper">
          <div class="container-fluid">
            <div class="page-content">
              <ul class="breadcrumb">
              <?php
              // gathering data about recipt
              include 'conn.php';
              @$plan = $_SESSION['users']['regPlan'];
              $fee = 0;
              if($plan=='monthly')
                $fee= 5000;
              else if($plan='yearly')
                $fee = 45000;
              else if($plan=='premium')
                $fee = 60000;
              else if($plan=='basic')
                $fee = 2500;
              else die("Invalid Input");
              $uid =$_SESSION['users']['id'];
              ?>
              <li><a href="index.php">Home/</a></li>
              <li class="active">Dashboard</li>
            </ul>
            <div class="page-content-wrap">
              <div class="row">
                <div style="margin: 5%" class="col-md-12 col-sm-12 col-xs-12">
                  <ul class="nav nav-tabs">
                    <li class="active">
                      <button data-toggle="tab" href="#home">Paypal</button>
                    </li>
                    <li>_</li>
                    <button data-toggle="tab" href="#menu2">Easy Paisa</button>
                  </ul>
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <h3>Pay Via Paypal</h3>
                      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <div class="form-group col-sm-6">
                          <input class="form-control" type="text" name="money" readonly="" value="Rs.<?php 
                          echo $fee; ?>">
                        </div>
                        <!-- Identify your business so that you can collect the payments. -->
                        <input type="hidden" name="business" value="herschelgomez@xyzzyu.com">
                        <!-- Specify a Buy Now button. -->
                        <input type="hidden" name="cmd" value="_xclick">
                        <!-- Specify details about the item that buyers will purchase. -->
                        <input type="hidden" name="item_name" value="Hot Sauce-12oz. Bottle">
                        <input type="hidden" name="amount" value="<?php 
                        echo $info['bookingFee'] ?>">
                        <input type="hidden" name="currency_code" value="PKR">
                        <!-- Display the payment button. -->
                        <input class="" type="image" name="submit" border="0"src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png"alt="Pay Now">
                        <img alt="" border="0" width="1" height="1"src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
                      </form>
                    </div>
                    <div id="menu2"class="tab-pane fade">
                      <h3>Pay Via EasyPaisa</h3>
                      <?phpif(isset($_POST['easypaisa'])){
                        $cnic = $_POST['cnic'];
                        $account = $_POST['account'];
                        $amount = $_POST['amount'];
                        $easy mysqli_query($conn, "INSERT INTO `payments`(cardNumber, amount, method, uid) VALUES('$account', '$amount', 'EasyPaisa', '$uid')");
                        if($easy){
                          $up = mysqli_query($conn, "UPDATE `business` SET Paid='Yes' WHERE ownerId='$uid'");
                          if($up){
                            $fullName = $_SESSION['users']['fullName'];
                            $noti = $fullName.' Made payment for his Business';
                            $qn = mysqli_query($conn, "INSERT INTO `notifications`(type, description)VALUES('Admin', '$noti', '$uid')");
                            echo "Thanks for Your Payments";
                          }
                        }
                      }
                      ?>
                      <form method="post" action="">
                        <div class="form-group col-sm-12 col-md-12">
                          <label>Your CNIC:</label>
                          <input type="text" name="cnic" class="form-control" required="required">
                        </div>
                        <div class="form-group col-sm-12 col-md-12">
                          <label>Your Mobile#(Easy Pasia Account):</label>
                          <input type="text" name="account" class="form-control" required="required">
                        </div>
                        <div class="form-group col-sm-12 col-md-12">
                          <label>Amount:</label>
                          <input type="text" name="amount" class="form-control" value="<?php 
                          echo $fee ?>" readonly="">
                        </div>
                        <button class="btn btn-primary" name="easypaisa">PAY</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.content-wrapper -->
      </div><br>
      <!-- /#wrapper -->
    </div>
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
    <script type="text/javascript">
      $(document).ready(function(){
        $("select").addClass("form-control");
      });
    </script>
  </body>
</html>