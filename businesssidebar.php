<div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
      <!-- Business -->
      <?php
        if($_SESSION['users']['userType']=='Business'){ ?>
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
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
          <a class="nav-link" href="">
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
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h5 style="text-align: center;">Create Business </h5></div>
        <div class="card-body">
          <form method="POST" action="createbusinessAction.php">
            <div class="form-group">
              <h5>Business Name:</h5>
              <div class="form-label-group">
                <input type="Name" id="inputName" class="form-control" placeholder="Business Name" name="bname" required="required" autofocus="autofocus">
                <label for="inputName">Business Name</label>
              </div>
            </div>
            <div class="form-group">
              <h5>City:</h5>
              <div class="form-label-group">
                <input type="text" id="inputCity" class="form-control" placeholder="City" name="bcity" required="required">
                <label for="inputCity">City</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Area:</h5>
              <div class="form-label-group">
                <input type="text" id="inputArea" class="form-control" placeholder="Area" name="barea" required="required">
                <label for="inputArea">Area</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Location:</h5>
              <div class="form-label-group">
                <input type="text" id="inputLocation" class="form-control" placeholder="Location" name="blocation" required="required">
                <label for="inputLocation">Location</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Business Contact:</h5>
              <div class="form-label-group">
                <input type="text" id="inputContact" class="form-control" placeholder="Contact" name="bcontact" required="required">
                <label for="inputContact">Business Contact</label>
              </div>
              </div>
            <div class="form-group">
              <h5>Booking Charges:</h5>
              <div class="form-label-group">
                <input type="text" id="inputCharges" class="form-control" placeholder="Money" name="bfee" required="required">
                <label for="inputCharges">Booking Charges</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Description:</h5>
              <div class="form-label-group">
                <input type="text" id="input-group-append" class="form-control" placeholder="Description" name="bdescription" required="required">
                <label for="inputServices">Description</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Open Days:</h5>
              <div class="form-label-group">
                <input type="text" id="inputDays" class="form-control" placeholder="Open Days" name="opendays" required="required">
                <label for="inputDays">Open Days</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Status:</h5>
              <div class="form-label-group">
                <input type="text" id="input-group-append" class="form-control" placeholder="Status" name="bstatus" required="required">
                <label for="inputServices">Status</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Paid:</h5>
              <div class="form-label-group">
                <input type="text" id="input-group-append" class="form-control" placeholder="Paid" name="bpaid" required="required">
                <label for="inputServices">Paid</label>
              </div>
            </div>
              <!-- <div class="form-group">
              <h5>Upload Image:</h5>
              <div class="form-label-group">
                <input type="file" id="Image" class="form-control" placeholder="inputImage" name="bimage" required="required">
              </div>
              </div> -->
              <button type="submit" class="btn btn-primary btn-block" name="Submit">Submit</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="deleteupdatebusiness.php">Update & Delete</a>
          </div>
        </div>
      </div><br>
      </div>
      <!-- /.content-wrapper -->

    </div><br>
    <!-- /#wrapper -->

    </div>