<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "gym";

try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $db = new PDO($dsn, $dbUser, $dbPassword);
  $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch(PDOException $e) {
  echo "DB Connection Failed: " . $e->getMessage();
}


 ?>