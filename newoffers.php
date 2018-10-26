 <!-- Header.php -->
<?php include 'header.php'; ?>
<!-- /End Header.php -->

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
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>
        <div class="container-fluid">
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <!-- PAGE CONTENT -->
            <div class="page-content"> 
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="index.php">Home/</a></li>
                    <li><a href="dashboard.php">Dashboard/</a></li>
                    <li class="active">Record</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>New Offers</h2>
                </div><br>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                    <!-- START BASIC TABLE SAMPLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">All Offers</h3>
                            </div>
                                <div class="panel-body">
                                <?php 
                                include 'conn.php';
                                $uid = $_SESSION['user']['id'];
                                $q = mysqli_query($conn, "SELECT `offers`.*, `business`.bname FROM `offers` LEFT JOIN `business` ON `offers`.bid=`business`.id");
                                while($res = mysqli_fetch_assoc($q)){
                                ?>
                                <h2><?php echo $res['oname']; ?><b>[<?php echo $res['bname'] ?>]</b></h2>
                                <ul>
                                    <li>
                                        From: <b><?php echo $res['sdate'] ?></b>
                                    </li>
                                    <li>
                                        To: <b><?php echo $res['edate'] ?></b>
                                    </li>
                                    <li>
                                        % OFF: <b><?php echo $res['poff'] ?></b>
                                    </li>
                                    <li>
                                        Details: <b><?php echo $res['description'] ?></b>
                                    </li>
                                </ul>
                                     <?php } ?>                              
                                </div>
                            </div>
                            <!-- END BASIC TABLE SAMPLE -->
                        </div>
                       
                    </div>
                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
    
      <!-- /.content-wrapper -->
    
    <!-- logoutmodel -->
    <?php include 'logoutmodel.php'; ?>
    <!-- /End logoutmodel -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
</div>
</div>
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
