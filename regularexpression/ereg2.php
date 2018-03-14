<?
	function Emailcheck($Email)
	{
		if (ereg ("^[^\.\$_\'\"<>].+[^\.\$_\'\"|[:space:]<>]@[^\.\$_\'\"|[:space:]<>].+\..+[^\.\$_\'\"<>]$", $Email)) 
		{
   			echo "Valid E-mail format: $Email <br>";
		} 
		else
		{
   			echo "Invalid E-mail format: $Email <br>";
		}
	}

	$mail1 = "mymail@localhost.com";
	$mail2 = "mymail$@localhost.com";
	$mail3 = "mymail@ localhost.com";
	$mail4 = "mymail@localhost";
	$mail5 = "mymail@localhost._";
	Emailcheck($mail1);
	Emailcheck($mail2);
	Emailcheck($mail3);
	Emailcheck($mail4);
	Emailcheck($mail5);
?>