<?
	$username = "scott";
	$password = "ORACLE";
	$dbname = "chanchai";
	$conn = oci_connect($username,$password,$dbname);
	$query = oci_parse($conn,"Delete Dept Where DEPTNO=50");
	$result = oci_execute($query);
	if ($result)
	{
		echo "การลบข้อมูลลงในฐานข้อมูลประสบความสำเร็จ<br>";
		oci_close($conn);
	}
	else
	{
		echo "ไม่สามารถลบข้อมูลออกจากฐานข้อมูลได้<br>";
	}
?>