<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Login</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div class="alert">
            <p>

                <?php if(!empty($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                } ?>
            </p>
        </div>
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Sign In</strong> for More Services</div>
                    <form action="../loginAction.php" class="form-horizontal" method="post">
                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" placeholder="Email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <!--a href="#" class="btn btn-link btn-block">Forgot your password?</a-->
                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="login" class="btn btn-info btn-block">Log In</button>
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
                        Don't Have an Account? <a href="signup.php">SIGN UP</a>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2014 AppName
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".alert").fadeOut(2500);
        });
    </script>
</html>






