<?php

//DEFINE CONSTANTS, MEANING THEY'LL NEVER CHANGE
define('DB_HOST', 'localhost');
define('DB_USER', 'olwethutanana');
define('DB_PASSWORD', 'GadMae11');
define('DB_NAME', 'students');

//Create Connection
$connection=new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Check connection
if($connection->connect_error){
    echo "Could not connect!";
}
?>

