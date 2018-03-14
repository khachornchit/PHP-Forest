<?php
include 'sitefunctions.php';
include 'geturl.php';
$cookie_name = 'webdevelopment';
$cookie_value = '';
if (isset ( $_GET ['auth'] )) {
	unset ( $_COOKIE [$cookie_name] );
	$cookie_value = htmlentities ( $_GET ['auth'] );
	setcookie ( $cookie_name, $cookie_value, time () + 31536000);
	redirectto ( 301, getUrl () );
} else {
	echo "Please enter authorization. Thanks.";
}
?>