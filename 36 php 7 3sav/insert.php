<?php

$mysqli = new mysqli("localhost", "root", "root", "wiki");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$names = ["Jonas", "Petras", "Antanas", "Juozas", "Emilis", "Sarunas", "Pranas", "Vaidotas"];
$surnames = ["Jonaitis", "Petraitis", "Antanavicius", "Juozapaitis", "Emilicius", "Sarunavicius", "Pranauskas", "Vaidotauskas"];

for($i = 0; $i < 10; $i++){
	$user_name = $names[rand(0, 7)];
	$user_surname = $surnames[rand(0, 7)];
	$user_username = $user_name . $user_surname . $i;
	$user_email = $user_name . "@" . $user_surname . $i . ".lt";
	$user_pass = md5($user_username);
	$age = rand(18, 75);
	$query = "
		INSERT INTO 
			users 
				(name, surname, username, email, password, age)
			VALUES 
				('" . $user_name . "', '" . $user_surname . "', '" . $user_username . "', '" . $user_email . "', '" . $user_pass . "', '" . $age . "')";
	$mysqli->query($query);

	printf ("New Record has id %d.\n", $mysqli->insert_id);
}

$mysqli->close();

?>