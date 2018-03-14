<?
	$handle = fopen("info.txt", "r");
	$content = fgets($handle,10);
	echo "อ่านข้อมูลจากไฟล์ครั้งที่ 1 $content <br>";
	
	$content = fgets($handle,10);
	echo "อ่านข้อมูลจากไฟล์ครั้งที่ 2 $content <br>";	

	$content = fgets($handle,10);
	echo "อ่านข้อมูลจากไฟล์ครั้งที่ 3 $content <br>";
	fclose($handle);
?>