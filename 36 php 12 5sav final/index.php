<?php
include "db.php";
include "car.class.php";
include "supercar.class.php";

$volvo = new Car($db, "Volvo");
//$users = $volvo->getUsers();
//
//echo "<pre>";
//print_r($users);
//echo "</pre>";
/*
$audi = new Car("Audi");

echo $volvo->color;
echo "<br />";

echo $volvo->year;

echo "<br />";

echo $volvo->setYear();

echo "<br />";

$volvo->setTransmition("manual");

echo $volvo->getTransmition();

echo "<br />";

$volvo->setColor("blue");
echo $volvo->getColor();

$audi->setColor($volvo->getColor());

echo "<br />";

echo $volvo->getInfo();
echo "<br />";

echo $audi->getInfo();
*/
$vaz = new Supercar($db,'Vaz');
$vaz->setYear();
$vaz->setPower(1000);
echo $vaz->getPower();
echo "<br />";
echo $vaz->getInfo();

echo $vaz->getName();
