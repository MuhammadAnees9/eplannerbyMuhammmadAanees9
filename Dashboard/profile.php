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
                            
                            <form class="form-horizontal" method="post" action="../profileAction.php">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">My<strong> Profile</strong></h3>
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
                                        <label class="col-md-3 col-xs-12 control-label">Full Name</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="fullName" value="<?php echo $_SESSION['user']['fullName'] ?>" />
                                            </div>          
                                        </div>
                                    </div>
                                    


                                    <div class="form-group">                
                                        <label class="col-md-3 col-xs-12 control-label">Contact</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                <input type="text" class="form-control" name="contact" value="<?php echo $_SESSION['user']['contact'] ?>" />
                                            </div>            
                                           
                                        </div>
                                    </div>

<div class="form-group">                
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['user']['email'] ?>" />
                                            </div>            
                                           
                                        </div>
                                    </div>

                                    <div class="form-group">                
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-wrench"></span></span>
                                                <input type="text" class="form-control" name="password" value="<?php echo $_SESSION['user']['password'] ?>" />
                                            </div>            
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <!--button class="btn btn-default">Clear Form</button-->                                    
                                    <button class="btn btn-primary pull-right" type="submit" name="profile">UPDATE</button>
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