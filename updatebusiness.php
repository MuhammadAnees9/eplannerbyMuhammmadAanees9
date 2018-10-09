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
 
  $query ="SELECT `id`, `bname`, `bcity`, `barea`, `blocation`, `openDays`, `bstatus`, `bookingFee`, `bcontact` FROM `business` WHERE `id` = $id";

  $result = mysqli_query($conn, $query);

    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
  while($row = mysqli_fetch_array($result))
  {

    $id = $row['id'];
    $bname = $row['bname'];
    $city = $row['bcity'];
    $area = $row['barea'];
    $location = $row['blocation'];
    $opendays = $row['openDays'];
    $services = $row['bstatus'];
    $bcharges = $row['bookingFee'];
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
// //Update Data

// if(isset($_POST['update']))
// { 
//     include ('conn.php');
//     $data = getPosts();
//     if(empty($data[0]) || empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[3]) || empty($data[4]) || empty($data[5]) || empty($data[6]) || empty($data[7]))
//     {
//         echo 'Enter The User Data To Update';
//     }  else {
        
//       $updateStatement = $conn->prepare('UPDATE business SET bname = :bname, bcity = :bcity, barea = :barea, blocation = :blocation, openDays = :openDays, bstatus = :bstatus, bookingFee = :bookingFee, bcontact =: bcontact WHERE id = :id');
        
//     $updateStatement->execute(array(
//     $posts = array();
//     $posts[0] = $_POST['id'];
//     $posts[1] = $_POST['bname'];
//     $posts[2] = $_POST['bcity'];
//     $posts[3] = $_POST['blocation'];
//     $posts[4] = $_POST['openDays'];
//     $posts[5] = $_POST['bstatus'];
//     $posts[6] = $_POST['bookingFee'];
//     $posts[7] = $_POST['bcontact'];
//     return $posts;
//         ));
        
//         if($updateStmt)
//         {
//                 echo 'Data Updated';
//         }
        
//     }
// }
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
    <title>SB Admin - Update</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <div class="container">
      <div class="bg-secondary card-register mx-auto mt-5">
        <div class="card-header">Update and Delete</div>
        <div class="card-body">
          <form method="POST" action="updatebusiness.php">
            <div class="form-group">
              <div class="form-group">
              <div class="form-label-group">
                <input type="number" id="inputId" class="form-control" placeholder="IDs" name="id" required="required" autofocus="autofocus"  value="<?php echo $id;?>">
                <label for="inputEmail">ID</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="search">Search</button><br><br>
              <div class="form-row">
                <div class="col-md-6">
              <div class="form-label-group">
                <input type="text" id="inputName" class="form-control" placeholder="Business Name" name="bname" autofocus="autofocus" value="<?php echo $bname;?>">
                <label for="inputName">Business Name</label>
              </div>
                </div>
                <div class="col-md-6">
                   <div class="form-label-group">
                <input type="City" id="inputCity" class="form-control" placeholder="City" name="city" autofocus="autofocus" value="<?php echo $city;?>">
                <label for="inputCity">City</label>
              </div>
                </div>
              </div><br>
                <div class="form-row">
                <div class="col-md-6">
                 <div class="form-label-group">
                <input type="Area" id="inputArea" class="form-control" placeholder="Area" name="area" autofocus="autofocus" value="<?php echo $area;?>">
                <label for="inputArea">Area</label>
              </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                <input type="text" id="inputLocation" class="form-control" placeholder="Location" name="location" autofocus="autofocus" value="<?php echo $location;?>">
                <label for="inputLocation">Location</label>
              </div>
                </div>
              </div><br>
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                <input type="text" id="inputDays" class="form-control" placeholder="Open Days" name="opendays" autofocus="autofocus" value="<?php echo $opendays;?>">
                <label for="inputDays">Open Days</label>
              </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                <input type="text" id="input-group-append" class="form-control" placeholder="Services" name="services" autofocus="autofocus" value="<?php echo $services;?>">
                <label for="inputServices">Services</label>
              </div>
                </div>
              </div><br>
            <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                <input type="text" id="inputCharges" class="form-control" placeholder="Booking Charges" name="bcharges" autofocus="autofocus"  value="<?php echo $bcharges;?>">
                <label for="inputCharges">Booking Charges</label>
              </div><br>
               <button type="submit" class="btn btn-warning btn-block" name="update">Update</button>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                <input type="text" id="inputContact" class="form-control" placeholder="Contact" name="bcontact" autofocus="autofocus" value="<?php echo $bcontact;?>">
                <label for="inputContact">Business Contact</label>
              </div><br>
               <button type="submit" class="btn btn-danger btn-block" name="delete">Delete</button>
                </div>
              </div>
              </div>
          </form>
          <!-- <div class="text-center">
            <a class="d-block small mt-3" href="login.html">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>