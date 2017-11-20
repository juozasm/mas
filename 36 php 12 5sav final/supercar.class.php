<?php

class Supercar extends Car{
	public $power;

	public function setPower($power){
		$this->power = $power;
	}

	public function getPower(){
		return $this->power;
	}

	public function getInfo(){
		echo "-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+<br/ >";
		echo "<b>" . $this->name ."</b><br />";
		echo "Color: " . $this->color . "<br />";
		echo "Year: " . $this->getYear() . "<br />";
		echo "Transmition: " . $this->transmition . "<br />";
		echo "Country: " . $this->country . "<br />";
		echo "Power: " . $this->power . " HP<br />";
		echo "-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+<br/ >";
	}
}

?>