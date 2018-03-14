<?php
include ('dbsampleprojecttest.php');
class DbTableTest extends DbSampleProjectTest {
	public $FieldId;
	public $FieldName;
	public $FieldAge;
	protected function CreateTable() {
		parent::CreateTable ();
		$this->DbTable = "Test";
		$sql = "CREATE TABLE IF NOT EXISTS " . $this->DbTable . "(id Varchar(3), name Varchar(25), age Int(2), Primary Key (id));";
		$result = $this->Query ( $sql );
		if ($result) {
			echo "Create table successfully.";
		} else {
			echo "Cannot create table !";
		}
	}
	function Insert($id, $name, $age) {
		parent::Insert();
		$sql = "INSERT INTO ".$this->DbTable." values('$id', '$name', $age);";
		$result = $this->Query($sql);
		if ($result)
		{
			echo "Add data successfully.<br>";
		}
		else
		{
			echo "Cannot adding data !<br>";
		}
		return $result;
	}
	function Update() {
		parent::Insert();
	}
	function Delete() {
		parent::Delete();
	}
}
?>