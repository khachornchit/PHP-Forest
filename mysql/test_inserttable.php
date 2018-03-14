<?php
	include 'dbtabletest.php';
	$db = new DbTableTest();
	
	$id='2';
	$name='111';
	$age='18';
	
	$db->Insert($id, $name, $age);
?>
