<?php

$user = "root";
$pass = "root";
$server = "localhost";
$dbname = "module_11";

try{

    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
}catch (PDOException $e){
    echo "error: ". $e->getMessage();
}
?>