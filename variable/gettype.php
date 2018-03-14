<?php
	$var = 15;
	echo "$var เป็นตัวแปรชนิด ".gettype($var)."<br>";

	$var = 3.48;
	echo "$var เป็นตัวแปรชนิด ".gettype($var)."<br>";

	$var = "Hello";
	echo "$var เป็นตัวแปรชนิด ".gettype($var)."<br>";

	$var = array(10,20);
	echo "\$var = array(10,20)"." เป็นตัวแปรชนิด ".gettype($var)."<br>";
?>