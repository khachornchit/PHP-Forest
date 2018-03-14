<?
	$directory = "c:/myweb/html/book/ch09/";
	if (!mkdir("new_directory"))
	{
		echo "Can't created <br>";
	}
	else
	{
		echo "Directory created <br>";
	}

	if(!copy("info.txt",$directory."new_directory/info.txt"))
	{
		echo "Can't copy <br>";
	}
	else
	{
		echo "Copy file successfully <br>";
	}
?> 