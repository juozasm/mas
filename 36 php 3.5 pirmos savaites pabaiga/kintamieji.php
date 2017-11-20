<?php
/* kintamieji */

// eilutė (stringas)

$vardas = "Vaidotas";
$pavarde = "Šačkus";

echo $vardas;
echo "<br />";
echo $pavarde;
echo "<br />";

// stringai jungisi su tašku

echo $vardas . " " . $pavarde . "<br />";

// Masyvai

$duomenys = array();

// php 7 galima array() pakeisti į []

$duomenys["vardas"] = "Vaidotas";
$duomenys["pavarde"] = "Šačkus";

echo $duomenys["vardas"] . " " . $duomenys["pavarde"] . "<br />";

// Masyvai, kurių index'as skaičiai


$duomenys2 = array();
$duomenys2[0] = "Vaidotas";
$duomenys2[1] = "Šačkus";

echo $duomenys2[0] . " " . $duomenys2[1] . "<br />";

// Masyvai, kurių index'as skaičiai, bet nenurodome konkretaus skaičiaus


$duomenys3 = array();
$duomenys3[] = "Vaidotas";
$duomenys3[] = "Šačkus";

echo $duomenys3[0] . " " . $duomenys3[1] . "<br />";

// bool - tiesa arba netiesa (true arba false). Panaudosime vėliau.

$pavasaris = false;
$ruduo = true;

?>