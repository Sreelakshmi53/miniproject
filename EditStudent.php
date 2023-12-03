<?php
session_start();
require_once('conn.php');

$userId=$_SESSION["user_id"];
$first_name=$_POST['txtName'];
$last_name=$_POST['last_name'];
$address=$_POST['txtAddress'];
$mobNo=$_POST['txtMobNo'];
$email=$_POST['txtMail'];
$password=$_POST['password'];
$pincode=$_POST['pincode'];
$city=$_POST['city'];

$qry="update registration set first_name='".$first_name."',last_name='".$last_name."',address='".$address."',mobile='".$mobNo."',email='".$email."',pincode='".$pincode."',city='".$city."',password='".$password."' where user_id='".$userId."' ";
if(mysqli_query($conn,$qry))
{
	$res['status']='1';
}
 else
{
	$res['status']='0';
}
mysqli_close($conn);
echo $qry;
header('Location:view_profile.php');
?>