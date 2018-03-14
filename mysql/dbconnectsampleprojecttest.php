<?php
	include 'dbsampleprojecttest.php';
	$db = new DbSampleProjectTest();
	
	if ($db->Result)
	{
		echo "Connected successfully <br>";
		echo "Connection number =".$db->Link;
	}
?>