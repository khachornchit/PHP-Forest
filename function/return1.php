<?
	function pass_and_return($round)
	{
		for($count=1; $count<=$round; $count++)
		{
			return $count;
		}
	}

	$size = pass_and_return(6);
	echo "<H".$size.">";
	echo "Hello <br>";
	echo "</H".$size.">";
?>