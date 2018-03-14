<?
	setcookie("user");
	setcookie("pass");
//	setcookie("user","111",time()+3600);
//	setcookie("pass", "111",time()+3600);
	//echo "$user <br>";
	//echo "$pass";
	echo "ออกจากระบบเรียบร้อยแล้ว";
	require("login_cookie.html");
?>