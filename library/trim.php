<?
	$text = "\t\tThese are a few words :) ... ";
	$text1 = trim($text); 
	$text2 = ltrim($text);
	$text3 = rtrim($text);
	echo "สตริงต้นฉบับ $text มีความยาว ".strlen($text)."<br>";
	echo "หลังใช้ trim() ได้เป็น  $text1 มีความยาว ".strlen($text1)."<br>";
	echo "หลังใช้ltrim() ได้เป็น  $text2 มีความยาว ".strlen($text2)."<br>";
	echo "หลังใช้ rtrim() ได้เป็น  $text3 มีความยาว ".strlen($text3)."<br>";
?>