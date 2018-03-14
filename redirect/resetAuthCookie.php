<?php
include 'sitefunctions.php';
include 'geturl.php';
$cookie_name = 'webdevelopment';
$cookie_value = '';
if (isset ( $_COOKIE [$cookie_name] )) {
	setcookie ( $cookie_name, $cookie_value, time () - 32536000);
}

redirectto ( 301, getUrl () );
?>