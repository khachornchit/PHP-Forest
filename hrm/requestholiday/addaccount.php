<?php
include '../../includes/http_response_code.php';
include '../../includes/json.php';
include 'tbl_test.php';
$db = new DbTableNonUserWorkflow ();
header("Content-type: text/xml;charset=utf-8");

if ($_GET) {
	$db->ValueAccountId =$_GET['accountid'];
	$db->ValueCreatedDate = $_GET ['createddate'];
	$db->ValueCount = $_GET ['count'];
	
	if ($db->Insert ()) {
		$Json = new json();
		$Json->add("accountid",$db->ValueAccountId);
		$Json->add("createddate",$db->ValueCreatedDate);
		$Json->add("count",$db->ValueCount);
		$Json->send();		
	}	
}else {
	//echo "Please enter value."."</br>";
}

?>