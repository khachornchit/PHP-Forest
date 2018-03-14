<?php
include ('createdatabase.php');
class DbTable_tbl_test extends DbHrm {
	public $FieldId;
	public $FieldAccountId;
	public $FieldCreatedDate;
	public $FieldCount;
	public $Id;
	public $AccountId;
	public $CreatedDate;
	public $Count;
	protected function CreateTable() {
		parent::CreateTable ();
		$this->DbTable = "tbl_test";
		$this->FieldAccountId = "id";
		$this->FieldAccountId = "accountid";
		$this->FieldCreatedDate = "createddate";
		$this->FieldCount = "count";
		$sql = "CREATE TABLE IF NOT EXISTS " . $this->DbTable . "(id INT NOT NULL AUTO_INCREMENT, accountid VARCHAR(50) NOT NULL, createddate DATE, count INT,note VARCHAR(255), Primary Key (id));";
		$result = $this->Query ( $sql );			
		return $this->OpenDb();;
	}
	function Insert() {
		parent::Insert ();
		$sql = "INSERT INTO $this->DbName.$this->DbTable ($this->FieldAccountId, $this->FieldCreatedDate, $this->FieldCount) VALUES ('$this->AccountId','$this->CreatedDate','$this->Count');";
		$result = $this->Query ( $sql );
		return $result;
	}
	function UpdateAll() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldAccountId=$this->AccountId,$this->FieldCreatedDate=$this->CreatedDate,$this->FieldCount=$this->Count WHERE $this->FieldId=$this->Id";
		$result = $this->Query ( $sql );
		return $result;
	}
	function UpdateAccountId() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldAccountId=$this->AccountId WHERE $this->FieldId=$this->Id";
		$result = $this->Query ( $sql );
		return $result;
	}
	function UpdateCreatedDate() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldCreatedDate=$this->CreatedDate WHERE $this->FieldId=$this->Id";
		$result = $this->Query ( $sql );
		return $result;
	}
	function UpdateCount() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldCount=$this->Count WHERE $this->FieldAccountId='$this->AccountId'";
		$result = $this->Query ( $sql );
		return $result;
	}
	function Delete() {
		parent::Delete ();
		$sql = "DELETE FROM $this->DbName.$this->DbTable WHERE $this->FieldAccountId=$this->Id";
		$result = $this->Query ( $sql );
		return $result;
	}
}
?>