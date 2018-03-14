<?php
	if ($send == null) {
?>
	<form method="post" action="<? echo $PHP_SELF ?>">
	Add data<p>
	   	Employee Id <input type="text" name="id"><p>
		Employee Name <input type="text" name="name"><p>
	  	Age <input type="text" name="age"><p>
	     	<input type="submit" name="send" value="Submit">
	     	<input type="reset" name="cancel" value="Reset">
	</form>
<?php
}
else {
	$link = mysql_connect("localhost", "root", "1234");
	$sql = "use testdb";
	$result = mysql_query($sql);
	$sql = "Insert into testtable values('$id', '$name', $age);";
	$result = mysql_query($sql);
	if ($result)
	{
		echo "Add data successfully.<br>";
		mysql_close($link);
	}
	else
	{
		echo "Cannot adding data !<br>";
	}
	echo "<a href=insert.php>Goto add data</a><br>";
	echo "<a href=Mainfunction.html>Goto control panel</a><br>";
}
?>