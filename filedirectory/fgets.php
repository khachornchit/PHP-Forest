<?
	$handle = fopen("info.txt", "r");
	if ($handle) 
	{
		while (!feof($handle)) 
		{
       			$buffer = fgets($handle, 10);
	       		echo "$buffer <br>";
		}
   		fclose($handle);
	}
?> 