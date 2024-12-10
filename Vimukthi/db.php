<?php
$host = "localhost";
$user = "root";  
$pass = "";  
$db = "green_mart";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo ("connection successfull");
}
?>
