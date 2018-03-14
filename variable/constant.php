<?php
	define("VAT", 0.07);
	$price = 500;
	$tax = $price*VAT;
	echo "การใช้ตัวแปร constant define(\"VAT\",0.07) : \$tax = \$price*VAT >> $tax";
?>