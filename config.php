<?php
$servername = "localhost";
$dbname = "jamia_rabbani";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
   // echo "connected";
}
?>