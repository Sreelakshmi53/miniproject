<?php
session_start();
require_once('conn.php');
 
$event_id=$_GET['a'];

$qry="delete from donations where iddonations=".$event_id."";
if(mysqli_query($conn,$qry))
{
	$res['status']='1';
}
else
{
	$res['status']='0';
}
mysqli_close($conn);
header('Location:view_donations.php');
?>