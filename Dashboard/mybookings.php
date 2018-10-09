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
                                                <th>Hotel</th>
                                                <th>Location</th>
                                                <th>Event Date</th>
                                                <th>Payment</th>
                                                <th>Event Type</th>
                                                <th>Print</th>
                                            </tr>
                                        </thead>
                                        <tbody>
    <?php
    include '../conn.php';
    $uid = $_SESSION['user']['id'];
    $q = mysqli_query($conn, "SELECT `bookings`.id, `bookings`.`bookingDate`, `business`.`bookingFee`, `bookings`.bstatus, `bookings`.eventType, `business`.bname, `business`.blocation FROM `bookings` LEFT JOIN business ON `business`.id=`bookings`.bid WHERE `bookings`.uid='$uid' GROUP BY `bookings`.id");
    while($res = mysqli_fetch_assoc($q)){ 
     ?>
                                            <tr>
                                                <td><?php echo $res['bname']; ?></td>
                                                <td><?php echo $res['blocation']; ?></td>
                                                <td><?php echo $res['bookingDate']; ?></td>
                                                <td><?php 
            if($res['bstatus']=='Pending'){
                echo "<a href='payments.php?booking=".$res['id']."' class='btn btn-primary'>Pay</a>";
            }
            else
            echo "Paid";                                    


                                                 ?></td>
                                                <td><?php echo $res['eventType']; ?></td>
                                                    <td>
                <?php if($res['bstatus']=='Pending'){ ?>
            <a class="btn btn-success disabled" href="<?php echo '../report.php?uid='.$uid.'&bid='.$res['id']; ?>" >Print</a>
        <?php } else{ ?>
        <a class="btn btn-success" href="<?php echo '../report.php?uid='.$uid.'&bid='.$res['id']; ?>" >Print</a> <?php } ?>
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
        <style type="text/css">
            .fa{
                line-height: 2.5;
            }
        </style>