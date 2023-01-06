<?php
session_start();
$dbHost = 'localhost:3307';
$dbName = 'tutorials';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>
