<?php
	include 'configuration.php';
	class DbHrm extends DbConfig {
		protected function DefineDbVariable(){
			$this->Host = "vmmysqlintha.coast.ebuero.de";
			$this->DbUserName = "sugarcrm_hr";
			$this->DbPassword = "gicaDee9";
			$this->DbName = "sugarcrm_hr";
		}
	}
?>