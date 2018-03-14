<?php
	if(!$send) {
?>
	<form method="post" action="<? $PHP_SELF; ?>">
	<b>Please enter User name and Password</b><br>
	User name: <input type="text" name="user"><br>
	Password:  <input type="password" name="pass"><br>
	<input type="submit" value="OK" name="send">
	</form>
<?php
	}
	else	
	{
		echo "My User name is $user <br>";
		echo "My Password is $pass ";
	}
?>