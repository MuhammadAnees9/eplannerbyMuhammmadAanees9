<?php 
if(isset($_POST['signup']))
{
	include 'conn.php';
	$fullName = $_POST['fname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$selectType = $_POST['type'];
	if(	$selectType=='As Admin')
	 	$userType = 'Admin';
	else if($selectType=='As Business')
	 	$userType = 'Business';
	else if($selectType=='As User')
	 	$userType = 'User';
	// $userType='dummy';

	 $sql = $conn->query("SELECT id FROM users WHERE email='$email'");
	 if ($sql->num_rows > 0) {
				$msg = "Your Email Is Already Exists!";
			} else{

			$insert = mysqli_query($conn, "INSERT INTO `users`(fullName, email, password, contact, userType) VALUES('$fullName', '$email', '$password', '$contact', '$userType')");
			if($insert)
			{
				$_SESSION['msg'] = 'Sign Up Successfully';
				header("location:login.php");
			}
			else
			{
				$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($conn);
				header("location:signup.php");
			}

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
    <title>SB Admin - Register</title>
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
        <div class="card-header">
        	<h2>Your Email Is Already Exist !</h2><br>
        	<div class="card card-login mx-auto mt-5">
        	<h4 style="text-align: center;"><a href="signup.php">Signup Again</a></h4>
        </div>
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
