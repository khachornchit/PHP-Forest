<?
	$handle = fopen("info.txt", "r");
	$data = fgets($handle, 3);
	echo "ตำแหน่งของไฟล์พอยเตอร์ตอนนี้อยู่ตำแหน่งที่ ".ftell($handle);
	fclose($handle);
?>