<?php
require __DIR__ . '/vendor/autoload.php';

$dbname = "id11186870_users";
$username = "id11186870_admin";
$password = "*p4DRXwC16oPcC%U";
$dsn = "mysql:host=localhost;dbname={$dbname};charset=utf8";
$opt = array(
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES => false,
    \PDO::MYSQL_ATTR_FOUND_ROWS => true
);
$pdo = new \PDO($dsn, $username, $password, $opt);
