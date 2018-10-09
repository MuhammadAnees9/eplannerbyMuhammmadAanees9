<?php @session_start();
if(empty($_SESSION['users'])){ ?>
<script type="text/javascript">

    window.location = "login.php";
</script>
<?php } ?>