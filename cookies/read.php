<?php
$cookie_name = 'pontikis_net_php_cookie';
if (! isset ( $_COOKIE [$cookie_name] )) {
	print 'Cookie with name "' . $cookie_name . '" does not exist...'."</br>";
} else {
	print 'Cookie with name "' . $cookie_name . '" value is: ' . $_COOKIE [$cookie_name]."</br>";
}

$cookie_name = 'webdevelopment';
if (! isset ( $_COOKIE [$cookie_name] )) {
	print 'Cookie with name "' . $cookie_name . '" does not exist...'."</br>";
} else {
	print 'Cookie with name "' . $cookie_name . '" value is: ' . $_COOKIE [$cookie_name]."</br>";
}
?>