<?php
session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_database = "wiki";

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST['email'])){
	//echo $_POST['email'];
	$query = "
		SELECT
			id, name
		FROM 
			users 
		WHERE 
			email = '" . $_POST['email'] . "'
	";

	$results = $mysqli->query($query);

	if($results->num_rows == 1){
		$row = mysqli_fetch_assoc($results);

		echo "Sveiki, " . $row['name'] . ", savo slaptažodį galite pasikeisti ";
		echo "<a href='forgot.php?action=change&id=" . $row['id'] . "'>čia</a>";
	}
}
else if(isset($_GET['action']) && $_GET['action'] == "change"){
	?>
	<form action="forgot.php?action=save&id=<?php echo $_GET['id']; ?>" method="post">
		Įveskite naują slaptažodį: <br />
		<input type="password" name="pass" /><br />
		<input type="submit" name="submit" value="Pakeisti"/>
	</form>
	<?php
}
else if(isset($_GET['action']) && $_GET['action'] == "save"){
	$query = "
		UPDATE 
			users
		SET
			password = md5('" . $_POST['pass'] ."')
		WHERE
			id = '" . $_GET['id'] . "'
	";
	$mysqli->query($query);

	echo "Slaptažodis pakeistas sėkmingai. <br /><a href='index.php'>Grįžti į pagrindinį puslapį.</a>";
}
else{
	?>
	<form action="forgot.php" method="post">
		Įveskite savo el. pašto adresą: <br />
		<input type="email" name="email" /><br />
		<input type="submit" name="submit" value="Priminti"/>
	</form>
	<?php
}

?>

