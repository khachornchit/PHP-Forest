<?
	$handle = fopen("info.txt", "r");
	fseek($handle, 10);
	$content = fgets($handle,17);
	echo "อ่านข้อมูลจากไฟล์โดยเริ่มต้นอ่านจากตัวอักษรตัวที่ 10 คือ $content <br>";
	fclose($handle);
?>