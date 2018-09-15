<?php 
session_start();
if(isset($_POST['login']))
{
	include 'conn.php';
	$email = $_POST['email'];
	$password = $_POST['password'];
	$chek = mysqli_query($conn, "SELECT * FROM `users` WHERE email='$email' AND password='$password'");
	if(mysqli_num_rows($chek)>0)
	{
		$allData = mysqli_fetch_assoc($chek);
		$_SESSION['is_login'] = true;
		$_SESSION['users'] = $allData;
		header("location:dashboard.php");
	}
	else
	{
		echo $_SESSION['msg'] = 'Invalid Login Cardentials';
		header("location:login.php");
	}
}
?>