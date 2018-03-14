<?
	ob_start();
	echo "ไฟล์ที่ 2 (เริ่มต้นการทำงานของ session) <p>";
	session_start();
	echo "ค่าของตัวแปร \$name คือ $name <br>";
	echo "ค่าของตัวแปร \$surname คือ $surname";
	ob_end_flush();
?>