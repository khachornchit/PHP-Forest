<?php
	//require('employee.php');
	include('employee.php');

	class Manager extends Employee
	{
		var $position_salary;

		function Manager($position_salary)
		{
			$this->position_salary = $position_salary;
		}
	}
	
	echo "*********************************<p>";
	$chanchai = new Manager(15000);
	$chanchai->Employee("Chanchai",35000,5000);
	$chanchai->Print_EmployeeData();
?>