<?
  	$handle1 = fopen('c:/windows/win.ini', 'r');
	$handle2 = fopen('c:/php/php.exe', 'r');
   	echo "หมายเลขอ้างอิงของการเปิดไฟล์ win.ini คือ $handle1 <br>";
	echo "หมายเลขอ้างอิงของการเปิดไฟล์ php.exe คือ $handle2 <br>";
	fclose($handle1);
	fclose($handle2);
?>