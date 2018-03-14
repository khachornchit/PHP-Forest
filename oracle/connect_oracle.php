<?
	$username = "scott";
	$password = "ORACLE";
	$dbname = "chanchai";
	$conn = oci_connect($username,$password,$dbname);
	if ($conn)
	{
		echo "Connect to the Oracle Database Sucessfully <br>";
		echo "Connection number = $conn";
		oci_close($conn);
	}
	else
	{
		echo "Can not connect to the Oracle Database, Please Contact the Oracle DBA";
	}
?>