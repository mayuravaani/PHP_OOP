<?php 
class Person {
	public $first = "Raja";
	public $last = "Ravi";
	public $age = 28;

	
	
	public function __construct($first, $last, $ag) {
		$this->first = $first;
		$this->last = $last;
		$this->age = $ag;
	}
	public function setFirst($first) {
		$this->first = $first;
	}
	public function owner() {
		$a = $this->first;
		return $a;
	}
	
}

class Pet extends Person {
	public function owner() {
		$a = "hi";
		return $a;
	}
	public function owner2() {
		$a = $this->first;
		return $a;
	}
}