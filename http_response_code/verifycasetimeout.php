<?php
include 'responsecodeconfig.php';
class VerifyCaseTimeOut extends ResponseCodeConfig {
	private  function ReopenCaseToPrevious() {
		$this->ImplementCode(401);
	}	
}
?>
