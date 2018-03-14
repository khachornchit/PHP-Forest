<?php
	if ($send == null) {
?>
	<form method="post" action="<? echo $PHP_SELF ?>">
	Delete Data<p>
	Please key employee Id which to delete.<p>
	Employee Id <input type="text" name="id_val"><p>
	<input type="submit" name="send" value="Submit">
     	<input type="reset" name="cancel" value="Reset">
	</form>
<?php
}
else 
{
	$link = mysql_connect("localhost", "root", "1234");
	$sql = "use testdb";
	$result = mysql_query($sql);
	$sql = "Delete From testtable where id = '$id_val' ";
	$result = mysql_query($sql);
	if ($result)
	{
		echo "Delete data successfully.<br>";
		mysql_close($link);
	}
	else
	{
		echo "Cannot delete data !<br>";
	}
		echo "<a href=delete.php>Goto delete page</a><br>";
		echo "<a href=Mainfunction.html>Goto control panel</a><br>";
}
?>