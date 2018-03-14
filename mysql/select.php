<?php
	$link = mysql_connect("localhost", "root", "1234");
	$sql = "use testdb";
	$result = mysql_query($sql);
	$sql = "select * from testtable;";
	$result = mysql_query($sql);
	while ($dbarr = mysql_fetch_array($result))
	{
		echo "Employee Id : ".$dbarr['id']." Name-Surename: ".$dbarr['name']." Age: ".$dbarr['age']."<p>";
	}
	echo "<a href=Mainfunction.html>Main Menu</a>";
	mysql_close($link);
?>