<?php
session_start();
require('connect.php');
header('Content-Type: text/html; charset= utf-8');
$inpLogin = $_POST["name"];
$inpPass = $_POST["Password"];
$login="123";
$password="123";
$dbh = Connection::getInstance()->connect();

if (($inpLogin == $login) && ($inpPass == $password)) {
session_start();
$_SESSION[auth] = ok;
$_SESSION[user] = $login;
header("Location: stas.php");
} else { 
		header("location: enter.php");	
}
	
?>
							