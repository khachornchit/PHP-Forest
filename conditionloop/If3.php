<?php
	$price1 = 7000;
	$price2 = 12000;
	$price3 = 25000;
	$price4 = 4500;

	If (($price1 >= 5000) && ($price1 <= 10000))
	{
		$discount = $price1*0.03;
	}
	ElseIf (($price1 >= 10001) && ($price1 <= 20000))
	{
		$discount = $price1*0.05;
	}
	ElseIf ($price1 >= 20001)
	{
		$discount = $price1*0.1;
	}
	Else
	{
		$discount = 0;	
	}
	$netprice = $price1 - $discount;
	echo "�Թ��ҷ�� 1 �Ҥ� $price1 �ҷ<br>";
	echo "���Ѻ��ǹŴ $discount �ҷ<br>";
	echo "���Щй�� �Ҥ��Թ����ط����ҡѺ $netprice <br>";
	echo "**************************************** <br>";

	If (($price2 >= 5000) && ($price2 <= 10000))
	{
		$discount = $price2*0.03;
	}
	ElseIf (($price2 >= 10001) && ($price2 <= 20000))
	{
		$discount = $price2*0.05;
	}
	ElseIf ($price2 >= 20001)
	{
		$discount = $price2*0.1;
	}
	Else
	{
		$discount = 0;	
	}
	$netprice = $price2 - $discount;
	echo "�Թ��ҷ�� 2 �Ҥ� $price2 �ҷ<br>";
	echo "���Ѻ��ǹŴ $discount �ҷ<br>";
	echo "���Щй�� �Ҥ��Թ����ط����ҡѺ $netprice <br>";
	echo "**************************************** <br>";

	If (($price3 >= 5000) && ($price3 <= 10000))
	{
		$discount = $price3*0.03;
	}
	ElseIf (($price3 >= 10001) && ($price3 <= 20000))
	{
		$discount = $price3*0.05;
	}
	ElseIf ($price3 >= 20001)
	{
		$discount = $price3*0.1;
	}
	Else
	{
		$discount = 0;	
	}
	$netprice = $price3 - $discount;
	echo "�Թ��ҷ�� 3 �Ҥ� $price3 �ҷ<br>";
	echo "���Ѻ��ǹŴ $discount �ҷ<br>";
	echo "���Щй�� �Ҥ��Թ����ط����ҡѺ $netprice <br>";
	echo "**************************************** <br>";

	If (($price4 >= 5000) && ($price4 <= 10000))
	{
		$discount = $price4*0.03;
	}
	ElseIf (($price4 >= 10001) && ($price4 <= 20000))
	{
		$discount = $price4*0.05;
	}
	ElseIf ($price4 >= 20001)
	{
		$discount = $price4*0.1;
	}
	Else
	{
		$discount = 0;	
	}
	$netprice = $price4 - $discount;
	echo "�Թ��ҷ�� 4 �Ҥ� $price4 �ҷ<br>";
	echo "���Ѻ��ǹŴ $discount �ҷ<br>";
	echo "���Щй�� �Ҥ��Թ����ط����ҡѺ $netprice <br>";
	echo "**************************************** <br>";
?>