<?php 

$dbServerName = "localhost";
$dbUsername = "tohru";
$dbPassword = "Patohru@NZKVPS_CL2";
$dbName = "loginSystem";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}