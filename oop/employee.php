<?php
	class Employee
	{
		var	$name;
		var	$salary;
		var $ot;

		function Employee($name,$salary,$ot)
		{
			$this->name = $name;
			$this->salary = $salary;
			$this->ot = $ot;
		}

		function Print_EmployeeData()
		{
			echo "Employee name : $this->name <br>";
			echo "Employee salary : $this->salary <br>";
			echo "Employee OT : $this->ot <br>";

			if(empty($this->position_salary)!=1) {
				echo "Employee position : $this->position_salary <br>";
			}
		}
	}

	$somchai = new Employee("Steven",15000,3500);
	$somchai->Print_EmployeeData();
	echo "*********************************<p>";
	$precha = new Employee("Joseph",25000,5000);
	$precha->Print_EmployeeData();
?>