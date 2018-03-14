<?php
$cookie_name = 'pontikis_net_php_cookie';
$cookie_value = 'update_cookie_updated_with_php';
setcookie ( $cookie_name, $cookie_value, time () + (86400 * 30), '/' ); // 86400 = 1 day
?>