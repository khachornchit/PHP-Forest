<?php
header ( 'Cache-Control: no-cache, must-revalidate' );
header ( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );
header ( "Content-type: application/json;charset=utf-8" );
include 'dbtablenonuserworkflow.php';
$db = new DbTableNonUserWorkflow ();

if ($_GET) {
	$db->ValueAccountId = $_GET ['accountid'];
	$db->ValueCreatedDate = $_GET ['createddate'];
	$db->ValueCount = 1;
	$db->Insert ();
}
?>