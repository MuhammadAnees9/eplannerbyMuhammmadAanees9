<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Welcome || Signup </title>
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
        <div class="card-header"><h5 style="text-align: center;">Signup</h5></div>
        <div class="card-body">
          <form method="POST" action="sigupAction.php">
          	<!-- disply validation errors here -->
            <div class="form-group">
              <h5>Name:</h5>
              <div class="form-label-group">
                <input type="text" id="inputName" class="form-control" placeholder="Name" name="fname" required="required" autofocus="autofocus">
                <label for="inputName">Name</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Email:</h5>
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Password:</h5>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Cell:</h5>
              <div class="form-label-group">
                <input type="text" id="inputContact" class="form-control" placeholder="Contact" name="contact" required="required" autofocus="autofocus">
                <label for="inputContact">Cell</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Select Type:</h5>
              <div class="form-label-group">
                <select type="text" id="selectType" class="form-control" name="type" autofocus="autofocus">
                  <option>for Event Booking</option>
                  <option>as a Business Partner</option>
              </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="signup">Signup</button>
            <p>
            	Already a member?<a href="login.php">Signin</a>
            </p>
          </form>
        </div>
      </div>
      </div>
      <!-- /.content-wrapper -->
    </div>
  </body>
</html>
