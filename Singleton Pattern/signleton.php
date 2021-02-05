
<?php 
class Singleton {
  private static $instance = null;
  private function __construct(){
  }
  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new Singleton();
      echo "First Calling"."<br/>";
    }else{
    	echo "Not The firt Calling"."<br/>";
    	return self::$instance;
    }
  }
 
}
$object = Singleton::getInstance();
$object1 = Singleton::getInstance();
$object2 = Singleton::getInstance();