<div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
      <!-- Business -->
      <?php
        if($_SESSION['users']['userType']=='Business'){ ?>
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
          <a class="nav-link" href="">
            <h5>Business:- </h5></a>
        <li class="nav-item">
          <a class="nav-link" href="businessprofile.php">
            <i class="fas fa-user-circle fa-fw"></i>
            <span>My Profile </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="createbusiness.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Business </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="mybusiness.php">
            <i class="fas fa-fw fa-table"></i>
            <span>My Business </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Booking Schedule </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="createoffers.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Create Offers </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="myoffers.php">
            <i class="fas fa-fw fa-table"></i>
            <span>My Offers </span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>View My Clients </span></a>
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
        <!-- End Business -->
      </ul>
      <div id="content-wrapper">
        <div class="container-fluid">
      <div class="card card-login mx-auto mt-5" >
        <div class="card-header"><h5 style="text-align: center;">Create Offers</h5></div>
        <div class="card-body">
          <form method="POST" action="createoffersAction.php">
            <!-- <div class="form-group">
              <h5>Select Business:</h5>
              <div class="form-label-group">
                <input type="Select" id="inputName" class="form-control" placeholder="Select Business" name="selectbusiness" required="required" autofocus="autofocus">
                <label for="inputName">Select Business</label>
              </div>
            </div> -->
            <div class="form-group">
              <h5>Offer Name:</h5>
              <div class="form-label-group">
                <input type="Name" id="inputName" class="form-control" placeholder="Offer Name" name="offername" required="required">
                <label for="inputName">Offer Name</label>
              </div>
            </div>
            <div class="form-group">
            <div class="form-group">
              <h5>Description:</h5>
              <div class="form-label-group">
                <input type="text" id="inputDescription" class="form-control" placeholder="Description" name="description" required="required">
                <label for="inputDescription">Description</label>
              </div>
            </div>
              <h5>Starting From:</h5>
              <div class="form-label-group">
                <input type="Date" id="inputDate" class="form-control" placeholder="calendar" name="startdate" required="required">
                <label for="inputDate">Starting From</label>
              </div>
            </div>
            <div class="form-group">
              <h5>End Date:</h5>
              <div class="form-label-group">
                <input type="Date" id="inputDate" class="form-control" placeholder="calendar" name="enddate" required="required">
                <label for="inputDate">End Date</label>
              </div>
            </div>
            <div class="form-group">
              <h5>% off:</h5>
              <div class="form-label-group">
                <input type="text" id="inputPercentage" class="form-control" placeholder="% off" name="discount" required="required">
                <label for="inputPercentage">% off</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="Submit">Create</button>
          </form>
           <div class="text-center">
            <a class="d-block small mt-3" href="deleteupdateoffers.php">Update & Delete</a>
          </div>
        </div>
      </div><br>
        <!-- stickyfooter.php -->
    <?php include 'stickyfooter.php'; ?>
      </div>
      <!-- /.content-wrapper -->
    </div>
  </div>