<?
	function asterisk($no)
	{
		$sign = "";
		for($count=1; $count<=$no; $count++)
		{
			$sign = $sign."*";	
		}
		echo "$sign <br>";
	}
	
	asterisk(30);
	echo "My name is Charnchai <br>"	;
	echo "My surname is Supaartagorn <br>";
	echo "Hello everybody <br>";
	asterisk(20);
?>