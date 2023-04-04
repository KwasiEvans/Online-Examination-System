<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "exam_db";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>