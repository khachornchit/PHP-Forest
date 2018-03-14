<?php
class TimeZone {
	protected $Json;
	protected $TimeZone;
	protected $Date;
	function __construct() {
		include ('../includes/json.php');
		header ( "Content-type: text/xml;charset=utf-8" );
		$this->DefineTimeZone();
		$this->Date = new DateTime ( "now", new DateTimeZone ( $this->TimeZone ) );
		$this->Json = new json ();
		$this->Now ();
	}
	private function Now() {
		$this->Json->add ( "datetime", $this->Date->format ( 'Y-m-d H:i:s' ) );
		$this->Json->add ( "daynow", $this->Date->format ( 'd' ) );
		$this->Json->add ( "monthnow", $this->Date->format ( 'm' ) );
		$this->Json->add ( "yearnow", $this->Date->format ( 'Y' ) );
		$this->Json->send ();
	}
	protected function DefineTimeZone() {		
	}
}
?>