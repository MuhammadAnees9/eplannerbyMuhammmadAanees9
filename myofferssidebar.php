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
<div class="container">
    <h2 style="text-align: center;">My Offers</h2><br> 
<table class="table table-bordered">
    <thead>
      <tr class="active" style="background-color: #6777;">
            <th>ID</th>
            <th>Offer Name</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Percent Off</th>
        </tr>
    </thead>
    <tbody style="background-color: #1111;">
    <?php
        include 'conn.php';
        $sql=mysqli_query($conn, "SELECT * FROM offers");
        while($row=mysqli_fetch_array($sql))
        {
    ?>
    <tr>
        <td><?php echo $row['oid'];?></td>
        <td><?php echo $row['oname'];?></td>
        <td><?php echo $row['description'];?></td>
        <td><?php echo $row['sdate'];?></td>
        <td><?php echo $row['edate'];?></td>
        <td><?php echo $row['poff'];?></td>
    </tr>
    <?php   }?>

    </tbody>

</table>
  </div>
    </div>
      <!-- /.content-wrapper -->