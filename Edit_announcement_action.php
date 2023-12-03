<?php
session_start();
require_once('conn.php');
 
$idannouncement=$_SESSION['idannouncement'];
$announce_subject=$_POST['txtAnnounceSubject'];
$txtDescription=$_POST['txtDescription'];


$qry="update announcement set announce_subject='".$announce_subject."',description='".$txtDescription."',announcement_date=curdate()  where idannouncement=".$idannouncement." ";
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
header('Location:view_announcement.php');
?>