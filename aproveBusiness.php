<?php 
$id = $_GET['id'];
include 'conn.php';
$q = mysqli_query($conn, "UPDATE `business` SET bstatus='Approved' WHERE id='$id'");
if($q)
header("location:aprovedbusiness.php");
else
die("some error");
 ?>