<?php
	$a = 10;
	$b = 3;
	$c = 10;
	$equal = $a == $b;
	$not_equal = $a != $b;
	$less_than = $a < $b;
	$greater_than = $a > $b;
	$less_than_or_equal = $a <= $c;
	$greater_than_or_equal = $a >= $c;
	echo "$a == $b is $equal <br>";
	echo "$a != $b is $not_equal <br>";
	echo "$a < $b  is $less_than <br>";
	echo "$a > $b  is $greater_than <br>";	
	echo "$a <= $c is $less_than_or_equal <br>";
	echo "$a >= $c is $greater_than_or_equal <br>";
?>