<?php

$mysqli = new mysqli("localhost", "root", "", "wiki");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

for($i = 0; $i < 200; $i++){

	$atlyginimas = rand(400, 4000);
	$query = "
		UPDATE 
			users 
		SET
			salary = '" . $atlyginimas . "'
		WHERE 
			id = '" . $i . "'
	";
	$mysqli->query($query);
}

$mysqli->close();

?>