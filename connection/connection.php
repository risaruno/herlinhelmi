<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "herlinhelmi";

$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
    die("Connection failed!");
}