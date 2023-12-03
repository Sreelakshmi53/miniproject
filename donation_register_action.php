<?php 
require "conn.php";

$txtName=$_GET["txtName"];
$txtAddress=$_GET["txtAddress"];
$txtDesc=$_GET["txtDesc"];
$txtAmount=$_GET["txtAmount"];
 
$mysql_qry="INSERT INTO `donations`( `name`, `amount`,`posted_date`, `description`, `address`) VALUES ('".$txtName."','".$txtAmount."',curdate(),'".$txtDesc."','".$txtAddress."' );";
if(mysqli_query($conn,$mysql_qry))
{
	$res['status']='2';
}
else
  {
	$res['status']='0';
}
header('Location:AdminHome.php');

?>