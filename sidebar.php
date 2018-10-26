<div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="xn-profile">
                       
                        <div class="profile" style="color: #ffffff;">
                            <div class="profile-data">
                                <a class="profile-data-name"><h5><?php echo @$_SESSION['user']['fullName']; ?>:-</h5></a>
                            </div>
                            <!--div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div-->
                        </div>                                                                        
                    </li>
        <!-- Admin -->
        <?php
        if($_SESSION['user']['userType']=='Admin'){ ?>
<!-- 
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li> -->
            <a class="nav-link" href="">
              <h5>Admin:- </h5>
               <li class="nav-item">
          <a class="nav-link" href="myprofile.php">
            <i class="fa fa-user"></i>
            <span>My Profile </span></a>
        </li>
            </a>
       <!--  <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Business For Approval</span></a>
        </li> -->
         <li class="nav-item">
          <a class="nav-link" href="aprovedbusiness.php">
            <i class="fa fa-briefcase"></i>
            <span>View Approved Business </span></a>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>Logout
          </a>
          
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
        <?php } ?>
        <!-- End Admin -->

        <!-- User -->
        <?php 
        if($_SESSION['user']['userType']=='User'){ ?>

        <!-- <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li> -->
          <a class="nav-link" href="">
            <h5>User:- </h5></a>
        <li class="nav-item">
          <a class="nav-link" href="userprofile.php">
            <i class="fa fa-user"></i>
            <span>My Profile </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mybookings.php">
            <i class="fa fa-book"></i>
            <span>My Bookings </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="newoffers.php">
            <i class="fa fa-bullhorn"></i>
            <span>New Offers </span></a>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>Logout
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      <?php } ?>
      <!-- End User -->
      
      <!-- Business -->
      <?php 
        if($_SESSION['user']['userType']=='Business'){ ?>

        <!-- <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li> -->
          <a class="nav-link" href="">
            <h5>Business:- </h5></a>
        <li class="nav-item">
          <a class="nav-link" href="businessprofile.php">
            <i class="fa fa-user"></i>
            <span>My Profile </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="createbusiness.php">
            <i class="fa fa-edit"></i>
            <span>Add Business </span></a>
        <!-- </li>
         <li class="nav-item">
          <a class="nav-link" href="mybusiness.php">
            <i class="fa fa-briefcase"></i>
            <span>My Business </span></a>
        </li> -->
         <!-- <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Booking Schedule </span></a>
        </li> -->
         <li class="nav-item">
          <a class="nav-link" href="createoffers.php">
            <i class="fa fa-edit"></i>
            <span>Create Offers </span></a>
        </li>
        <!--  <li class="nav-item">
          <a class="nav-link" href="myoffers.php">
            <i class="fa fa-bullhorn"></i>
            <span>My Offers </span></a>
        </li> -->
         <!-- <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>View My Clients </span></a>
        </li> -->
         <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>Logout
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
        <?php } ?>
        <!-- End Business -->
      </ul>
  </div>