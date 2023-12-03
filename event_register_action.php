<?php 
require "conn.php";

$txtName=$_GET["txtName"];
$txtSlot=$_GET["txtSlot"];
$txtDesc=$_GET["txtDesc"];
 
 
$s=0;
$mysql_qry="INSERT INTO `event`( `event_name`, `time_slot`,`description`, `status`) VALUES ('".$txtName."','".$txtSlot."','".$txtDesc."','New Event' );";
if(mysqli_query($conn,$mysql_qry))
{
	 $s=1;
}
else
  {
	 $s=0;
}

header('Location:AdminHome.php')

?>