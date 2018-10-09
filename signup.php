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
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form method="POST" action="signupAction.php">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="inputName" class="form-control" placeholder="Name" name="fname" required="required" autofocus="autofocus">
                <label for="inputName">Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                     <input type="text" id="inputContact" class="form-control" placeholder="Contact" name="contact" required="required" autofocus="autofocus">
                <label for="inputContact">Cell</label>
                  </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
              <div class="form-label-group">
               <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
                </div>
              </div>
              <div class="form-label-group">
                <select type="text" id="selectType" class="form-control" name="type" autofocus="autofocus">
                  <option>As Admin</option>
                  <option>As Business</option>                  
                  <option>As User</option>
              </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="signup">Register</button> 
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Login Page</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
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
