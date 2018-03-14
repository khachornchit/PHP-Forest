<?
	session_start();
	echo 'Welcome to page #2 <p>';

	echo $_SESSION['color'].'<br>';
	echo $_SESSION['animal'].'<br>';
	echo date('Y m d H:i:s', $_SESSION['time']);
?> 