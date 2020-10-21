<?php 
$host = "localhost";
$user = "id15141256_sistemtk";
$password = "N\8^NbxuCI!+*[wk";
$database = "id15141256_db_sistemtk";

// $host = "localhost";
// $user = "root";
// $password = "admin";
// $database = "db_sistemtk";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    echo "Connection to mySQL failed : " . mysqli_error($conn);
}
?>