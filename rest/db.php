<?php
function getDB() {
	$dbhost="192.168.23.186";
	$dbuser="automationtest";
	$dbpass="automationtest1234";
	$dbname="automationtest";
	$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbConnection;
}
?>