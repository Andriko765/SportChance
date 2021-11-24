<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "prices";
$db_users = "fiteess";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$log = mysqli_connect($sname, $unmae, $password, $db_users);

if (!$conn) {
	echo "Connection failed!";
}


if (!$log) {
	echo "Connection failed!";
}