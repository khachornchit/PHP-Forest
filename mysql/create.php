<?php
	$link = mysql_connect("localhost", "root", "1234");
	$sql = "Create Database testdb;";
	$result = mysql_query($sql);
	if ($result)
	{
		echo "Create data successfully.<br>";
	}
	else
	{
		echo "Cannot create data !<br>";
	}
	$sql = "Use testdb;";
	$result = mysql_query($sql);
	$sql = "Create Table testtable(id Varchar(3), name Varchar(25), age Int(2), Primary Key (id));";
	$result = mysql_query($sql);
	if ($result)
	{
		echo "Create table successfully.";
	}
	else
	{
		echo "Cannot create table !";
	}
	mysql_Close($link);
?>