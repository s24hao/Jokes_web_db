<?php
$host = "localhost";
$username = "root";
$user_pass = "usbw";
$database_in_use = "jokes_collection";

$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
echo $mysqli->host_info . "<br>";
?>