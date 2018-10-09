<?php include 'header.php'; ?>
<style type="text/css">
    body{
        font-size: 12px;
    }
</style>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <?php include 'sidebar.php'; ?>
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
               <!-- START X-NAVIGATION VERTICAL -->
                <?php include 'navbar.php'; ?>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Clients</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> My Clients</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Default</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Client Name</th>
                                                <th>Business Listed</th>
                                                <th>Contact</th>
                                                <th>Fee</th>
                                                <th>Status</th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
    <?php
    include '../conn.php';
    $uid = $_SESSION['user']['id'];
    $q = mysqli_query($con, "SELECT `users`.*, `bookings`.`bookingDate`, `bookings`.id AS 'bid', `business`.`bookingFee`, `bookings`.bstatus, business.bname FROM `users` LEFT JOIN `bookings` ON `bookings`.uid=`users`.id LEFT JOIN business ON `business`.id=`bookings`.bid WHERE `business`.ownerId='$uid' GROUP BY `bookings`.id");
    while($res = mysqli_fetch_assoc($q)){ 
     ?>
                                            <tr>
                                                <td><?php echo $res['fullName']; ?></td>
                                                <td><?php echo $res['bname']; ?></td>
                                                <td><?php echo $res['contact']; ?></td>
                                                <td><?php echo $res['bookingFee']; ?></td>
                                                <td><?php echo $res['bstatus']; ?></td>
                    <td>
                        <?php if($res['bstatus']=='Pending'){ ?>
                        <a class="btn btn-primary" href="approve.php?bid=<?php echo $res['bid'].'&uid='.$res['id'] ?>">Approve</a>
                        <?php } else{
                            ?>
                        <a class="btn btn-primary disabled" href="approve.php?bid=<?php echo $res['bid'].'&uid='.$res['id'] ?>">Approve</a>
                        <?php } ?>
                    </td>
                                            </tr>
            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->



                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->       
        
        <?php include 'footer.php'; ?>