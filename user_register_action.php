<?php 
require "conn.php";

$user_id=$_GET["user_id"];
$first_name=$_GET["first_name"];
$last_name=$_GET["last_name"];
$address=$_GET["txtAddress"];
$mobNo =$_GET["mobile"];
$email =$_GET["email"];
$city=$_GET["city"];
$pincode=$_GET["pincode"];
$pass =$_GET["password"];
$res["status"]="0";

$mysql_qry="INSERT INTO `registration`( `user_id`, `first_name`,`last_name`, `address`, `mobile`, `email`, `pincode`,`city`,`password`) VALUES ('".$user_id."','".$first_name."','".$last_name."','".$address."','".$mobNo."','".$email."','".$pincode."','".$city."','".$pass."');";
if(mysqli_query($conn,$mysql_qry))
{
	$res['status']='2';
}
else
  {
	$res['status']='0';
}
echo $mysql_qry;
header('Location:login.php')

?>