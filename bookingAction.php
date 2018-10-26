<?php
session_start();
include 'toptop.php';
?>

<div class="container">
	<div class="row">
	<?php if(isset($_POST['book'])){
		include 'conn.php';
		$bid = $_GET['bid'];
		$uid = $_SESSION['user']['id'];
		$bdate = $_POST['bdate'];
		$stime = $_POST['stime'];
		$etime = $_POST['etime'];
		$eventType = $_POST['eventType'];
		$q = mysqli_query($conn, "INSERT INTO `bookings` (`bid`, `uid`, `bookingDate`, `eventType`, `bstatus`, `fromTime`, `toTime`) VALUES ('$bid', '$uid', '$bdate', '$eventType', 'Pending', '$stime', '$etime')");
		if($q)
			header("location:myOrders.php");
	} ?>
		
	</div>
</div>


<?php
include 'stickyfooter.php';
?>