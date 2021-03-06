<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Login</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header"><strong>Sign In</strong> for More Services</div>
            <div class="login-container lightmode">
            <div class="login-box animated fadeInDown">
            <div class="alert">
           
            </div>
                <div class="login-logo"></div>
                <div class="login-body">
                    <form action="loginAction.php" class="form-horizontal" method="post">
                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="required" autofocus="autofocus">
                            <!-- <input type="email" class="form-control" name="email" placeholder="Email"/> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                             <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="required">
                            <!-- <input type="password" class="form-control" name="password" placeholder="Password"/> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <!--a href="#" class="btn btn-link btn-block">Forgot your password?</a-->
                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Log In</button>
                        </div>
                    </div>
                    <div class="login-or">OR</div>
                    <!--div class="form-group">
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                        <div class="col-md-4">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div-->
                    <div class="login-subtitle">
                        Don't Have an Account? <a href="../signup.php">SIGN UP</a>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2018 AppName
                    </div>
                </div>
            </div>
            
        </div>
        
    <script type="text/javascript">
        $(document).ready(function(){
            $(".alert").fadeOut(2500);
        });
    </script>
    </div>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>