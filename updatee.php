<?php
// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['type'];
    $posts[2] = $_POST['fname'];
    $posts[3] = $_POST['lname'];
    $posts[4] = $_POST['email'];
    return $posts;
}

if(isset($_POST['search']))
{
  include 'conn.php';
  $id = $_POST['id'];
 
  $query ="SELECT `id`, `type`, `fname`, `lname`, `email` FROM `users` WHERE `id` = $id";

  $result = mysqli_query($conn, $query);

  // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
  while($row = mysqli_fetch_array($result))
  {

    $id = $row['id'];
    $type = $row['type'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
  }
}

      //if the id not exist
     //show a message and clear inputs
    else {
        echo "Undifined ID";
        $type = "";
        $fname = "";
        $lname = "";
        $email = "";
      }
  mysqli_free_result($result);
  mysqli_close($conn);

}else{

$type = "";
$fname = "";
$lname = "";
$email = "";

}
//Update Data

if(isset($_POST['update']))
{ 
    include 'conn.php';
    $data = getPosts();
    if(empty($data[0]) || empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[3]))
    {
        echo 'Enter The User Data To Update';
    }  else {
        
        $updateStatement = $conn->prepare('UPDATE users SET fname = :fname, lname = :lname, age = :age WHERE id = :id');
        //$updateStatement->execute(array(
                   $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['lname'];
    $posts[3] = $_POST['email'];
    //return $posts;
        //));
        
        //if($updateStmt)
        {
                echo 'Data Updated';
        }
        
    }
}
// Delete
if(isset($_POST['delete']))
{
    include 'conn.php';
    $data = getPosts();
    $delete_Query = "DELETE FROM `users` WHERE `id` = $data[0]";
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
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Update and Delete</div>
        <div class="card-body">
          <form method="POST" action="updatee.php">
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
                <input type="text" id="inputType" class="form-control" placeholder="type" name="type" value="<?php echo $type;?>">
                <label for="inputEmail">Type</label>
              </div>
            </div>
               <!--  <select type="select" id="selectType" class="form-control" name="type" value="<?php echo $type;?>" required="required">
                  <option>Admin</option>
                  <option>User</option>
                  <option>Business</option>
              </select> -->
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="First name" value="<?php echo $fname;?>" name="fname">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" placeholder="Last name" value="<?php echo $lname;?>" name="lname">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" value="<?php echo $email;?>">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" value="<?php echo $password;?>" name="password">
                    <label for="inputPassword">Password</label>
                  </div><br>
                  <button type="submit" class="btn btn-warning btn-block" name="update">Update</button>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" value="<?php echo $cpassword;?>" name="cpassword">
                    <label for="confirmPassword">Confirm password</label>
                  </div><br>
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
