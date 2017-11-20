<?php


class Car{
	public $color = "green";
	public $year;
	public $transmition = "auto";
	public $country = "Germany";
	protected $name;
	public $db;

	public function __construct($db, $name){
		$this->name = $name;
		$this->db = $db;
	}

	static public function getKMI($weight, $height){
		$kmi = $weight / ($height * $height);

		echo $kmi;
	}

	public function getUsers(){
		$query = "
			SELECT
				*
			FROM
				users
		";

		$result = $this->db->query($query);

		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	public function getName(){
	    return $this->name;
    }

	public function setColor($color){
		$this->color = $color;
	}

	public function getColor(){
		return $this->color;
	}

	public function setYear(){
		$this->year = rand(1995, 2017);
		return $this->year;		
	}

	public function getYear(){
		return $this->year;
	}

	public function setTransmition($tran){
		$this->transmition = $tran;
	}

	public function getTransmition(){
		return $this->transmition;
	}

	public function getInfo(){
		echo "------------------------------<br/ >";
		echo "<b>" . $this->name ."</b><br />";
		echo "Color: " . $this->color . "<br />";
		echo "Year: " . $this->getYear() . "<br />";
		echo "Transmition: " . $this->transmition . "<br />";
		echo "Country: " . $this->country . "<br />";
		echo "------------------------------<br/ >";
	}

	public function __destruct(){
		
	}
}

?>