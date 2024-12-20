<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patel_electric";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Pro_title, Pro_image, Pro_details, Pro_prize, Pro_MRP FROM products";
$result = $conn->query($sql);
?>