<?php
session_start();

include "functions.php";

// isset() tikrina ar egzistuoja("is set") kintamasis. Jei nepatikrintumėte - gautumėte klaidą, kai toks kintamasis dar nebūtų sukurtas

if(isset($_SESSION["counter"])){
	$_SESSION["counter"]++;
}
else{
	$_SESSION["counter"] = 1;
}

echo "Puslapis atnaujintas " . $_SESSION["counter"] . " k.<br />";

StatauNama();

echo "Statybose jau pradirbome: " . $_SESSION["trukme"] . " d.d.<br />";
echo "Statybose jau išleidome: " . $_SESSION["kaina"] . " d.d.<br />";

?>

<a href="logout.php">Atsijungti</a>