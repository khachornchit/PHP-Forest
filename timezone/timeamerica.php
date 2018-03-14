<?php
include ('timezone.php');
class TimeAmerica extends TimeZone {
	protected function DefineTimeZone() {
		$this->TimeZone = 'America/New_York';
	}
}

$time = new TimeAmerica ();
?>