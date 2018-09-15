<?php 
if(isset($_POST['register']))
{
	include 'conn.php';
	$type = $_POST['type'];
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['cpassword'];
	// $type = $_POST['userType'];
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	if ($password != $confirmpassword) {
echo("Error... Passwords do not Match");
exit;
}
	$insert = mysqli_query($conn, "INSERT INTO `user`(type, fname, lname, email, password, cpassword) VALUES('$type', '$firstName', '$lastName','$email', '$password', '$confirmpassword')");
	
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