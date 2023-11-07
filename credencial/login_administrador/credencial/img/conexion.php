<?php
$servername = "localhost";
$database = "egresados";
$username = "egresado";
$password = "K22t7Tod2023@";
//print_r("Ejemplo");
//print_r($password);
// Create connection
$conn = new mysqli($servername, $username, $password);
echo "conn: $conn";
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
