<?
	$username = "scott";
	$password = "ORACLE";
	$dbname = "chanchai";
	$conn = oci_connect($username,$password,$dbname);
	$query = oci_parse($conn,"Update Dept Set DNAME='IT', LOC='UBON' Where DEPTNO=50");
	$result = oci_execute($query);
	if ($result)
	{
		echo "การแก้ไขข้อมูลลงในฐานข้อมูลประสบความสำเร็จ<br>";
		oci_close($conn);
	}
	else
	{
		echo "ไม่สามารถแก้ไขข้อมูลใหม่ลงในฐานข้อมูลได้<br>";
	}
?>