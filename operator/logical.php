<?php
	$a = 10;
	$b = 3;
	$c = 5;
	$d = 7;
	$logic_and = ($a > $b) && ($c > $d);
 	$logic_or = ($a > $b) || ($c > $d);
	$logic_not1 = !(($a > $b) && ($c > $d));
	$logic_not2 = !(($a > $b) || ($c > $d));
	$logic_xor = ($a > $b) ^ ($c > $d);
	echo "($a > $b) && ($c > $d) is logic $logic_and <br>";
	echo "($a > $b) || ($c > $d) is logic $logic_or <br>";
	echo "!(($a > $b) && ($c > $d)) is logic $logic_not1 <br>";
	echo "!(($a > $b) || ($c > $d)) is logic $logic_not2 <br>";
	echo "($a > $b) ^ ($c > $d) is logic $logic_xor <br>";
?>