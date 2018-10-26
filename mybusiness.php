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
    <title> Welcome || My Business </title>
    <style>
        table,th,tr,td
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
    <div id="wrapper">
      <!-- Sidebar -->
     <?php include 'sidebar.php'; ?>
     
        <!-- My Business Table Start -->
<div class="container">
    <h2 style="text-align: center;">My Business</h2><br> 
<table class="table table-bordered">
    <thead>
      <tr class="active" style="background-color: #6777;">
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Area</th>
            <th>Location</th>
            <th>Business Contact</th>
            <th>Business Charges</th>
            <th>Description</th>
            <th>Open Days</th>
            <th>Status</th>
            <th>Paid</th>
        </tr>
    </thead>
    <tbody style="background-color: #1111;">
    <?php
        include 'conn.php';
        $sql=mysqli_query($conn, "SELECT * FROM business");
        while($row=mysqli_fetch_array($sql))
        {
    ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['bname'];?></td>
        <td><?php echo $row['bcity'];?></td>
        <td><?php echo $row['barea'];?></td>
        <td><?php echo $row['blocation'];?></td>
        <td><?php echo $row['bcontact'];?></td>
        <td><?php echo $row['bookingFee'];?></td>
        <td><?php echo $row['bdesc'];?></td>
        <td><?php echo $row['openDays'];?></td>
        <td><?php echo $row['bstatus'];?></td>
        <td><?php echo $row['Paid'];?></td>
    </tr>
    <?php   }?>

    </tbody>

</table>
  </div>
    </div>
      <!-- /.content-wrapper -->
     <!--End mybusinesssidebar -->
    <!-- logoutmodel -->
    <?php include 'logoutmodel.php'; ?>
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
