<?php
$conn = new mysqli(
    $_ENV['MYSQLHOST'],
    $_ENV['MYSQLUSER'],
    $_ENV['MYSQLPASSWORD'],
    $_ENV['MYSQLDATABASE']
);

if ($conn->connect_error) {
    die("Kết nối lỗi: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
