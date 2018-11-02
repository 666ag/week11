<?php
$servername = "localhost";
$username = "ag33";
$password = "";
$dbname = "c9";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
//echo "Connected successfully, yo";
?>