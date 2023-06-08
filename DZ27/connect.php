<?php
//Подключение к БД
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'tms';

$db = new mysqli ($serverName, $userName, $password, $dbName);
if ($db->connect_errno) {
    echo 'Failed to connect';
    exit();
}
?>