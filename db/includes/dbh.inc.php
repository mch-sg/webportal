<?php

$serverName = "127.0.0.1:3306";
$dBUsername = "u463909974_exam";
$dBPassword = "Ekg123321";
$dBName = "u463909974_portal";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}



/*
old

$serverName = "127.0.0.1:3306";
$dBUsername = "u463909974_login";
$dBPassword = "Jsu78khv";
$dBName = "u463909974_demo";

*/
