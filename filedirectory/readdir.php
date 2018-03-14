<?
	$Dir = opendir("c:");
	while($data = readdir($Dir))
	{
		echo "$data <br>";
	}
	closedir($Dir);
?> 