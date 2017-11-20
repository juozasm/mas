<?php
require 'config.php';
/**
 * Created by PhpStorm.
 * User: juoza
 * Date: 10/11/2017
 * Time: 5:32 PM
 */

if (2 == 2 && 2 > 3) {
    echo "taip";
} else if (4 == 3) {
    echo "ne";
    echo " " . $a * $b;
} else {
    echo "neeee";
}


switch ($a) {

    case "1":
        echo "pirmas";
        break;
    case "2":
        echo "neimanoma";
        break;
    default:
        echo " lygu $a " . "</br>";


}

$namospalva = "geltona";

switch ($namospalva) {
    case "geltona" :
        echo "grazi $namospalva namo spalva lyg saule";
        break;
    case "melyna":
        echo "grazi $namospalva namo spalva lyg jura";
        break;
    case "raudona":
        echo "grazi $namospalva namo spalva lyg roze";
        break;
}
$br = "</br>";
$logic = true;
$x = 6;

if (!$logic) {
    echo "</br>";
    echo "teisingas";
} else {
    echo "</br>";
    echo "neigiamas";
}

if ($x < 5) {
    echo $br . "mazas";
} else if ($x > 5) {
    echo $br . "didelis";
} else {

    echo $br . "lygu";
}

//a= true teisingas jei ne false neigiamas
//
//b<5mazas  b>5 didelis

$plotis = 5;
$ilgis = 50;
$plotas = $plotis * $ilgis;
echo $br;
switch ($plotas) {
    case 200:
        echo " namas ";
        break;
    case 20:
        echo " butas ";
        break;
    default:
        echo "nesamone ", $br, " kvadratas plocio=", pow($plotis, 2);
}

//for ($i = 0; $i < 10; $i++) {
//    echo $br . $i;
//}
$a = 0;
$b = 20;
for ($c = $a; $c < $b; $c++) {

    echo $br . $c;
}
$a = 0;
while ($a < 20) {

    $a = ($a + 2);
    echo $br, $a - 1;
}
//nuo nulio iki 10;for
//masyvui reiksme

$mas = array();
echo $br;
for ($i = 0; $i <= 10; $i++) {
    $mas[$i] = $i;

}
echo "<pre>";
print_r($mas);
echo "</pre>";
echo sizeof($mas), $br;
$x = sizeof($mas);
while ($x != 0) {
    $x--;
    echo $br, $mas[$x];
    if ($mas[$x] > 5) {
        echo " didelis ";
    } else if ($mas[$x] < 5) {
        echo " mazas ";
    } else {
        echo " vidurinis ";
    }
}
?>




