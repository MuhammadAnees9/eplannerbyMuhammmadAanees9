<?php 
if(isset($_POST['signup']))
{
	include 'conn.php';
	$fullName = $_POST['fname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$selectType = $_POST['type'];
	if(	$selectType=='As Admin')
	 	$userType = 'Admin';
	else if($selectType=='As Business')
	 	$userType = 'Business';
	else if($selectType=='As User')
	 	$userType = 'User';
	// $userType='dummy';
	$insert = mysqli_query($conn, "INSERT INTO `users`(fullName, email, password, contact, userType) VALUES('$fullName', '$email', '$password', '$contact', '$userType')");
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