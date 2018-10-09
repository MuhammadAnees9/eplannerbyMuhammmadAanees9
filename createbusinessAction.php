<?php 
session_start();
if(isset($_POST['addBusiness']))
{
	include 'conn.php';
	echo $uid = $_SESSION['users']['id'];
	echo $bname = $_POST['bname'];
	echo $bcity = $_POST['bcity'];
	echo $barea = $_POST['barea'];
	echo $blocation = $_POST['blocation'];
	echo $bookingFee = $_POST['bookingFee'];
	echo $bcontact = $_POST['bcontact'];
	echo $bdescription = $_POST['bdescription'];
	echo $opdays = $_POST['opdays'];
	$insert1 = mysqli_query($conn, "INSERT INTO `business`(bname, bcity, barea, blocation, bcontact, bookingFee, ownerId, openDays) VALUES('$bname','$bcity', '$barea', '$blocation', '$bcontact', '$bookingFee', '$uid', '$opdays')");
	$bid = mysqli_insert_id($conn);
	// inserting services
	if($insert1){
		foreach($_POST['services'] as $service){
		$insert2 = mysqli_query($conn, "INSERT INTO `services`(sname, bid) VALUES('$service', '$bid')");
	}

	// uploading images and inserting into db.

	foreach($_FILES['bimages']['name'] as $key=>$name){
		if(move_uploaded_file($_FILES['bimages']['tmp_name'][$key], "images/business/".$_FILES['bimages']['name'][$key]))
			{
				$iname = $_FILES['bimages']['name'][$key];
				$ins = mysqli_query($conn, "INSERT INTO `images`(iname, bid) VALUES('$iname', '$bid')");
				
			}
	}
	$noti = 'New Business for '.$bname.' is Added. Waiting for Approval';
	$qn = mysqli_query($conn, "INSERT INTO `notifications`(type, description, uid) VALUES('Admin', '$noti', '$uid')");
$_SESSION['msg'] = 'Business Added Successfully';
	header("location: luck.php");
	}
	else
		die(mysqli_error($conn));
	
}
?>