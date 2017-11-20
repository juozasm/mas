<?php

// FOR

for($i = 0; $i < 10; $i++){
	echo $i . "<br />";
}

for($i = 10; $i > 0; $i--){
	echo $i . "<br />";
}

// WHILE

$l = 0;

while($l < 10){
	echo $l . "<br />";
	$l++;
}


$l = 10;

while($l > 0){
	echo $l . "<br />";
	$l--;
}

// foreach skirtas masyvams

$data = array(1, 5, 10, 100);

foreach ($data as $value) {
	echo $value . "<br />";
}

$data = array(
	"vardas" 	=> "Vaidotas",
	"pavarde" 	=>	"Sackus"
);

foreach ($data as $key => $value) {
	echo "Key: " . $key . ", value: " . $value . "<br />";
}