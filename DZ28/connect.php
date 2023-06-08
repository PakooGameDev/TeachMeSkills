<?php
//Подключение к БД
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'tmss';
$conn = new mysqli ($serverName, $userName, $password, $dbName);
if ($conn->connect_errno) {
    echo 'Failed to connect';
    exit();
}
?>