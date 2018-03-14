<?
	session_start();
	echo "ยกเลิกการลงทะเบียนตัวแปรทั้งหมดของ session <p>";
	session_destroy();
	echo "<a href=session_register2.php>คลิกที่นี่ไปยังไฟล์ที่ 2</a>";
?>