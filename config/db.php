<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "pancillo";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("conexion fallida: %s\n". $conn -> error);
?>
