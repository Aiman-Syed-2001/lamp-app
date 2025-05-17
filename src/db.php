<?php
$conn = new mysqli("db", "lampuser", "password123", "userdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
