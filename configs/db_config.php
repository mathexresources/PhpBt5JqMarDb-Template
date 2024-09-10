<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'test';
$db_port = '3306';
$db_charset = 'utf8mb4';

$db = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);
if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}
$db->set_charset($db_charset);
