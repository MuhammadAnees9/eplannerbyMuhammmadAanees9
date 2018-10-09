    <?php include 'header.php'; ?>
<style type="text/css">
    .fa {
        line-height: 2;
    }
</style>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
         <?php include 'sidebar.php'; ?>
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
    <?php include 'navbar.php'; ?>                         
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Record</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>New Offers</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START BASIC TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">All Offers</h3>
                                </div>
                                <div class="panel-body">
    <?php 
    include '../conn.php';
    $uid = $_SESSION['user']['id'];

    $uid = $_SESSION['user']['id'];
    $q = mysqli_query($con, "SELECT `business`.*, `services`.sname FROM `business` LEFT JOIN `services` ON `services`.bid=`business`.id GROUP BY `business`.id");
    $i=0;
    while($res = mysqli_fetch_assoc($q)){
        $i++;
    ?>
    <div class="row">
<h2 class="col-md-6"><?php echo $i.'-'.$res['bname'] ?></h2>
<span class="col-md-6">
    <?php if($res['bstatus']=='Pending') { ?>
    <a class="btn btn-success" href="../approveBusiness.php?id=<?php echo $res['id'] ?>">Approve</a>
    <?php } else {
        ?>
        <a class="btn btn-success disabled" href="../approveBusiness.php?id=<?php echo $res['id'] ?>">Approved</a>
   <?php } ?>
</span> </div>
<h4>Services</h4>
<ul>

    <?php 
    $bid = $res['id'];
    $s = mysqli_query($con, "SELECT * FROM `services` WHERE bid = '$bid'");
    while($res1 = mysqli_fetch_assoc($s)){
     ?>
    
    <li><?php echo $res1['sname'] ?></li>
    <?php } ?>
</ul>
<h4>Location</h4>
<ul>
    <li><?php echo $res['blocation'].' > '.$res['barea'].' > '.$res['bcity'] ?></li>
</ul>
<h4>Booking Fee</h4>
<ul>
    <li><?php echo 'Rs'.$res['bookingFee'] ?></li>
</ul>
<hr>
    <?php } ?>                              
                                </div>
                            </div>
                            <!-- END BASIC TABLE SAMPLE -->

                            

                          

                        </div>
                       
                    </div>

                    
                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    

        <?php include 'footer.php'; ?>





