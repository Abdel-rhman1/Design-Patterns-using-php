<?php 
	echo "After Compiste"."<br/>";
	abstract class campanyComponent{
		function add(campanyComponent $C){
			throw new Exception("None Support function");
		}
		abstract function printInfo():void;
	}
	class Emplee extends campanyComponent{
		public string $name;
		public int $salary;
		public function __construct(string $name , int $salary){
			$this->name  = $name ;
			$this->salary = $salary;
		}
		public function printInfo():void{
			echo $this->name . "    " . $this->salary."<br/>";
		}
	}
	class department extends campanyComponent{
		public $name;
		public $arr;
		public function __construct(string $name){
			$this->arr = array();
			$this->name = $name ;
		}
		public function add($newEmp):void{
			array_push($this->arr,$newEmp);
		}
		public function printInfo():void{
			echo $this->name ." with its subdepartemnt "."<br/>";
			foreach ($this->arr as $objec ) {
				echo $objec->printInfo();
			}
		}
	}
	$e1 = new Emplee("A",100);
	$e2 = new Emplee("B",200);
	$e3 = new Emplee("C",300);
	$e4 = new Emplee("D",400);
	$e5 = new Emplee("E",500);
	$e6 = new Emplee("F",600);
	$e7 = new Emplee("G",700);
	$e8 = new Emplee("K",800);
	$d1 = new department("developmnent");
	$d2 = new department("desiging");
	$d3 = new department("hr");

	$d1->add($e1);
	$d1->add($e2);
	$d1->add($e3);

	$d2->add($e4);
	$d2->add($e5);
	$d2->add($e6);

	$d3->add($e7);
	$d3->add($e8);
	$d1->add($d2);
	$d2->add($d3);
	$d1->printInfo();
?>