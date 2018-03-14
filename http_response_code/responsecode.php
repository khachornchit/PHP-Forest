<?php
include 'responsecodeconfig.php';
class ResponseCodeTest extends ResponseCodeConfig {
	public function QueryResponseCode() {
		if ($_GET) {
			$this->ImplementCodeJson ( $_GET ["code"] );
		} else {
			$this->ImplementCodeJson ( $this->code );
		}
	}
}
$res = new ResponseCodeTest ();
$res->QueryResponseCode ();
?>