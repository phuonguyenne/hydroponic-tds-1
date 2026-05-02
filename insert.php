<?php
include "config.php";

$temp = $_POST['temp'] ?? 0;
$tds  = $_POST['tds'] ?? 0;

if(!file_exists("mode.txt")){
    file_put_contents("mode.txt","non");
}

$mode = trim(file_get_contents("mode.txt"));

$status = "OK";

if($mode == "non"){
    if($tds < 500) $status = "LOW";
    if($tds > 700) $status = "HIGH";
}
else{
    if($tds < 700) $status = "LOW";
    if($tds > 900) $status = "HIGH";
}

$sql = "INSERT INTO sensor_data (time, temp, tds, status, mode)
VALUES (NOW(), '$temp', '$tds', '$status', '$mode')";

$conn->query($sql);

echo "OK";
?>