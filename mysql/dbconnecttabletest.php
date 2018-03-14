<?php
	include 'dbtabletest.php';
	$db = new DbTableTest();
	
	if ($db->Result)
	{
		echo "Connected successfully <br>";
		echo "Connection number =".$db->Link;
	}
?>