<?php
date_default_timezone_set('Asia/Bangkok');
$host = "127.0.0.1";
$db = "fintech";
$username = "root";
$passwd = "";
$dns = "mysql:host=$host;dbname=$db";
$options = [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION];

$table = "employee";
try {
	$con = new PDO("mysql:host=$host",$username,$passwd,$options);
	$sql = "CREATE DATABASE fintech";
	$con->exec($sql);
}
catch(PDOEXCEPTION $e) {
	echo $e->getMessage();
}

$conn = new PDO("$dns;charset=utf8",$username,$passwd);