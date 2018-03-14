<?
	$str1 = "computer";
	$str2 = "command";
	$result = strcmp($str1,$str2);
	if ($result < 0)
	{
		echo "computer มีค่าน้อยกว่า command";	
	}
	elseif ($result > 0)
	{
		echo "computer มีค่ามากกว่า command";
	}
	else
	{
		echo "computer มีค่าเท่ากับ command";
	}
?>