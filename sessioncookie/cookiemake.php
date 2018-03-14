<?
	setcookie("username", "charnchai", time()+60);
	setcookie("password", "12345", time()+60);
	echo "<a href=showcookie.php>คลิกที่นี่ เพื่อตรวจสอบค่า cookie</a>";
?>