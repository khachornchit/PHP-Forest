<?php
header ( 'Cache-Control: no-cache, must-revalidate' );
header ( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );
header ( "Content-type: application/json;charset=utf-8" );
include ('dbconfiguration.php');
class DbTableNonUserWorkflow extends DbConfig {
	public $FieldId;
	public $FieldAccountId;
	public $FieldCreatedDate;
	public $FieldCount;
	public $FieldNote;
	public $FieldResult;
	public $ValueId;
	public $ValueAccountId;
	public $ValueCreatedDate;
	public $ValueCount;
	public $ValueNote;
	public $ValueResult;
	protected function DefineDbVariable() {
		$this->Host = "192.168.23.186";
		$this->DbUserName = "sampleprojects";
		$this->DbPassword = "sample1234";
		$this->DbName = "automationtest";
		$this->DbTable = "nonuserworkflow_coast";
	}
	protected function CreateTable() {
		parent::CreateTable ();
		$this->FieldAccountId = "id";
		$this->FieldAccountId = "accountid";
		$this->FieldCreatedDate = "createddate";
		$this->FieldCount = "count";
		$this->FieldNote = "note";
		$this->FieldResult = "result";
		$sql = "CREATE TABLE IF NOT EXISTS " . $this->DbTable . "(id INT NOT NULL AUTO_INCREMENT, accountid VARCHAR(50) NOT NULL, createddate DATE, count INT, result TINYINT, note VARCHAR(255),Primary Key (id));";
		$result = $this->Query ( $sql );
		return $result;
	}
	public function Insert() {
		parent::Insert ();
		$sql = "INSERT INTO `$this->DbName`.`$this->DbTable` (`$this->FieldAccountId`,`$this->FieldCreatedDate`,`$this->FieldCount`) VALUES ('$this->ValueAccountId','$this->ValueCreatedDate','$this->ValueCount');";
		$result = $this->Query ( $sql );
		
		if ($result) {
			$record = array (
					"$this->FieldAccountId" => "$this->ValueAccountId",
					"$this->FieldCreatedDate" => "$this->ValueCreatedDate",
					"$this->FieldCount" => "$this->ValueCount" 
			);
			echo json_encode ( $record );
		}
		
		return $result;
	}
	public function UpdateAll() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldAccountId=$this->ValueAccountId,$this->FieldCreatedDate=$this->ValueCreatedDate,$this->FieldCount=$this->ValueCount WHERE $this->FieldId=$this->ValueId";
		$result = $this->Query ( $sql );
		return $result;
	}
	public function UpdateAccountId() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldAccountId=$this->ValueAccountId WHERE $this->FieldId=$this->ValueId";
		$result = $this->Query ( $sql );
		return $result;
	}
	public function UpdateCreatedDate() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldCreatedDate=$this->ValueCreatedDate WHERE $this->FieldId=$this->ValueId";
		$result = $this->Query ( $sql );
		return $result;
	}
	public function UpdateCounts() {
		parent::UpdateAll ();
		$sql = "SELECT * FROM `$this->DbName`.`$this->DbTable`;";
		$result = mysql_query ( $sql );
		$records = array ();
		
		while ( $dbarr = mysql_fetch_array ( $result ) ) {
			$this->ValueAccountId = $dbarr ["$this->FieldAccountId"];
			$this->ValueCreatedDate = $dbarr ["$this->FieldCreatedDate"];
			$this->ValueCount = $dbarr ["$this->FieldCount"];
			$this->UpdateCount ();
			
			$record = array (
					"$this->FieldAccountId" => "$this->ValueAccountId",
					"$this->FieldCreatedDate" => "$this->ValueCreatedDate",
					"$this->FieldCount" => "$this->ValueCount" 
			);
			array_push ( $records, $record );
		}
		
		echo json_encode ( $records );
		return $result;
	}
	protected function UpdateCount() {
		$this->ValueCount = $this->ValueCount + 1;
		$sql = "UPDATE `$this->DbName`.`$this->DbTable` SET `count` = '$this->ValueCount' WHERE `accountid` = '$this->ValueAccountId';";
		$result = mysql_query ( $sql );
		return $this->ValueCount;
	}
	public function Delete() {
		parent::Delete ();
		$sql = "DELETE FROM $this->DbName.$this->DbTable WHERE $this->FieldAccountId=$this->ValueId";
		$result = $this->Query ( $sql );
		return $result;
	}
	public function SelectAccount7() {
		$sql = "SELECT * FROM `$this->DbName`.`$this->DbTable` WHERE $this->FieldCount=7;";
		$result = mysql_query ( $sql );
		$records = array ();
		
		while ( $dbarr = mysql_fetch_array ( $result ) ) {
			$this->ValueAccountId = $dbarr ["$this->FieldAccountId"];
			$this->ValueCreatedDate = $dbarr ["$this->FieldCreatedDate"];
			$this->ValueCount = $dbarr ["$this->FieldCount"];
			$record = array (
					"$this->FieldAccountId" => "$this->ValueAccountId",
					"$this->FieldCreatedDate" => "$this->ValueCreatedDate",
					"$this->FieldCount" => "$this->ValueCount" 
			);
			array_push ( $records, $record );
		}
		
		echo json_encode ( $records );
		return $result;
	}
	public function SelectAccount8() {
		$sql = "SELECT * FROM `$this->DbName`.`$this->DbTable` WHERE $this->FieldCount=8;";
		$result = mysql_query ( $sql );
		$records = array ();
		
		while ( $dbarr = mysql_fetch_array ( $result ) ) {
			$this->ValueAccountId = $dbarr ["$this->FieldAccountId"];
			$this->ValueCreatedDate = $dbarr ["$this->FieldCreatedDate"];
			$this->ValueCount = $dbarr ["$this->FieldCount"];
			$record = array (
					"$this->FieldAccountId" => "$this->ValueAccountId",
					"$this->FieldCreatedDate" => "$this->ValueCreatedDate",
					"$this->FieldCount" => "$this->ValueCount" 
			);
			array_push ( $records, $record );
		}
		
		echo json_encode ( $records );
		return $result;
	}
	public function SelectAccountLessThan7() {
		$sql = "SELECT * FROM `$this->DbName`.`$this->DbTable` WHERE $this->FieldCount<7;";
		$result = mysql_query ( $sql );
		$records = array ();
	
		while ( $dbarr = mysql_fetch_array ( $result ) ) {
			$this->ValueAccountId = $dbarr ["$this->FieldAccountId"];
			$this->ValueCreatedDate = $dbarr ["$this->FieldCreatedDate"];
			$this->ValueCount = $dbarr ["$this->FieldCount"];
			$record = array (
					"$this->FieldAccountId" => "$this->ValueAccountId",
					"$this->FieldCreatedDate" => "$this->ValueCreatedDate",
					"$this->FieldCount" => "$this->ValueCount"
			);
			array_push ( $records, $record );
		}
	
		echo json_encode ( $records );
		return $result;
	}
}
?>