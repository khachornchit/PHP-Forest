<?php
include ('timezone.php');
class TimeCest extends TimeZone {
	protected function DefineTimeZone() {
		$this->TimeZone = 'Europe/Berlin';
	}
}

$time = new TimeCest ();
?>