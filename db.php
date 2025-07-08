<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'auth_demo';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!-- CREATE DATABASE auth_demo;

USE auth_demo;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
); -->
