<?php 
$database = "falcons";
$username = "root";
$password = "";
$host = "localhost";
$conn = mysqli_connect($host, $username, $password, $database);

 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 

?>