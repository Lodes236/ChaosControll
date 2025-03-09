<?php
$servername = "localhost";
$username = "u634617957_chaoscontrol";
$password = "Hyper22Blood&!95?31";
$dbname = "u634617957_chaoscontrol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
