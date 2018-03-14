<?php
	$link = mysql_connect("localhost", "root", "1234");
	$sql = "use testdb";
	$result = mysql_query($sql);
	$sql = "update testtable set name='$Ename', age='$EAge' where id='$Empno' ";
	$result = mysql_query($sql);
	if ($result)
	{
		echo "Update data successfully.<br>";
		mysql_close($link);
	}
	else
	{
		echo "Cannot update data !<br>";
	}
		echo "<a href=updateload.php>Goto update data</a><br>";
		echo "<a href=Mainfunction.html>Goto control panel</a><br>";
?>