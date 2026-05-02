<?php
$conn = new mysqli("localhost", "root", "", "tds_system");

if ($conn->connect_error) {
    die("Kết nối lỗi: " . $conn->connect_error);
}
?>