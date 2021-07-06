<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'university');


$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


if($connection && $connection->connect_error){
    echo "Error connecting, connection failed!". $connection->connect_error;
} else {
    echo 'Connection succesfull!';
}

$query = "SELECT * FROM courses";
$result = $connection->query($query);



?>