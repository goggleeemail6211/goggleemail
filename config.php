<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'email_alert_demo';

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>