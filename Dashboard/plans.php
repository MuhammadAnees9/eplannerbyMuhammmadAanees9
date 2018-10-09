<?php include 'header.php'; ?>
<style type="text/css">
    body{
        font-size: 8px;
    }
    .fa {
    	line-height: 3;
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
                    <li class="active">Plans</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Registration Plans</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Monthly Plan</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table table-responsive">
                                    	<thead>
                                    		<tr>
                                    			<th>
                                    				Type
                                    			</th>
                                    			<th>
                                    				Fee
                                    			</th>
                                    			<th>
                                    				Business
                                    			</th>
                                    		</tr>
                                    	</thead>
                                    	<tbody>
                                    		<tr>
                                    			<td>Monthly</td>
                                    			<td>Rs.5000</td>
                                    			<td>
                                    				5/Month
                                    			</td>
                                    		</tr>
                                    	</tbody>
                                    </table>
                                    <a class="btn btn-success" href="../updatePlan.php?plan=monthly">Select</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Yearly Plan</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table table-responsive">
                                    	<thead>
                                    		<tr>
                                    			<th>
                                    				Type
                                    			</th>
                                    			<th>
                                    				Fee
                                    			</th>
                                    			<th>
                                    				Business
                                    			</th>
                                    		</tr>
                                    	</thead>
                                    	<tbody>
                                    		<tr>
                                    			<td>Yearly</td>
                                    			<td>Rs.45000</td>
                                    			<td>
                                    				3/Month
                                    			</td>
                                    		</tr>
                                    	</tbody>
                                    </table>
                                    <a class="btn btn-success" href="../updatePlan.php?plan=yearly">Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Premium Plan</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table table-responsive">
                                    	<thead>
                                    		<tr>
                                    			<th>
                                    				Type
                                    			</th>
                                    			<th>
                                    				Fee
                                    			</th>
                                    			<th>
                                    				Business
                                    			</th>
                                    		</tr>
                                    	</thead>
                                    	<tbody>
                                    		<tr>
                                    			<td>Yearly</td>
                                    			<td>Rs.60000</td>
                                    			<td>
                                    				Unlimited
                                    			</td>
                                    		</tr>
                                    	</tbody>
                                    </table>
                                    <a class="btn btn-success" href="../updatePlan.php?plan=premium">Select</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Basic Plan</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table table-responsive">
                                    	<thead>
                                    		<tr>
                                    			<th>
                                    				Type
                                    			</th>
                                    			<th>
                                    				Fee
                                    			</th>
                                    			<th>
                                    				Business
                                    			</th>
                                    		</tr>
                                    	</thead>
                                    	<tbody>
                                    		<tr>
                                    			<td>Basic</td>
                                    			<td>2500/Business</td>
                                    			<td>
                                    				Unilimited
                                    			</td>
                                    		</tr>
                                    	</tbody>
                                    </table>
                                    <a class="btn btn-success" href="../updatePlan.php?plan=basic">Select</a>
                                </div>
                            </div>
                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->       
        
        <?php include 'footer.php'; ?>