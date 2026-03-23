<?php

$server = 'localhost';
$username = 'root';
$password = 'root'; //''
$dbname = "http_methods";

try{
    $connect = new PDO("mysql:host=$server; dbname=$dbname", $username, $password);
    echo "Successfully connected to the database";
}
catch (Exception $e){
    echo "Something went wrong";
}
?>