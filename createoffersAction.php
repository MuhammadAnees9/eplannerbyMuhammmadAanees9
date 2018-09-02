<?php 
if(isset($_POST['submit']))
{
	include 'conn.php';
	$selectbusiness = $_POST['selectbusiness'];
	$offername = $_POST['offername'];
	$percentage = $_POST['percentage'];
	$startdate = $_POST['startdate'];
	$enddate = $_POST['enddate'];
	$description = $_POST['description'];
	// $type = $_POST['userType'];
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($conn, "INSERT INTO `creatoffers`(selectbusiness, offername, percentage, startdate, enddate, description) VALUES('$selectbusiness', '$offername', '$percentage','$startdate', '$enddate', '$description')");
	
	if($insert)
	{
		$_SESSION['msg'] = 'Offer Created';
		 header("location:createoffer.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($conn);
		 header("location:index.php");
	}

}
?>