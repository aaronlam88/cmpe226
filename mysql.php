<?php

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=cmpe226;host=127.0.0.1';
$user = 'readOnly';
$password = 'readOnlyP@$$';

try {
  $conn = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

?>