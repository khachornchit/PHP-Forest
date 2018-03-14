<?php
	$price1 = 12000;
	$price2 = 7000;
	$discount = 0;
	If ($price1 >= 10000) 
	{
		$discount = $price1*0.05;
	}
	Else
	{
		$discount = $price1*0.03;
	}
	$netprice = $price1 - $discount;
	echo "Product 1 price = $price1 Baht<br>";
	echo "Discount = $discount Baht<br>";
	echo "Net price = $netprice <br>";
	echo "**************************************** <br>";

	$discount = 0;
	If ($price2 >= 10000) 
	{
		$discount = $price2*0.05;
	}
	Else
	{
		$discount = $price2*0.03;
	}
	$netprice = $price2 - $discount;
	echo "Product 2 price = $price2 Baht<br>";
	echo "Discount = $discount Baht<br>";
	echo "Net price = $netprice <br>";	
?>