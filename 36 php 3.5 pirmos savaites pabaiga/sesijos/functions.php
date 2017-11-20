<?php

function StatauNama(){
	$klojimas = klojuPamatus();
	$aukstis = rand(2, 3);
	$ilgis = rand(24, 48);
  	$dazymas = dazauSienas($aukstis, $ilgis);

  	$trukme = $klojimas["terminas"] + $dazymas["terminas"];
  	$kaina = $klojimas["kaina"] + $dazymas["kaina"];

  	if(isset($_SESSION["kaina"])){
		$_SESSION["kaina"] = $_SESSION["kaina"] + $kaina;
	}
	else{
		$_SESSION["kaina"] = $kaina;
	}

	if(isset($_SESSION["trukme"])){
		$_SESSION["trukme"] = $_SESSION["trukme"] + $trukme;
	}
	else{
		$_SESSION["trukme"] = $trukme;
	}

  	echo "<b>Namas pastatytas!</b> Statybos truko " . $trukme . " d.d. ir kainavo " . $kaina  . " EUR.<br/><br/>";
}

function klojuPamatus(){
	$data = array();
	$data["kaina"] = rand(1000, 5000);
	$data["terminas"] = rand(4, 8);

	echo "Paklojau pamatus. Užtrukau " . $data["terminas"] . " d.d.. Visa tai man kainavo " . $data["kaina"] . " EUR<br />";

	return $data;
}

function dazauSienas($aukstis, $ilgis){
	$kvadratura = $aukstis * $ilgis;
	$data = array();
	$data["kaina"] = rand(1000, 5000);
	$data["terminas"] = rand(8, 15);

	echo "Išdažiau " . $kvadratura . " kv. m. sienų. Užtrukau " . $data["terminas"] . " d.d.. Visa tai man kainavo " . $data["kaina"] . " EUR<br />";

	return $data;
}

?>