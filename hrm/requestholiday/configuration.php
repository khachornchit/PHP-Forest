<?php
class DbConfig {
	protected $Host;
	protected $DbUserName;
	protected $DbPassword;
	protected $DbName;
	protected $DbTable;
	protected $Link;
	public $Result;
	function __construct() {
		$this->DefineDbVariable ();
		if ($this->OpenDb ()) {
			if ($this->CreateDatabase ()) {
				$this->CreateTable ();
			}
		}
	}
	function __destruct() {
		$this->CloseDb ();
	}
	protected function DefineDbVariable() {
	}
	protected function OpenDb() {
		$this->Link = mysql_connect ( $this->Host, $this->DbUserName, $this->DbPassword );
		$this->Result = $this->Link;
		
		if (! $this->Result) {
			die ( 'Could not connect database: ' . mysql_error () );
		}
		return $this->Link;
	}
	protected function CloseDb() {
		mysql_close ( $this->Link );
	}
	protected function CreateDatabase() {
		$sql = "CREATE DATABASE IF NOT EXISTS " . $this->DbName . ";";
		$result = $this->Query ( $sql );
		return $result;
	}
	protected function CreateTable() {
		$sql = "USE " . $this->DbName . ";";
		$result = $this->Query ( $sql );
	}
	function Insert() {
		$sql = "USE " . $this->DbName . ";";
		$result = $this->Query ( $sql );
	}
	function UpdateAll() {
		$sql = "USE " . $this->DbName . ";";
		$result = $this->Query ( $sql );
	}
	function Delete() {
		$sql = "USE " . $this->DbName . ";";
		$result = $this->Query ( $sql );
	}
	function Select() {
		$sql = "USE " . $this->DbName . ";";
		$result = $this->Query ( $sql );
	}
	function Query($sql) {
		return mysql_query ( $sql );
	}
}
?>