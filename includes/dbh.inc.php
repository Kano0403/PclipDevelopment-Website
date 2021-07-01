<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "test-account-system";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Fail: " . mysqli_connect_error());
}