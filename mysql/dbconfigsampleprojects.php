<?php
class DbConfig {
	protected $Host;
	protected $DbUsername;
	protected $DbPassword;
	protected $DbName;
	protected $DbTable;
	public $Link;
	public $Result;
	function __construct() {
		$this->DefineDbVariable();		
		if ($this->OpenDb ()) {
			if ($this->CreateDatabase()) {
				$this->CreateTable();
			}
		}
	}
	function __destruct() {
		$this->CloseDb();
	}
	protected function DefineDbVariable(){
	}
	function OpenDb() {
		$this->Host = "192.168.23.186";
		$this->DbUserName = "sampleprojects";
		$this->DbPassword = "sample1234";
		$this->Link = mysql_connect ( $this->Host, $this->DbUserName, $this->DbPassword );
		$this->Result = $this->Link;
		
		if (! $this->Result) {
			die ( 'Could not connect database: ' . mysql_error () );
		}
		return $this->Link;
	}
	function CloseDb() {
		mysql_close ($this->Link);
	}
	function CreateDatabase() {
		$sql = "CREATE DATABASE IF NOT EXISTS ".$this->DbName.";";
		$result = $this->Query($sql);
		if ($result)
		{
			echo "Create data successfully.<br>";
		}
		else
		{
			echo "Cannot create data !<br>";
		}
		return $result;
	}
	protected function CreateTable() {
		$sql = "USE ".$this->DbName.";";
		$result = $this->Query($sql);	
	}
	function Insert() {
		$sql = "USE ".$this->DbName.";";
		$result = $this->Query($sql);	
	}
	function UpdateAll() {
		$sql = "USE ".$this->DbName.";";
		$result = $this->Query($sql);	
	}
	function Delete() {
		$sql = "USE ".$this->DbName.";";
		$result = $this->Query($sql);	
	}
	function Select() {
		$sql = "USE ".$this->DbName.";";
		$result = $this->Query($sql);	
	}
	function Query($sql) {
		return mysql_query($sql);
	}
}
?>