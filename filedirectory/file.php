<?PHP
	$content = file("info.txt");
	for($i=0; $i<count($content); $i++)
	{
		echo "$content[$i] <br> ";
	}
?> 