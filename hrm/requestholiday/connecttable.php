<?php
include 'tbl_test.php';
$db = new DbTable_tbl_test();

if ($db->Result) {
	echo "Connected table successfully !" . "</br>";
}
?>