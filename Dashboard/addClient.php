<?php include 'header.php'; ?>
<style type="text/css">
    .fa {
        line-height: 2;
    }
</style>
        <div class="page-container">
            <?php include '../conn.php'; ?>
            <?php include 'sidebar.php'; ?>

            <div class="page-content">
                
                <?php include 'navbar.php'; ?>
                  
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li>Dashboard</li>
                    <li class="active">Booking</li>
                </ul>
                
                <div class="page-content-wrap">
                   
<div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" action="../addClient.php">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Add New<strong> Booking</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
    
                                <div class="panel-body"> 
        <?php 
    if(!empty($_SESSION['msg'])){
     ?>
        <div class="alert alert-success" id="msg">
            <p><?php echo $_SESSION['msg'];
            unset($_SESSION['msg']); ?></p>
        </div>
        <?php } ?>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Client Name</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="cname" />
                                            </div>          
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Select a Business</label>
                                        <div class="col-md-6 col-xs-12">            
                                            <select class="form-control select" name="bid">
    <?php
    $uid = $_SESSION['user']['id'];
     $b = mysqli_query($con, "SELECT * FROM `business` WHERE ownerId='$uid'");
     while($ores = mysqli_fetch_assoc($b)){
      ?>
                                                <option value="<?php echo $ores['id'] ?>">
                                                    <?php echo $ores['bname'] ?>
                                                </option>
                                           <?php } ?>     
                                            </select>
                                            
                                        </div>
                                    </div>

                                    


                                    

                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Service</label>
                                        <div class="col-md-6 col-xs-12">            
                                            <select class="form-control select" name="service">
                                                <option>Merriage</option>
                                                <option>Party</option>
                                                <option>Political Meeting</option>
                                                <option>Seminars</option>
                                                <option>Sports</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    
                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Booking Fee</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-dollar"></span></span>
                                                <input type="text" class="form-control" name="bookingFee" />
                                            </div>          
                                        </div>
                                    </div>


<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Client Contact</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                <input type="text" class="form-control" name="ccontact" />
                                            </div>          
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Booking Date</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="date" class="form-control" name="bdate" />
                                            </div>          
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">From(Time)</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                                <input type="datetime" class="form-control" name="fromTime" placeholder="24 Hour Formate" />
                                            </div>          
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">To(Time)</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                                <input type="datetime" class="form-control" name="toTime" placeholder="24 Hour Formate" />
                                            </div>          
                                        </div>
                                    </div>

                                </div>
                                <div class="panel-footer">
                                                                        
                                    <button class="btn btn-primary pull-right" type="submit" name="addClient">Submit</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>

                </div>                                
            </div>            
        </div>

<?php include 'footer.php'; ?>
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>