<?php
$dsn = "mysql:host=" . getenv('MYSQLHOST') . ";dbname=" . getenv('MYSQLDATABASE') . ";port=" . getenv('MYSQLPORT');

try {
    $conn = new PDO($dsn, getenv('MYSQLUSER'), getenv('MYSQLPASSWORD'));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES utf8mb4");
} catch(PDOException $e) {
    die("Kết nối lỗi: " . $e->getMessage());
}
?>
