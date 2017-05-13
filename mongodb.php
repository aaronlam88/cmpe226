<?php
require 'vendor/autoload.php'; // include Composer's autoloader

// Specifying the username and password in the connection URI (preferred)
try {
  $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
var_dump($manager);
} catch (Exception $e) {
	echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>