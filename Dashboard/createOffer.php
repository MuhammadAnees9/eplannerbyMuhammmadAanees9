<?php include 'header.php'; ?>
<style type="text/css">
    .fa {
        line-height: 2;
    }
</style>
        <div class="page-container">
            
            <?php include 'sidebar.php'; ?>

            <div class="page-content">
                
                <?php include 'navbar.php'; ?>
                  
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                
                <div class="page-content-wrap">
                   
<div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" action="../offer.php" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Create an<strong> OFFER</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
    
                                <div class="panel-body"> 
        <?php include '../conn.php';
    if(!empty($_SESSION['msg'])){
     ?>
        <div class="alert alert-success" id="msg">
            <p><?php echo $_SESSION['msg'];
            unset($_SESSION['msg']); ?></p>
        </div>
        <?php } ?>

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
                                        <label class="col-md-3 col-xs-12 control-label">Offer Name</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="oname" />
                                            </div>          
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">% OFF</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-spinner fa-spin"></span></span>
                                                <input type="number" class="form-control" name="poff" />
                                            </div>            
                                           
                                        </div>
                                    </div>
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Start Date</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" value="2014-11-01" name="sdate">        
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">End Date</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" value="2014-11-01" name="edate">        
                                            </div>
                                            
                                        </div>
                                    </div>
                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Description</label>
                                        <div class="col-md-6 col-xs-12">    
                                            <textarea class="form-control" rows="5" name="odesc"></textarea>
                                            
                                        </div>
                                    </div>
                                    </div>
                                <div class="panel-footer">
                                    <!--button class="btn btn-default">Clear Form</button-->                                    
                                    <button class="btn btn-primary pull-right" type="submit" name="offer">Create Offer</button>
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
