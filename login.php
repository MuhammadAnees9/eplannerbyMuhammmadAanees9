<?php 
session_start();

	//connect to db
	$db = mysqli_connect("localhost", "root", "", "eplanner");
	if (isset($_POST['register_btn'])) {
		//session_start();
		$username = ($_POST['username']);
		$email = ($_POST['email']);
		$password = ($_POST['password']);
		$password2 = ($_POST['password2']);

		// if (password == password2) {
			// create user
			$password = md5($password); //has password before storing for security purpose
			$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			header("location: login.html"); //redirect to hompage
		}else{
			$_SESSION['message'] = "the two password do not match";
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
    <title> Welcome || Signin </title>
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
        <div id="content-wrapper">
        <div class="container-fluid">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h5 style="text-align: center;">Signin</h5></div>
        <div class="card-body">
          <form method="POST" action="login.php">
            <div class="form-group">
              <h5>Name:</h5>
              <div class="form-label-group">
                <input type="text" id="inputName" class="form-control" placeholder="Name" name="fname" required="required" autofocus="autofocus">
                <label for="inputName">Name</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Password:</h5>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="register_btn" href="index.html">Login</button>
            <p>
            	Not yet a member?<a href="register.php">Signup</a>
            </p>
          </form>
        </div>
      </div>
        <!-- Sticky Footer -->
        <!-- <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright ©  assort tech Your Website 2018</span>
            </div>
          </div>
        </footer> -->
      </div>
      <!-- /.content-wrapper -->
    </div>
  </body>
</html>
