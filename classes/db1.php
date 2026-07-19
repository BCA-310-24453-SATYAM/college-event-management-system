<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saatyam200k";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Protect from SQL Injection 
function safe($conn, $data){
    return mysqli_real_escape_string($conn, htmlspecialchars(strip_tags(trim($data))));
}
?>