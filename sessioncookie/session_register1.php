<?
	ob_start();
	echo "ไฟล์ที่ 1 (ลงทะเบียนตัวแปร \$name และ \$surname) <p>";
	$name = "ชาญชัย";
	$surname = "ศุภอรรถกร";
	session_register("name","surname");
	echo "<a href=session_register2.php>คลิกที่นี่ไปยังไฟล์ที่ 2</a>";	
	ob_end_flush();
?>