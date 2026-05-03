<?php
// Railway MySQL
$servername = getenv('MYSQLHOST');
$username = getenv('MYSQLUSER');
$password = getenv('MYSQLPASSWORD');
$dbname = getenv('MYSQLDATABASE');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối lỗi: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

echo "Kết nối database thành công! <br><br>";
echo "Nếu bạn thấy dòng này, web đã chạy OK!";
?>
