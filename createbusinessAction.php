<?php 
if(isset($_POST['createbusiness']))
{
	include 'conn.php';
	$bname = $_POST['bname'];
	$city = $_POST['city'];
	$area = $_POST['area'];
	$location = $_POST['location'];
	$opendays = $_POST['opendays'];
	$services = $_POST['services'];
	$bcharges = $_POST['bcharges'];
	$bcontact = $_POST['bcontact'];
	// $type = $_POST['userType'];
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($conn, "INSERT INTO `createbusiness`(bname, city, area, location, opendays, services, bcharges, bcontact) VALUES('$bname', '$city', '$area','$location', '$opendays', '$services', '$bcharges', '$bcontact')");
	
	if($insert)
	{
		$_SESSION['msg'] = 'Business Created';
		 header("location:index.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($conn);
		 header("location:createbusiness.html");
	}

}
?>