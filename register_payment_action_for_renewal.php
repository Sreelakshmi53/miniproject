<?php
session_start();

$user_id = $_SESSION['user_id'];
require "conn.php";

$amount = $_POST["txtAmount"];
$txtName = $_POST["txtName"];
$txtCardNumber = $_POST["txtCardNumber"];
$card_cvv = $_POST["txtCvv"];
$expiry_date = $_POST["txtDate"];
$flag = 0;
$qry = "SELECT * FROM card_details WHERE card_holder_name='".$txtName."' AND card_number='".$txtCardNumber."' AND card_cvv='".$card_cvv."' AND `expiry_date`='".$expiry_date."'";

$res = mysqli_query($conn, $qry);

if (mysqli_num_rows($res) > 0) {
    $flag = 1;
} else {
    $flag = 0;
}

if ($flag == 1) {
    $mysql_qry = "INSERT INTO `renewal_users`(`user_id`, `renewal_date`) VALUES ('".$user_id."',CURDATE());";
    
    if (mysqli_query($conn, $mysql_qry)) {
        $status = '2';
		$_SESSION["card_error"] = "";
        $red = 'Location:register_payments_complete.php';
    }
} else {
    $_SESSION["card_error"] = "Invalid card details";
   	$red = 'Location: renewal_process.php?a=' . $_SESSION['iddonations'];
}

mysqli_close($conn);
$_SESSION['status'] = $status;
header($red);
?>
