<?php 
require "conn.php";
session_start();
$regNo=$_SESSION["reg_no"];
$id=$_POST["txtId"];
$target_path = "upload/";  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']); 

  
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!";  
	
} else{  
    echo "Sorry, file not uploaded, please try again!";  
} 
$qry="INSERT INTO `student_document`( `register_no`, `id_proof_name`, `file_path`) VALUES ('".$regNo."','".$id."','".$target_path."');";
$res=mysqli_query($conn,$qry);

header('location:StudentHome.php')
?>  