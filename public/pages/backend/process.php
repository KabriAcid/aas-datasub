<?php
session_start();
require __DIR__ . '/../../../config/config.php';

if(isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, password) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $first_name, $last_name, $password);

    if($stmt->execute()){
        header("Location: login.php");
    } else {
        echo "Failed";
    }

}

if (isset($_POST['login'])) {
    $first_name = $_POST['first_name'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, password) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $first_name, $last_name, $password);

    if ($stmt->execute()) {
        header("Location: login.php");
    } else {
        echo "Failed";
    }
}