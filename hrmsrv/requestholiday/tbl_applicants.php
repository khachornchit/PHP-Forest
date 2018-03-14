<?php
include 'configuration.php';
class DbTableApplicants extends DbConfig {
	public $FieldId;
	public $FieldBeginOfWork;
	public $FieldInternalEmail;
	public $FieldFullName;
	public $FieldStatus;
	public $ValueId;
	public $ValueBeginOfWork;
	public $ValueInternalEmail;
	public $ValueFullName;
	public $ValueStatus;
	protected function DefineDbVariable() {
		$this->Host = "vmthrm01.tsrv.ebuero.de";
		$this->DbUserName = "sugarhrm-test";
		$this->DbPassword = "Ooyia3hohp4puim9";
		$this->DbName = "sugarhrm-test";
		$this->DbTable = "leads_cstm";
	}
	protected function CreateTable() {
		parent::CreateTable ();
		$this->FieldId = "id_c";
		$this->FieldBeginOfWork = "begin_work_c";
		$this->FieldInternalEmail = "internal_email_address_c";
		$this->FieldFullName = "alias_name_c";
		$this->FieldStatus = "status";
		return $this->OpenDb ();
	}
	function Insert() {
		parent::Insert ();
		return $result;
	}
	function QueryApplicantInfo($id) {
		$this->ValueId = $id;
		$con = mysqli_connect ( "$this->Host", "$this->DbUserName", "$this->DbPassword" );
		
		if (mysqli_connect_errno ()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error ();
		}
		$sql = "SELECT a.id_c, a.alias_name_c, a.begin_work_c, a.internal_email_address_c , b.status FROM `$this->DbName`.`$this->DbTable` AS a INNER JOIN `$this->DbName`.`leads` AS b where a.id_c = '$this->ValueId' AND a.id_c = b.id ";
		$result = mysqli_query ( $con, $sql );
		$row = mysqli_fetch_assoc ( $result );
		
		$this->ValueBeginOfWork = $row ["$this->FieldBeginOfWork"];
		$this->ValueFullName = $row ["$this->FieldFullName"];
		$this->ValueId = $row ["$this->FieldId"];
		$this->ValueInternalEmail = $row ["$this->FieldInternalEmail"];
		$this->ValueStatus = $row ["$this->FieldStatus"];
		
		$this->Json->add ( "$this->FieldId", "$this->ValueId" );
		$this->Json->add ( "$this->FieldBeginOfWork", "$this->ValueBeginOfWork" );
		$this->Json->add ( "$this->FieldFullName", "$this->ValueFullName" );
		$this->Json->add ( "$this->FieldInternalEmail", "$this->ValueInternalEmail" );
		$this->Json->add ( "$this->FieldStatus", "$this->ValueStatus" );
		
		$this->Json->send ();
		
		mysqli_free_result ( $result );
		mysqli_close ( $con );
	}
	function UpdateAll() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldApplicantId=$this->AccountId,$this->FieldBeginOfWork=$this->CreatedDate,$this->FieldInternalEmail=$this->Count WHERE $this->FieldId=$this->ValueId";
		$result = $this->Query ( $sql );
		return $result;
	}
	function UpdateAccountId() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldApplicantId=$this->AccountId WHERE $this->FieldId=$this->ValueId";
		$result = $this->Query ( $sql );
		return $result;
	}
	function UpdateCreatedDate() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldBeginOfWork=$this->CreatedDate WHERE $this->FieldId=$this->ValueId";
		$result = $this->Query ( $sql );
		return $result;
	}
	function UpdateCount() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldInternalEmail=$this->Count WHERE $this->FieldApplicantId='$this->AccountId'";
		$result = $this->Query ( $sql );
		return $result;
	}
	function Delete() {
		parent::Delete ();
		$sql = "DELETE FROM $this->DbName.$this->DbTable WHERE $this->FieldApplicantId=$this->ValueId";
		$result = $this->Query ( $sql );
		return $result;
	}
}
?>