<?
	//echo "$u <br>";
	//echo "$p <br>";
	if (($u == "root") && ($p == "123"))
	{
		session_register("u");
		session_register("p");
		echo "<a href=admin_session.php>เข้าสู่ระบบ </a>";
	}
	else
	{
		echo "Error Login";
	}
?>