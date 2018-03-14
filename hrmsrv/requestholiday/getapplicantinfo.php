<?php
include 'tbl_applicants.php';
$db = new DbTableApplicants();

if ($db->Result) {
	if ($_GET) {
		$id=$_GET['applicantid'];	
		$db->QueryApplicantInfo($id);
	}else 
	{
		echo "Please enter require id ! Thanks.";
	}
}
?>