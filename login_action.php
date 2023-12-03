<?php
session_start();
require_once('conn.php');

$userId=$_GET['txtUserId'];
$_SESSION["user_id"]=$userId;

$pwd=$_GET['txtPass'];
$red='Location:login.php';

$_SESSION["error"]= "Invalid User Id or Password";

$qry="select * from admin_login where admin_id='".$userId."' and password='".$pwd."' ";
$res=mysqli_query($conn,$qry);
		
if(mysqli_num_rows($res)>0)
{
	$_SESSION["error"]= "";
	$red='Location:AdminHome.php';
}
else
{
	$red='Location:UserHome.php';
	$qry="select * from registration where user_id='".$userId."' and password='".$pwd."' ";
	$res=mysqli_query($conn,$qry);

	if(mysqli_num_rows($res)>0)
	{
		$_SESSION["error"]= "";
		$red='Location:UserHome.php';
	
	}
	else
	{
		$_SESSION["error"]= "Invalid User Id or Password";
		$red='Location:login.php';
	}
}
mysqli_close($conn);
header($red);

?>