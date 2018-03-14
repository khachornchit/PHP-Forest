<?php

$cookie_name = 'pontikis_net_php_cookie';
$cookie_value = 'test_cookie_set_with_php';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 86400 = 1 day
?>