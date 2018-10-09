<?php include 'header.php'; ?>
<style type="text/css">
  .fa {
    line-height: 2;
  }
</style>
    <div class="page-container">
      
​
      <div class="page-content">
        
    
         
        <ul class="breadcrumb">
          <li><a href="#">Home</a></li>          
          <li class="active">Dashboard</li>
        </ul>
        <div class="page-content-wrap">
          <div class="row">
            <div class="col-md-12">
              <form class="form-horizontal" method="post" action="../addBusiness.php" enctype="multipart/form-data">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Add New<strong> Busness</strong></h3>
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
                    <label class="col-md-3 col-xs-12 control-label">Business Name</label>
                    <div class="col-md-6 col-xs-12"> 
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="bname" />
                      </div>     
                    </div>
                  </div>
                  
​
​
                  <div class="form-group">        
                    <label class="col-md-3 col-xs-12 control-label">City</label>
                    <div class="col-md-6 col-xs-12">
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                        <input type="text" class="form-control" name="bcity" />
                      </div>      
                      
                    </div>
                  </div>
                  <div class="form-group">        
                    <label class="col-md-3 col-xs-12 control-label">Area</label>
                    <div class="col-md-6 col-xs-12">
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                        <input type="text" class="form-control" name="barea" />
                      </div>      
                      
                    </div>
                  </div>
​
                  <div class="form-group">        
                    <label class="col-md-3 col-xs-12 control-label">Location</label>
                    <div class="col-md-6 col-xs-12">
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                        <input type="text" class="form-control" name="blocation" />
                      </div>      
                      
                    </div>
                  </div>
​
                  <div class="form-group">        
                    <label class="col-md-3 col-xs-12 control-label">Open Days</label>
                    <div class="col-md-6 col-xs-12">
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                        <select class="form-control" name="opdays">
                          <option>24/7</option>
                          <option>
                            Saturday OFF
                          </option>
                          <option>
                            Sunday OFF
                          </option>
                          <option>Saturday Sunday OFF</option>
                        </select>
                      </div>      
                      
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Services</label>
                    <div class="col-md-6 col-xs-12">      
                      <select multiple="true" class="form-control select" name="services[]">
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
                    <label class="col-md-3 col-xs-12 control-label">Business Contact</label>
                    <div class="col-md-6 col-xs-12"> 
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                        <input type="text" class="form-control" name="bcontact" />
                      </div>     
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Business Images</label>
                    <div class="col-md-6 col-xs-12">        
                      <input type="file" class="fileinput btn-primary" name="bimages[]" id="filename" title="Browse file" multiple="" />
                      <!--span class="help-block">Input type file</span-->
                    </div>
                  </div>
                  
                  
​
                </div>
                <div class="panel-footer">
                  <!--button class="btn btn-default">Clear Form</button-->                  
                  <button class="btn btn-primary pull-right" type="submit" name="addBusiness">Submit</button>
                </div>
              </div>
              </form>
              
            </div>
          </div>
​
        </div>                
      </div>      
    </div>
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>        
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>