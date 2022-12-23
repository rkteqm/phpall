<?php 

class employee{
	public $name;
	public $age;
	public $salary;
	
	function __construct($n,$a,$s){
		$this->name = $n;
		$this->age = $a;
		$this->salary = $s;		
	}	
	function info(){
		echo "<h3>Employee Profile</h3>";
		echo "Employee Name : " .$this->name ."<br>";
		echo "Employee Age : " .$this->age ."<br>";
		echo "Employee Salary : " .$this->salary ."<br>";
		
	}
}

class manager extends employee{
	
	public $ta = 5000;
	public $phone = 1000;
	public $totalSalary;
	
	function info(){
		$this->totalSalary = $this->salary + $this->ta + $this->phone;
		echo "<h3>Manager Profile</h3>";
		echo "Employee Name : " .$this->name ."<br>";
		echo "Employee Age : " .$this->age ."<br>";
		echo "Employee Salary : " .$this->totalSalary ."<br>";
		
	}

}



$e1 = new employee("Ram","25","10000");	
//$e1 = new employee();
$e2 = new manager("Mohan","30","20000");

$e1->info();
$e2->info();


?>