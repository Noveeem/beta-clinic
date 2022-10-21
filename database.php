<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "eledia_db"
  
  
  try {
  $dbConn = new PDO("mysql:host=$host;dbname=$eledia_db", $username, $password);

  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
