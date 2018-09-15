<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome || My Bookings</title>
  <style>
        table,tr,th,td
        {
            border: 5px solid black;
        }
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;">My Bookings</h2><br> 
  <table class="table table-bordered">
    <thead>
      <tr class="active" style="background-color: #6777;">
        <th>ID</th>
        <th>Booking Date</th>
        <th>Event Type</th>
        <th>Status</th>
        <th>From Time</th>
        <th>To Time</th>
        <th>Client Name</th>
        <th>Client Contact</th>
        <th>Booking Time</th>
      </tr>
    </thead>
    <tbody style="background-color: #1111;">
      <?php
        include 'conn.php';
        $sql=mysqli_query($conn, "SELECT * FROM bookings");
        while($row=mysqli_fetch_array($sql))
        {
    ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['bookingDate'];?></td>
        <td><?php echo $row['eventType'];?></td>
        <td><?php echo $row['bstatus'];?></td>
        <td><?php echo $row['fromTime'];?></td>
        <td><?php echo $row['toTime'];?></td>
        <td><?php echo $row['cname'];?></td>
        <td><?php echo $row['ccontact'];?></td>
        <td><?php echo $row['createdAt'];?></td>
    </tr>

        <!-- <td><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-print"></span> Print
        </button></td> -->
      </tr>
      <?php   }?>
    </tbody>
  </table>
</div>

</body>
</html>