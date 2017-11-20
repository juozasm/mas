<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_database = "wiki";

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$query = "
	SELECT
		name, AVG(salary) as alga
	FROM
		users
	GROUP BY
		name
	ORDER BY
		alga DESC
";

$result = $mysqli->query($query);

//print_r($result);
$i = 0;
echo "<table border=1>";
while($row = mysqli_fetch_array($result)){
	echo "<tr ";
	if($i % 2){
		echo " bgcolor='grey'";
	}
	echo "><td>" . $row['name'] . "</td><td>" . $row['alga'] . "</td></tr>";
	//print_r($row);

	$i++;
}
echo "</table>";


$mysqli->close();

?>