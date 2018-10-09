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
                    <li class="active">Booking Schedule</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Booking Schedule</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START BASIC TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">All Schedules</h3>
                                </div>
                                <div class="panel-body">
                                    <h4>Booked Dates</h4>
    <?php 
    include '../conn.php';
    $uid = $_SESSION['user']['id'];

    $q = mysqli_query($con, "SELECT * FROM `business` WHERE ownerId='$uid'");
    
    while($res = mysqli_fetch_assoc($q)){ ?>
       
     <?php   $bid = $res['id'];
        $qn = mysqli_query($con, "SELECT * FROM `bookings` WHERE bid='$bid' ORDER BY DATE(bookingDate) DESC");
        $i=0;
        while($res1 = mysqli_fetch_assoc($qn)){ 
            if($i==0) {?>
        <h3><?php echo $res['bname'] ?></h3>
        <?php } ?>
        <li>
            <?php echo $res1['bookingDate'] ?>
        </li>
        <?php 
        $i++; }
     ?>
        
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





