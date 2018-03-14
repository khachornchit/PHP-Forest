<?
	$content = fopen("info.txt", "r");
	echo "ข้อมูลทั้งหมดของไฟล์ info.txt คือ <hr> ";
	fpassthru($content);
?> 