<?php
// Database credentials
$host = 'localhost'; // host
$username ='root'; // database username
$password = ''; // database password
$dbname = 'video-sharing'; //database name
// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// header("Location: sign-up.php")
?>