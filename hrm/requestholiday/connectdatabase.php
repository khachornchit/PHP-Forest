<?php
include 'createdatabase.php';
$db = new DbHrm();

if ($db->Result) {
	echo "Connected database successfully !" . "</br>";
}
?>