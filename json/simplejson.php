<?php
	include('../includes/json.php');
	header("Content-type: text/xml;charset=utf-8");
	
	function sendResponse($type,$cause) {
	
		$response = '<?xml version="1.0" encoding="utf-8"?>';
		$response .= '<response><status>'.$type.'</status>';
	
		$response = $response.'<remarks>'.$cause.'</remarks></response>';
		return $response;
	}

	$Json = new json('var', 'name'); 
	$Json = new json('callback', 'name');
	$Json = new json();
	
	// Build data
	$object = new stdClass();
	$object->test = 'OK';
	$arraytest = array('1','2','3');
	$jsonOnly = '{"Hello" : "darling"}';
	
	// Add some content
	$Json->add('width', '565px');
	$Json->add('You are logged IN');
	$Json->add('An_Object', $object);
	$Json->add("An_Array",$arraytest);
	$Json->add("A_Json",$jsonOnly);
	
	$Json->send();
?>