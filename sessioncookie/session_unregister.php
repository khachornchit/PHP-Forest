<?
	session_start();
	echo "ยกเลิกการลงทะเบียนตัวแปร \$name <p>";
	session_unregister("name");
	echo "<a href=session_register2.php>คลิกที่นี่ไปยังไฟล์ที่ 2</a>";
?>