<?php
	$price1 = 7000;
	$price2 = 3000;
	$discount = 0;
	If ($price1 >= 5000) 
	{
		$discount = $price1*0.03;
	}
	$netprice = $price1 - $discount;
	echo "Product-1 price = $price1 Baht<br>";
	echo "Discount = $discount Baht<br>";
	echo "Net price = $netprice <br>";
	echo "**************************************** <br>";

	$discount = 0;
	If ($price2 >= 5000) 
	{
		$discount = $price2*0.03;
	}
	$netprice = $price2 - $discount;
	echo "Product-2 price = $price2 Baht<br>";
	echo "Discount = $discount Baht<br>";
	echo "Net price = $netprice <br>";	
?>