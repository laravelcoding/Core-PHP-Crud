<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$baseURL = $protocol . "://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
$hostname = rtrim($baseURL, '/');

$conn = mysqli_connect("localhost","root","","corephpcrud") or die("Connection Failed");

?>
