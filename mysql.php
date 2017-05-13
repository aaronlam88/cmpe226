<?php

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=cmpe226;host=localhost';
$user = 'deadlock';
$password = 'sesame';

try {
  $conn = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

?>