<?php

class Zmogus
{
    public $username;
    public $name;
    public $surname;
    public $lytis;
    public $ugis;
    public $svoris;
    public $akiuSpalva;
    public $KMI;

    public function __construct($username,$name,$surname,$lytis,$ugis,$svoris,$akiuSpalva)
    {
        $this->setUsername($username);
        $this->setName($name);
        $this->setSurname($surname);
        $this->setLytis($lytis);
        $this->setUgis($ugis);
        $this->setSvoris($svoris);
        $this->setAkiuSpalva($akiuSpalva);
        $this->KMI=$this->KMI();
        $this->kortele();

    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setLytis($lytis)
    {
        $this->lytis = $lytis;
    }

    public function getLytis()
    {
        return $this->lytis;
    }

    public function setUgis($ugis)
    {
        $this->ugis = $ugis;
    }

    public function getUgis()
    {
        return $this->ugis;

    }
    public function setSvoris($svoris)
    {
        $this->svoris = $svoris;
    }

    public function getSvoris()
    {
        return $this->svoris;
    }
    public function setAkiuSpalva($akiuSpalva)
    {
        $this->akiuSpalva = $akiuSpalva;
    }

    public function getAkiuSpalva()
    {
        return $this->akiuSpalva;
    }
    public function KMI(){
        return $this->svoris/pow($this->ugis/100,2);
    }
    public function kortele(){
        echo "<br>";
        echo "Username: ",$this->username;
        echo "<br>";
        echo "Surname: ",$this->surname;
        echo "<br>";
        echo "Name: ",$this->name;
        echo "<br>";
        echo "Lytis: ",$this->lytis;
        echo "<br>";
        echo "Ugis: ",$this->ugis;
        echo "<br>";
        echo "Svoris: ",$this->svoris;
        echo "<br>";
        echo "Akiu spalva: ",$this->akiuSpalva;
        echo "<br>";
        echo "KMI: ",$this->KMI;
        echo "<br>";


    }


}

// sukurti zmogu klase user, tas zmogus ugis, svoris, akiu spalva, lytis, vardas, pavarde.
// kmi metodas
?>




