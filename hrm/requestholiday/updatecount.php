<?php
include '../../includes/http_response_code.php';
include '../../includes/json.php';
include 'tbl_test.php';
$db = new DbTableNonUserWorkflow ();
header("Content-type: text/xml;charset=utf-8");

if ($_GET) {
	$db->ValueAccountId =$_GET['accountid'];
	$db->ValueCount = $_GET ['count'];
	
	if ($db->UpdateCount()) {
		$Json = new json();
		$Json->add("accountid",$db->ValueAccountId);
		$Json->add("count",$db->ValueCount);
		$Json->send();
	}	
}else {
	//echo "Please enter value."."</br>";
}
?>