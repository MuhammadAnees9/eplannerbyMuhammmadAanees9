<?php 
session_start();

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['offername'];
    $posts[2] = $_POST['description'];
    $posts[3] = $_POST['startdate'];
    $posts[4] = $_POST['enddate'];
    $posts[5] = $_POST['percent'];
    return $posts;
}

if(isset($_POST['search']))
{
  include 'conn.php';
  $id = $_POST['id'];
 
  $query ="SELECT `id`, `oname`, `description`, `sdate`, `edate`, `poff`, FROM `offers` WHERE `oid` = $id";

  $result = mysqli_query($conn, $query);

  // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
  while($row = mysqli_fetch_array($result))
  {

    $id = $row['id'];
    $offername = $row['offername'];
    $description = $row['description'];
    $startdate = $row['startdate'];
    $enddate = $row['enddate'];
    $percent = $row['percent'];
  }
}

      //if the id not exist
     //show a message and clear inputs
    else {
        echo "Undifined ID";
        $offername = "";
        $startdate = "";
        $enddate = "";
        $description = "";
        $percent = "";

      }
  mysqli_free_result($result);
  mysqli_close($conn);

}else{

$offername = "";
$startdate = "";
$enddate = "";
$description = "";
$percent = "";

}

// Delete
if(isset($_POST['delete']))
{
    include 'conn.php';
    $data = getPosts();
    $delete_Query = "DELETE FROM `offers` WHERE `id` = $data[0]";
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
        <div class="card-header"><h5 style="text-align: center;">Delete and Update</h5></div>
        <div class="card-body">
          <form method="POST" action="deleteupdateoffers.php">
            <div class="form-group">
              <div class="form-group">
              <div class="form-label-group">
                <input type="number" id="inputId" class="form-control" placeholder="IDs" name="id" required="required" autofocus="autofocus"  value="<?php echo $id;?>">
                <label for="inputEmail">ID</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="search">Search</button><br><br>
            <div class="form-group">
               <div class="form-label-group">
                <input type="text" id="inputName" class="form-control" placeholder="Business Name" name="oname" autofocus="autofocus" value="<?php echo $offername;?>">
                <label for="inputName">Offer Name</label>
              </div>
            </div>
              <div class="form-row">
                <div class="col-md-6">
                   <div class="form-label-group">
                <input type="City" id="inputDes" class="form-control" placeholder="City" name="description" autofocus="autofocus" value="<?php echo $description;?>">
                <label for="inputCity">Description</label>
              </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                <input type="text" id="inputDate" class="form-control" placeholder="Location" name="startdate" autofocus="autofocus" value="<?php echo $startdate;?>">
                <label for="inputLocation">Start Date</label>
              </div>
                </div>
              </div><br>
              <div class="form-row">
                <div class="col-md-6">
                 <div class="form-label-group">
                <input type="Area" id="inputDate" class="form-control" placeholder="Area" name="enddate" autofocus="autofocus" value="<?php echo $enddate;?>">
                <label for="inputArea">End Date</label>
              </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                <input type="text" id="inputPercent" class="form-control" placeholder="Open Days" name="percent" autofocus="autofocus" value="<?php echo $percent;?>">
                <label for="inputDays">Percent Off</label>
              </div>
                </div>
                </div><br>
                <div class="form-row">
                <div class="col-md-6">
               <button type="submit" class="btn btn-warning btn-block" name="update">Update</button>
                </div>
                 <div class="col-md-6">
              <button type="submit" class="btn btn-danger btn-block" name="delete">Delete</button>
                </div>
                </div>
              </div>
          </form>
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