<?php 
class NewClass {
	
	var $data = "default";
	
	public function __construct() {
		echo "This class has been instatitated.<br/>";
	}
	public function setNewProperty($newdata) {
		$this->data = $newdata;
	}
	public function getProperty() {
		return $this->data;
	}
	public function __destruct() {
		echo "<br> This is the end of the class";
	}
}

class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  public function set_color($n) { // a protected function
    $this->color = $n;
  }
  public function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>
