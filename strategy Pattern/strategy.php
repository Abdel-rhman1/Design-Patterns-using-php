<?php
	interface quickbav{
		public function quick():void;
	}
	interface flybav{
		public function fly():void;
	}
	class highQuick implements quickbav{
		public function quick():void{
			echo "high Quick function"."\n";
		}
	}
	class howQuick implements quickbav{
		public function quick():void{
			echo "low Quick function \n";
		}
	}
	class silent implements quickbav{
		public function quick():void{
			echo "Silent Quick function\n";
		}
	}
	class highfly implements flybav{
		public function fly():void{
			echo "high fly function\n";
		}
	} 
	class lowfly implements flybav{
		public function fly():void{
			echo "low fly function\n";
		}
	}
	class nofly implements flybav{
		public function fly():void{
			echo "No fly function\n";
		}
	}
	abstract class Batta{
		private int $id;
		private string $name;
		private $quickBav;
		private $flyBav;
		private static int $counter=0;
		public function __construct($quickBav , $flyBab){
			$this->id = self::$counter++;
			$this->name = "Batta" . $this->id;
			$this->quickBav =  $quickBav;
			$this->flyBav = $flyBab;
		}
		public function swim():string{
			return "Okay : i'am Swiming"."</br>";
		}
		abstract protected function display():void;
		public function perform():void{
			echo "Hi i'm " . $this->Name . "</br>";
			echo $this->swim();
			echo $this->display();
		}
		public function quick():void{
			echo $this->quickBav->quick()."</br>";
		}
		public function fly():void{
			echo $this->flyBav->fly()."</br>";
		}
	}
	class redBatta extends Batta{
		public function __construct($flybav,$quickbav){
			 parent::__construct($quickbav,$flybav);
		}
		protected function display():void{
			echo "Welcome to you in display function"."</br>";
		}
	}
	class BlackBatta extends Batta{
		public function __construct($flybav,$quickbav){
			parent::__construct($quickbav,$flybav);
		}
		public function display():void{
			echo "Welcome to you in display function"."</br>";
		}
	}
	$quicklyQuck = new highQuick();
	$lowfly = new lowfly();
	$object = new redBatta($lowfly , $quicklyQuck);
	echo $object->swim();
	$object->quick();
	$object->fly();
?>