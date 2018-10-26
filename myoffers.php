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
    <title> Welcome || My Offers </title>
     <style>
        table,tr,th,td
        {
            border: 5px solid black;
        }
    </style>
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
    <!-- /End Header.php -->

   <div id="wrapper">
      <!-- Sidebar -->
      <?php include 'sidebar.php'; ?>
      
<div class="container">
    <h2 style="text-align: center;">My Offers</h2><br> 
<table class="table table-bordered">
    <thead>
      <tr class="active" style="background-color: #6777;">
            <th>ID</th>
            <th>Offer Name</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Percent Off</th>
        </tr>
    </thead>
    <tbody style="background-color: #1111;">
    <?php
        include 'conn.php';
        $sql=mysqli_query($conn, "SELECT * FROM offers");
        while($row=mysqli_fetch_array($sql))
        {
    ?>
    <tr>
        <td><?php echo $row['oid'];?></td>
        <td><?php echo $row['oname'];?></td>
        <td><?php echo $row['description'];?></td>
        <td><?php echo $row['sdate'];?></td>
        <td><?php echo $row['edate'];?></td>
        <td><?php echo $row['poff'];?></td>
    </tr>
    <?php   }?>

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
  </body>
</html>
