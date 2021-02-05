<?php 
	interface Bird{
		public function fly():void;
		public function makesound():void;
	}
	class Sparrow  implements Bird{
		public function fly():void{
			echo "Flying"."<br/>";
		}
		public function makesound():void{
			echo "Chirp Chirp"."<br/>";
		}
	}
	interface toyBird{
		public function squeak():void;
	}
	class BirdApator implements toyBird{
		private $bird;
		public function __construct($Bird){
			$this->bird = $Bird;
		}
		public function squeak():void{
			$this->bird->makesound();
		}
	}
	$sparrow =  new Sparrow(); 
	$sparrow->fly();
	$sparrow->makesound();
	$testing = new Sparrow();
	$toybird = new BirdApator($testing);
	$toybird->squeak();
?>