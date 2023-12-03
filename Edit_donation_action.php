<?php
session_start();
require_once('conn.php');
 
$iddonations=$_SESSION['iddonations'];
echo $iddonations;

$name=$_GET['txtName'];
$txtAmount=$_GET['txtAmount'];
$txtDescription=$_GET['txtDescription'];
 
$txtAddress=$_GET['txtAddress'];

$qry="update donations set name='".$name."',amount='".$txtAmount."',description='".$txtDescription."',posted_date=curdate(),address='".$txtAddress."'  where iddonations=".$iddonations." ";
if(mysqli_query($conn,$qry))
{
	$res['status']='1';
}
 else
{
	$res['status']='0';
}

header('Location:view_donations.php');
?>