<?
	$str = "one|two|three|four";
	$a = explode('|', $str, 2);
	$b = explode('|', $str);
	for($i=0; $i<count($a); $i++)
	{	
		echo "$a[$i] ";
	}
	echo "<p>";
	for($j=0; $j<count($b); $j++)
	{	
		echo "$b[$j] ";
	}
?> 