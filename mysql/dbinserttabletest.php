<?php
	include 'dbtabletest.php';
	$db = new DbTableTest();
	
	$id= (int)$_GET['id'];
	$name = '111';
	$age = '18';
	
	if($db->Insert($id, $name, $age)) {
		echo "Insert data successfull </br>";
		echo "ID   : ".$id."</br>";
		echo "Name : ".$name."</br>";
		echo "Age  : ".$age."</br>";
	}
?>