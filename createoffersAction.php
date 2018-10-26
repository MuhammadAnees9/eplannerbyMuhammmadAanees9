<?php
session_start();

if(isset($_POST['Submit']))
{
	include 'conn.php';
	//$selectbusiness = $_POST['selectbusiness'];
	$offername = $_POST['offername'];
	$description = $_POST['description'];
	$startdate = $_POST['startdate'];
	$enddate = $_POST['enddate'];
	$discount = $_POST['discount'];
	// $type = $_POST['userType'];
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($conn, "INSERT INTO `offers`(oname, description, sdate, edate, poff) VALUES('$offername', '$description', '$startdate', '$enddate', '$discount')");
	
	if($insert)
	{
		$_SESSION['msg'] = 'Offer Created';
		 header("location:dashboard.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($conn);
		 header("location:createoffer.php");
	}

}
?>