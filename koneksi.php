<?php 
$host = "localhost";
$user = "root";
$password = "admin";
$database = "db_sistemtk";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    echo "Connection to mySQL failed : " . mysqli_error($conn);
}
?>