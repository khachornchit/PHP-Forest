<?
	function show($message, $size)
	{
		echo "<H".$size.">";
		echo "$message <br>";
		echo "</H".$size.">";
	}
	
	show("Hello How are you?",1);
	show("Good Bye",4);	
?>