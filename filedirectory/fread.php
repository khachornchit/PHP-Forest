<?
  	$handle = fopen('c:/windows/win.ini', 'r');
	$content = fread($handle, 50);
	echo "$content";
	fclose($handle);
?>