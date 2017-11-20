<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: lightsalmon">
<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_database = "wiki";
$mysqli = new mysqli;
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    //echo "valio";
}

$query = " 
SELECT
	*
FROM
	users

";

$i = 0;
$result = $mysqli->query($query);
?>
<h2>Pirma lentele</h2>
<?php
echo "<table style='width:20%' border ='2''>";
while ($row = mysqli_fetch_array($result)) {

    switch ($i) {
        case 0:
            $first = $row;
            foreach ($row as $key => $value)
                if (!is_int($key) && $key != "id") {
                    echo "<th>" . $key . "</th>";


                }
            echo "<tr  style='background-color:yellow'>";
            echo "<br>";
            $i++;

            break;
        case 1:
            echo "<tr  style='background-color:yellow'>";
            break;
        case 2:
            echo "<tr  style='background-color:green'>";
            break;
        case 3:
            echo "<tr  style='background-color:red'>";
            break;
    }

    for ($j = 1; $j < sizeof($row) / 2; $j++) {
        echo "<th>" . $row[$j] . "</th>";

    }


    echo "</tr>";

    //print_r($row);
    if ($i < 3) {
        $i++;
    } else $i = 1;
}
foreach ($first as $key => $value)
    if (!is_int($key) && $key != "id") {
        echo "<th>" . $key . "</th>";

    }
echo "</table>";
//echo $mysqli->insert_id;
?>
<h2>Antra lentele</h2>
<?php


$query = " 
SELECT
	name, count(name) as VarduSk, AVG(wage) as VidutinisAtlyginimas, SUM(wage) as AlguSuma
FROM
	users
GROUP BY
	name
ORDER BY
	VarduSk DESC	

";

$i = 0;
$result = $mysqli->query($query);
echo "<table style='width:20%' border ='2''>";
while ($row = mysqli_fetch_array($result)) {

    switch ($i) {
        case 0:
            $first = $row;
            foreach ($row as $key => $value)
                if (!is_int($key) && $key != "id") {
                    echo "<th>" . $key . "</th>";


                }
            echo "<tr  style='background-color:green'>";
            echo "<br>";
            $i++;

            break;
        case 1:
            echo "<tr  style='background-color:green'>";
            break;
        case 2:
            echo "<tr  style='background-color:yellow'>";
            break;
        case 3:
            echo "<tr  style='background-color:blue'>";
            break;
    }

    for ($j = 0; $j < sizeof($row) / 2; $j++) {
        echo "<th>" . $row[$j] . "</th>";

    }


    echo "</tr>";

    //print_r($row);
    if ($i < 3) {
        $i++;
    } else $i = 1;
}
foreach ($first as $key => $value)
    if (!is_int($key) && $key != "id") {
        echo "<th>" . $key . "</th>";

    }
echo "</table>";


$mysqli->close();

?>
<br>
<p>
    susikurti kiekvieno vardo algu vidurkis algu kiekis algu suma kiekis vardu
    visi duomenys pirma lentele //pirma zalia antra geltona trecia melyna
    susikurti kiekvieno vardo algu vidurkis algu kiekis algu suma kiekis vardu header footer su column padavinimas.
</p>
</body>
</html>