<?php
/*
$cookie_name = 'pontikis_net_php_cookie';
unset ( $_COOKIE [$cookie_name] );
// empty value and expiration one hour before
$res = setcookie ( $cookie_name, '', time () - 3600 );
*/

// function update

$cookie_name = 'pontikis_net_php_cookie';
$cookie_value = '';
//setcookie ( $cookie_name, $cookie_value, time () - (86400 * 30), '/' ); // 86400 = 1 day
setcookie ( $cookie_name, $cookie_value, time () - 3600, '/' );
?>