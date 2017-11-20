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
	name, AVG(wage) as vid
FROM
	users
GROUP BY
	name
ORDER BY
	vid DESC
";

$i =0;
$result = $mysqli->query($query);
echo "<table style='width:20%' border ='2''>";
while ($row = mysqli_fetch_array($result)) {
if ($i%2==0)echo "<tr  style='background-color:red'>";
if ($i%2!=0)echo "<tr  style='background-color:green'>";
    echo "<th>".$row['name']."</th>";
    echo "<th>".$row['vid']."</th>";
    echo "</tr>";
    //print_r($row);
    $i++;
}
echo "</table>";
echo $mysqli->insert_id;

$mysqli->close();

?>
// susikurti kiekvieno vardo algu vidurkis algu kiekis algu suma kiekis vardu


// visi duomenys pirma lentele //pirma zalia antra geltona  trecia melyna
// // susikurti kiekvieno vardo algu vidurkis algu kiekis algu suma kiekis vardu  header footer su column padavinimas.
