<?php
$host = "localhost" ;
$port = "8889";

$username = "root";

$password = "root";

$dbName = "startup";



// Create connection

$conn = new mysqli($host.":".$port, $username, $password,$dbName);



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

