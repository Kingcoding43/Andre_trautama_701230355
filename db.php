<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$database = "testdb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>
