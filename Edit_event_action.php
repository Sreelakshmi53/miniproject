<?php
session_start();
require_once('conn.php');
 
$idevent=$_SESSION['idevent'];
echo $idevent;

$name=$_GET['txtName'];
$description=$_GET['txtDesc'];
$time_slot=$_GET['txtTime'];

$qry="update event set event_name='".$name."',time_slot='".$time_slot."',description='".$description."'  where idevent=".$idevent." ";
if(mysqli_query($conn,$qry))
{
	$res['status']='1';
}
 else
{
	$res['status']='0';
}
mysqli_close($conn);
header('Location:view_events.php');
?>