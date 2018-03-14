<?php
	include 'dbconfigsampleprojects.php';
	$db = new DbConfig();
	
	if ($db->Result) 
	{
  		echo "Connected successfully <br>";
		echo "Connection number =".$db->Link;
	}
?>