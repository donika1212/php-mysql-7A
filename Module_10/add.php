<?php

include_once 'config.php';

if(isset(&_POAST['submit'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, lastname, email) VALUES (:name, :lastname, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

}
?>
