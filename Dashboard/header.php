<?php @session_start();
if(empty($_SESSION['user'])){ ?>
<script type="text/javascript">

    window.location = "login.php";
</script>
<?php } ?>






<DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Event Management System</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        