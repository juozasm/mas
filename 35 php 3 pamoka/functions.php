<?php
/**
 * Created by PhpStorm.
 * User: juoza
 * Date: 10/11/2017
 * Time: 5:32 PM
 */
$br = "</br>";
function read($ilgis, $plotis)
{
    echo $GLOBALS['br'], "laba diena namo plotas -" . $ilgis * $plotis;
}

function masyvas($mas)
{
    $suma = 0;
    for ($i = 0; $i < sizeof($mas); $i++) {
        $suma += $mas[$i];
    }
    echo $GLOBALS['br'], $suma;
    tekstas();

}

function tekstas()
{
    echo $GLOBALS['br'], "cia buvo jusu suma";
}


function paklojaupamatus($ilgis, $plotis)
{
    $plotas = $ilgis * $plotis;
    echo $GLOBALS['br'], "paklojau pamatus-", $plotas;
    $kaina = 10; //kvadrato kaina
    return array(

        "turis" => $plotas,
        "kaina" => $plotas * $kaina
    );
}

function isdaziaunama($plotas, $aukstis)
{
    $turis = $plotas * $aukstis;
    $kaina = 3; //turio kaina kubinio
    echo $GLOBALS['br'], "isdaziau nama -", $turis;
    return $kaina * $turis;
}

function ivertinaukaina($kaina)
{
    echo $GLOBALS['br'], "ivertinau ", $kaina;

}

function apsigyvenau()
{
    echo $GLOBALS['br'], "APSIGYVENAU!";
}

function statauNama($ilgis, $plotis, $aukstis)
{


    $mas = paklojaupamatus($ilgis, $plotis);
    $kaina = $mas["turis"];
    $kaina += isdaziaunama($mas["kaina"], $aukstis);
    apsigyvenau();

    ivertinaukaina($kaina);
}


?>

