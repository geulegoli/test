<?php
class Employee{
	
	protected $id;
	protected $name;
	protected $department;
	protected $post;
	public $type;
	const PERHOUR = 15;
	
		public function getwage($hours)
		{
		$wage = self::PERHOUR * $hours;
		
		return $wage;
		}
		public function __construct($id,$name,$department,$post,$type)
		{
			
			$this->id = $id;
			$this->name = $name;
			$this->department = $department;
			$this->post = $post;
			$this->type = $type;
			
		}
	
	}
	
	$employee1 = new Employee(3,'Ronald','IT','Manager','B');
	$employee2 = new Employee(2,'Ron','IT','Manager','A');

	
	
	echo $employee1->getwage(160);
	echo '<br>'.$employee2->getwage(40);
	
?>