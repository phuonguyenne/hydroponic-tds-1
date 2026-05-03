<?php
$conn = new mysqli(
    getenv('MYSQLHOST'),
    getenv('MYSQLUSER'),
    getenv('MYSQLPASSWORD'),
    getenv('MYSQLDATABASE')
);

if ($conn->connect_error) {
    die("Kết nối lỗi: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

echo "Kết nối database thành công!";
?>
