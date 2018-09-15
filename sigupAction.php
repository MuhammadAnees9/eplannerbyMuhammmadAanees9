<?php 
if(isset($_POST['signup']))
{
	include 'conn.php';
	$fullName = $_POST['fname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$selectType = $_POST['type'];
	if($type=='for Event Booking')
	 	$userType = 'User';
	else if($type=='as a Business Partner')
	 	$userType = 'Admin';
	else
	$userType='dummy';
	$insert = mysqli_query($conn, "INSERT INTO `users`(fullName, email, password, contact, userType) VALUES('$fullName', '$email', '$password', '$contact', 'selectType')");
	if($insert)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:login.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($conn);
		header("location:register.php");
	}

}
?>