<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db       = 'rekeningku.com';

// $conn = mysqli_connect($hostname, $username, $password, $db);
$conn = new mysqli($hostname, $username, $password, $db);

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
