<?php

$user = 'root';
$password = '20271916';
$db = 'sistema_whoq';
$host = 'localhost';
$port = 3336;
//Conectando...
$conn = mysqli_connect($host,$user,$password,$db);
// Status da conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
