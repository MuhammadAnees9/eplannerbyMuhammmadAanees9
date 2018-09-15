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
        <div class="card-header"><h5 style="text-align: center;">Delete and Update</h5></div>
        <div class="card-body">
          <form method="POST" action="deleteupdatebusiness.php">
            <div class="form-group">
              <h5>ID:</h5>
              <div class="form-label-group">
                <input type="number" id="inputID" class="form-control" placeholder="Enter ID" name="id" autofocus="autofocus"  value="<?php echo $id;?>">
                <label for="inputID">Enter ID</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="search">Search</button><br><br>
            <div class="form-group">
              <h5>Business Name:</h5>
              <div class="form-label-group">
                <input type="Name" id="inputName" class="form-control" placeholder="Business Name" name="bname" autofocus="autofocus" value="<?php echo $bname;?>">
                <label for="inputName">Business Name</label>
              </div>
            </div>
            <div class="form-group">
              <h5>City:</h5>
              <div class="form-label-group">
                <input type="City" id="inputCity" class="form-control" placeholder="City" name="city" autofocus="autofocus" value="<?php echo $city;?>">
                <label for="inputCity">City</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Area:</h5>
              <div class="form-label-group">
                <input type="Area" id="inputArea" class="form-control" placeholder="Area" name="area" autofocus="autofocus" value="<?php echo $area;?>">
                <label for="inputArea">Area</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Location:</h5>
              <div class="form-label-group">
                <input type="Location" id="inputLocation" class="form-control" placeholder="Location" name="location" autofocus="autofocus" value="<?php echo $location;?>">
                <label for="inputLocation">Location</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Open Days:</h5>
              <div class="form-label-group">
                <input type="number" id="inputDays" class="form-control" placeholder="Open Days" name="opendays" autofocus="autofocus" value="<?php echo $opendays;?>">
                <label for="inputDays">Open Days</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Services:</h5>
              <div class="form-label-group">
                <input type="dropdown" id="input-group-append" class="form-control" placeholder="Services" name="services" autofocus="autofocus" value="<?php echo $services;?>">
                <label for="inputServices">Services</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Booking Charges:</h5>
              <div class="form-label-group">
                <input type="Money" id="inputCharges" class="form-control" placeholder="Money" name="bcharges" autofocus="autofocus"  value="<?php echo $bcharges;?>">
                <label for="inputCharges">Booking Charges</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Business Contact:</h5>
              <div class="form-label-group">
                <input type="Contact" id="inputContact" class="form-control" placeholder="Contact" name="bcontact" autofocus="autofocus" value="<?php echo $bcontact;?>">
                <label for="inputContact">Business Contact</label>
              </div>
              </div>
                <!-- <div class="form-group">
              <h5>Upload Image:</h5>
              <div class="form-label-group">
                <input type="" id="inputImage" class="form-control" placeholder="inputImage" required="required">
              </div>
              </div> -->
              <div class="row">
              <div class="col-md-6">
             <button type="submit" class="btn btn-warning btn-block" name="update">Update</button>
            </div>
            <div class="col-md-6">
               <button type="submit" class="btn btn-danger btn-block" name="delete">Delete</button>
            </div>
            </div>
            
          </form>
        </div>
      </div><br>
      </div>
      <!-- /.content-wrapper -->

    </div><br>
    <!-- /#wrapper -->

    </div>
    