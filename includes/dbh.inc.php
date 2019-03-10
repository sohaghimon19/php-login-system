<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'loginsystem';

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
	die("connection_failed: " . mysqli_connect_error());
}