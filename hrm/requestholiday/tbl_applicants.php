<?php
include ('createdatabase.php');
class DbTableApplicants extends DbHrm {
	public $FieldId;
	public $FieldBeginOfWork;
	public $FieldInternalEmail;
	public $FieldFullName;
	public $Id;
	public $AccountId;
	public $CreatedDate;
	public $Count;
	protected function CreateTable() {
		parent::CreateTable ();
		$this->DbTable = "leads_cstm";
		$this->FieldId = "id_c";
		$this->FieldBeginOfWork = "begin_work_c";
		$this->FieldInternalEmail = "internal_email_address_c";
		$this->FieldFullName = "alias_name_c";
		return $this->OpenDb ();
		;
	}
	function Insert() {
		parent::Insert ();
		// $sql = "INSERT INTO $this->DbName.$this->DbTable ($this->FieldApplicantId, $this->FieldBeginOfWork, $this->FieldInternalEmail) VALUES ('$this->AccountId','$this->CreatedDate','$this->Count');";
		// $result = $this->Query ( $sql );
		return $result;
	}
	function QueryApplicantInfo($id) {
 		$this->Id = $id;
		
		$con=mysqli_connect("$this->Host","$this->DbUserName","$this->DbPassword");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	
		$sql="SELECT id_c, alias_name_c, begin_work_c, internal_email_address_c FROM `$this->DbName`.`$this->DbTable` WHERE id_c='$this->Id';";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($result);
		printf ("%s (%s)\n",$row["$this->FieldId"],$row["$this->FieldFullName"]);
		
		mysqli_free_result($result);	
		mysqli_close($con);
	}
	function UpdateAll() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldApplicantId=$this->AccountId,$this->FieldBeginOfWork=$this->CreatedDate,$this->FieldInternalEmail=$this->Count WHERE $this->FieldId=$this->Id";
		$result = $this->Query ( $sql );
		return $result;
	}
	function UpdateAccountId() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldApplicantId=$this->AccountId WHERE $this->FieldId=$this->Id";
		$result = $this->Query ( $sql );
		return $result;
	}
	function UpdateCreatedDate() {
		parent::UpdateAll ();
		$sql = "UPDATE $this->DbName.$this->DbTable SET $this->FieldBeginOfWork=$this->CreatedDate WHERE $this->FieldId=$this->Id";
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
		$sql = "DELETE FROM $this->DbName.$this->DbTable WHERE $this->FieldApplicantId=$this->Id";
		$result = $this->Query ( $sql );
		return $result;
	}
}
?>