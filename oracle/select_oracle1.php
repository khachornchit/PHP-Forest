<?
	$username = "scott";
	$password = "ORACLE";
	$dbname = "chanchai";
	$conn = oci_connect($username,$password,$dbname);
	$query = oci_parse($conn,'Select * from Dept');
	oci_execute($query);
	while($row = oci_fetch_array($query, OCI_ASSOC))
	{
		echo "รหัสแผนก: ".$row['DEPTNO'];
		echo " ชื่อแผนก: ".$row['DNAME'];
		echo " ที่่ตั้ง: ".$row['LOC']. "<br>";
	}
	oci_close($conn);
?>