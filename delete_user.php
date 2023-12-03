<?php
session_start();
require_once('conn.php');
 
$userId=$_GET['a'];
 

$qry="delete from registration where user_id='".$userId."'";
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
header('Location:View_users.php');
?>