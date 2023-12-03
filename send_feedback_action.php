<?php 
session_start();
 
$user_id=$_SESSION['user_id'];
require "conn.php";
 
$txtDesc=$_GET["txtDesc"];
 

$mysql_qry="INSERT INTO `feedback`(`user_id`, `feedback_date`,`description`) VALUES ('".$user_id."',curdate(),'".$txtDesc."');";
if(mysqli_query($conn,$mysql_qry))
{
	$res['status']='2';
}
else
  {
	$res['status']='0';
}


mysqli_close($conn);

header('Location:UserHome.php');

?>