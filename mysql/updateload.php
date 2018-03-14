<?php
	if ($send == null) {
?>
	<form method="post" action="<? echo $PHP_SELF ?>">
		Edit data<p>
		Key employee Id to edit<p>
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
	$sql = "select * from testtable where id = '$id_val';";
	$result = mysql_query($sql);
	echo "<form action=update.php?Empno=$id_val method=post>";
	$dbarr = mysql_fetch_array($result);
	echo "Employee Id : ".$id_val."<br>";
	echo "Employee Name : ";
	echo "<input type=text name=Ename value=$dbarr[name]> <br>";
	echo "Age : ";
	echo "<input type=text name=EAge value=$dbarr[age]> <p>";
	echo "<input type=submit name=Submit value=Submit>";
	echo "<input type=reset name=reset value=Cancel>";
	echo "</form>";
	mysql_close($link);
}
?>