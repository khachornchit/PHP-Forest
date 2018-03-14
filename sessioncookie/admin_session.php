<?
	session_start();
	if (($u=="root") && ($p=="123"))
	{
		echo "ยินดีต้อนรับเข้าสู่หน้าจอของผู้ดูแลระบบ<p>";
		echo "<a href=insert.php>เพิ่มข้อมูล</a><p>";
		echo "<a href=delete.php>ลบข้อมูล</a><p>";
		echo "<a href=updateload.php>แก้ไขข้อมูล</a><p>";
		echo "<a href=select.php>จัดทำรายงาน</a><p>";
	}
	else
	{
		echo 'Invalid to entry the Admin page';
	}
?>