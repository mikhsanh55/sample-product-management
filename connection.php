<?php
$server = '127.0.0.1';
$username = 'root';
$password = '';
$db = 'product_management';

$conn = mysqli_connect($server, $username, $password, $db);

if(!$conn) {
	die('Cannot connect to Database: ' . mysqli_connect_error());
}