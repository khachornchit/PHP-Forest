<?
	if (($username == "root") && ($password == "123"))
	{
		setcookie("user","$username",time()+3600);
		setcookie("pass", "$password",time()+3600);
		echo "<a href=admin_cookie.php>เข้าสู่ระบบ</a>";
	}
	else
	{
		echo "Error Login";
	}
?>