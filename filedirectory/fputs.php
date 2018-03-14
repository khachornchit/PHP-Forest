<?
	$content = fopen("test.txt", "a");
	fputs($content,"Add this to the file\n <br>");
	fclose($content);

	$content = fopen("test.txt", "r");
	fpassthru($content);
?> 