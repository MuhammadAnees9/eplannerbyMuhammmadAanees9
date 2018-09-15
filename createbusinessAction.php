<?php 
if(isset($_POST['Submit']))
{
	include 'conn.php';
	$name = $_POST['bname'];
	$city = $_POST['bcity'];
	$area = $_POST['barea'];
	$location = $_POST['blocation'];
	$contact = $_POST['bcontact'];
	$charges = $_POST['bfee'];
	$description = $_POST['bdescription'];
	$opendays = $_POST['opendays'];
	$status = $_POST['bstatus'];
	$paid = $_POST['bpaid'];
	//$image = $_POST['bimage'];
	// $type = $_POST['userType'];
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($conn, "INSERT INTO `business`(bname, bcity, barea, blocation, bcontact, bookingFee, bdesc, openDays, bstatus , Paid ) VALUES('$name', '$city', '$area','$location', '$contact', '$charges', '$description', '$opendays', '$status', 'paid')");
	
	if($insert)
	{
		$_SESSION['msg'] = 'Business Created';
		 header("location:dashboard.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($conn);
		 header("location:createbusiness.php");
	}

}
?>