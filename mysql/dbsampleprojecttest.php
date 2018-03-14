<?php
	include 'dbconfigsampleprojects.php';
	class DbSampleProjectTest extends DbConfig {
		protected function DefineDbVariable(){
			$this->DbName = "SampleProjects";
		}
	}
?>