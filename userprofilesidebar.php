<div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <!-- User -->
        <?php 
        if($_SESSION['users']['userType']=='User'){ ?>

        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
          <a class="nav-link" href="">
            <h5>User:- </h5></a>
        <li class="nav-item">
          <a class="nav-link" href="userprofile.php">
            <i class="fas fa-user-circle fa-fw"></i>
            <span>My Profile </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mybookings.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Bookings </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
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
      </ul>
            
        <div id="content-wrapper">
        <div class="container-fluid">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h5 style="text-align: center;">My Profile</h5></div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <h5>Name:</h5>
              <div class="form-label-group">
                <input type="name" id="inputName" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
                <label for="inputName">Name</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Conatc:</h5>
              <div class="form-label-group">
                <input type="Contact" id="inputContact" class="form-control" placeholder="Contact" required="required" autofocus="autofocus">
                <label for="inputContact">Contact</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Email:</h5>
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Password:</h5>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" href="dashboard.php">Update</button>
          </form>
        </div>
      </div><br>
        <!-- stickyfooter.php -->
    <?php include 'stickyfooter.php'; ?>

      </div>
      <!-- /.container-fluid -->
      </div>
      <!-- /.content-wrapper -->
  </div>