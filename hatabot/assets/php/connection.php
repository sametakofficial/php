<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$kullanici = "root";
$sifre = "";

try { 
	$connection = new PDO('mysql:host=localhost;dbname=hatabot;charset=utf8',"root","");	
} catch (Exception $e) {
	echo "Hata : " . $e->getMessage();	
}

?>