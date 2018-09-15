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
      
        <!-- My Business Table Start -->
<div class="container">
    <h2 style="text-align: center;">My Business</h2><br> 
<table class="table table-bordered">
    <thead>
      <tr class="active" style="background-color: #6777;">
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Area</th>
            <th>Location</th>
            <th>Business Contact</th>
            <th>Business Charges</th>
            <th>Description</th>
            <th>Open Days</th>
            <th>Status</th>
            <th>Paid</th>
        </tr>
    </thead>
    <tbody style="background-color: #1111;">
    <?php
        include 'conn.php';
        $sql=mysqli_query($conn, "SELECT * FROM business");
        while($row=mysqli_fetch_array($sql))
        {
    ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['bname'];?></td>
        <td><?php echo $row['bcity'];?></td>
        <td><?php echo $row['barea'];?></td>
        <td><?php echo $row['blocation'];?></td>
        <td><?php echo $row['bcontact'];?></td>
        <td><?php echo $row['bookingFee'];?></td>
        <td><?php echo $row['bdesc'];?></td>
        <td><?php echo $row['openDays'];?></td>
        <td><?php echo $row['bstatus'];?></td>
        <td><?php echo $row['Paid'];?></td>
    </tr>
    <?php   }?>

    </tbody>

</table>
  </div>
    </div>
      <!-- /.content-wrapper -->