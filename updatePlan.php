<?php 
if(isset($_GET['plan'])){
include 'conn.php';

session_start();
$uid = $_SESSION['user']['id'];
$plan = $_GET['plan'];

$q = mysqli_query($conn, "UPDATE `users` SET regPlan='$plan' WHERE id='$uid'");
$noti = 'You selected '.$plan.' Plan Successfully for Busniess';
if($q){
	$q2 = mysqli_query($conn, "INSERT INTO `notifications`(description, uid) VALUES('$noti', '$uid')");
header("location:Dashboard/payBusiness.php");
}
}
 ?>