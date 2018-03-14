<?php
	include '../includes/http_response_code.php';
	include('../includes/json.php');
	header("Content-type: text/xml;charset=utf-8");
	//http_response_code(302);
	
	$GLOBALS ['http_response_code'] = 302;

	$Json = new json();
	$Json->add("format", 'JSON');
	$Json->add("status", 'Live');
	
	echo $Json->send();
?>