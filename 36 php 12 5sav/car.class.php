<?php

class Car
{
    public $name;
    public $color;
    public $year;
    public $transmision;
    private $country='germany';

    public function __construct($name,$trans,$color) {
        echo "laba diena";
        $this->getKortele($name,$trans,$color);
    }
    public function setName($name)
    {
        $this->name = $name;

    }

    public function getName()
    {
        return $this->name;
    }
    public function setYear()
    {
        $this->year = rand(1995, 2017);

    }

    public function getYear()
    {
        return $this->year;
    }

    public function setTransmision($trans)
    {
        $this->transmision = $trans;
    }

    public function getTransmision()
    {
        return $this->transmision;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
    private function getKortele($name,$trans,$color){
        echo "<br>";
        echo "************************";
        $this->setName($name);
        $this->setYear();
        $this->setTransmision($trans);
        $this->setColor($color);
        echo "<br>";
        echo "Pavadinimas : ",$this->getName(),"<br>","Metai : ",$this->getYear(),"<br>","Pavaru deze : ",$this->getTransmision(),"<br>","Spalva : ",$this->getColor();

        echo "<br>";
        echo $this->country;
        echo "************************";
    }

    function __destruct()
    {
        echo "pabaiga";
    }
}


// sukurti zmogu klase user, tas zmogus ugis, svoris, akiu spalva, lytis, vardas, pavarde.
// kmi metodas
?>




