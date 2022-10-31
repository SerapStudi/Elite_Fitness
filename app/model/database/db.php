<?php
require 'db_config.php';


try {

   $db = new PDO($dsn, $user, $pass);
   echo 'Connection etablie!';

 
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

