 <div id="wrapper">

      <!-- Sidebar -->
      
      <ul class="sidebar navbar-nav">
       <!-- User -->
         <?php 
        if($_SESSION['registration']['type']=='User'){ ?>
          
        <li class="nav-item active">
          <a class="nav-link" href="myprofile.html">
            <i class="fa fa-user-circle"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mybooking.html">
            <i class="fas fa-fw fa-folder"></i>
            <span>My Bookings</span>
          </a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>New Offers </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dash_login.html">
            <i class="fas fa-fw fa-table"></i>
            <span>LogOut</span></a>
        </li>
        <hr>
        <?php } ?>

       <!-- Admin -->
            
            <?php 
        if($_SESSION['registration']['type']=='Admin'){ ?>
          
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Profile </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Business For Approval</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>View Approve Business</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dash_login.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a>
        </li>
                    <?php } ?>  
        <!-- Admin End -->
        <hr>
         <!-- Business -->
              <?php 
        if($_SESSION['registration']['type']=='Business'){ ?>
          
        <li class="nav-item">
          <a class="nav-link" href="myprofile.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Profile </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AddBusiness.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Business</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>My Business</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Booking Schedule</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="createOffer.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Create Offers</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>My Offers</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>View My Clients</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dash_login.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a>
        </li>
   <?php } ?> 

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">Total Business </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">Pending booking </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">123 New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">Total Income </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>


        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright ©  assort tech Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>