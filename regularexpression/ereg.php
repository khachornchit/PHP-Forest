<?
	function datecheck($date)
	{
		if (ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $date)) 
		{
   			echo "Valid date format: $date <br>";
		} 
		else
		{
   			echo "Invalid date format: $date <br>";
		}
	}

	$d1 = "2006-01-10";
	$d2 = "01-10-2006";
	$d3 = "2006:01:10";
	datecheck($d1);
	datecheck($d2);
	datecheck($d3);
?>