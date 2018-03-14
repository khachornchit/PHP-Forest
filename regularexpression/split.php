<?
	$string = "aBBBaCCCADDDaEEEaGGGA";
	$chunks = spliti ("a", $string, 5);
	for($i=0;$i<count($chunks);$i++)
	{
		echo "$chunks[$i] <br>";
	}
?>