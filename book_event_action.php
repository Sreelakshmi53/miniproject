<?php
session_start();
$id = $_SESSION['idevent'];
$user_id = $_SESSION['user_id'];
require "conn.php";

$txtName = $_POST["txtName"];
$txtMobile = $_POST["txtMobile"];
$txtMembers = $_POST["txtMembers"];
 
$mysql_qry = "INSERT INTO `user_event_register`(`user_id`,`idevent`,`name`,`mobile`,`register_date`,`members`) VALUES ('".$user_id."','".$id."','".$txtName."','".$txtMobile."',CURDATE(),'".$txtMembers."');";
if (mysqli_query($conn, $mysql_qry)) {
        $red = 'Location:UserHome.php';
}
mysqli_close($conn);

header($red);
?>
