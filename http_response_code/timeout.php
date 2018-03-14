<?php
include 'responsecodeconfig.php';
class ResponseCodeTimeOut extends ResponseCodeConfig {
	public function DefineTimeOut() {
		$this->ImplementCode(401);
		for ($i=0; $i<10; $i++) {		}
		
		$this->ImplementCode(402);
		for (;;) {}
		
		$this->ImplementCode(200);
	}
}
$res = new ResponseCodeTimeOut();
$res->DefineTimeOut();
?>