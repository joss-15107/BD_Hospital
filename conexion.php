<?php
$host = "127.0.0.1:3307";
$user = "root";
$password = "";
$database = "hospital_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn){
    die("Error de conexion: " . mysqli_connect_error());
}
?>