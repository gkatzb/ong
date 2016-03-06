<?php
$Config = new Config();
try {
    $conn = new PDO('mysql:host=' . $Config->dbHost . ';dbname=' . $Config->database, $Config->dbUser, $Config->dbPassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
Global $conn;
?>