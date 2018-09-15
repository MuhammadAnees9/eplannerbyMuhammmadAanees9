<?php 
session_start();

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['bname'];
    $posts[2] = $_POST['city'];
    $posts[3] = $_POST['area'];
    $posts[4] = $_POST['location'];
    $posts[5] = $_POST['opendays'];
    $posts[6] = $_POST['services'];
    $posts[7] = $_POST['bcharges'];
    $posts[8] = $_POST['bcontact'];
    return $posts;
}

if(isset($_POST['search']))
{
  include 'conn.php';
  $id = $_POST['id'];
 
  $query ="SELECT `id`, `bname`, `city`, `area`, `location`, `opendays`, `services`, `bcharges`, `bcontact` FROM `business` WHERE `id` = $id";

  $result = mysqli_query($conn, $query);

  // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
  while($row = mysqli_fetch_array($result))
  {

    $id = $row['id'];
    $bname = $row['bname'];
    $city = $row['city'];
    $area = $row['area'];
    $location = $row['location'];
    $opendays = $row['opendays'];
    $services = $row['services'];
    $bcharges = $row['bcharges'];
    $bcontact = $row['bcontact'];
  }
}

      //if the id not exist
     //show a message and clear inputs
    else {
        echo "Undifined ID";
        $bname = "";
        $city = "";
        $area = "";
        $location = "";
        $opendays = "";
        $services = "";
        $bcharges = "";
        $bcontact = "";
      }
  mysqli_free_result($result);
  mysqli_close($conn);

}else{

$bname = "";
$city = "";
$area = "";
$location = "";
$opendays = "";
$services = "";
$bcharges = "";
$bcontact = "";

}

// Delete
if(isset($_POST['delete']))
{
    include 'conn.php';
    $data = getPosts();
    $delete_Query = "DELETE FROM `business` WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($conn, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
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
    <title> Welcome || Delete & Update Business </title>
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
    <!-- mybusinesssidebar.php -->
   <?php include 'deleteupdatebusinesssidebar.php' ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
     <!-- stickyfooter.php -->
    <?php include 'stickyfooter.php'; ?>
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