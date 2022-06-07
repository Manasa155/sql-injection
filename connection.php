<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sql_injection";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>