<?php 
session_start();
require "conn.php";
 
$announce_subject=$_GET["txtSubject"];
$description=$_GET["txtDescription"];
 
 

$mysql_qry="INSERT INTO `announcement`(`announce_subject`, `description`,`announcement_date`) VALUES ('".$announce_subject."','".$description."',curdate());";
if(mysqli_query($conn,$mysql_qry))
{
	$res['status']='2';
}
else
  {
	$res['status']='0';
}


mysqli_close($conn);

header('Location:AdminHome.php')

?>