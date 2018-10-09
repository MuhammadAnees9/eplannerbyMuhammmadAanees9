<?php 
$bid = $_GET['bid'];
$uid = $_GET['uid'];
if(!empty($bid))
{
	include '../conn.php';
	$q = mysqli_query($con, "UPDATE `bookings` SET bstatus='Approved' WHERE id='$bid'");
	if($q)
	{
		$q1 = mysqli_query($con, "SELECT * FROM `bookings` WHERE id='$bid'");
		$res = mysqli_fetch_assoc($q1);
		$description = 'Your Request for '.$res['eventType'].' is Approved';
		$q2 = mysqli_query($con, "INSERT INTO `notifications`(type, description, uid) VALUES('notification', '$description', '$uid')");
		if($q2)
			header("location:clients.php");
	}
}

 ?>