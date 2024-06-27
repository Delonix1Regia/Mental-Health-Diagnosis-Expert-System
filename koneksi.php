<?php
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$db_name = 'diagnosa_mental'; 

$koneksi = new mysqli($host, $username, $password, $db_name);
if ($koneksi->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
