<?php
session_start();

$username = array('vaidas', 'petras', 'antanas');
$admins = array('juozas', 'jonas', 'vincas');
$password = md5("pass");

echo "<pre>";
print_r($_POST);
echo "</pre>";

if(isset($_POST['username'])){
	if (in_array($_POST['username'], $username) && md5($_POST['password']) == $password){
		echo "Sveiki, " . $_POST['username'] . ", sveikiname prisijungus.<br />";
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['role'] = "member";
	}
	else if (in_array($_POST['username'], $admins) && md5($_POST['password']) == $password){
		echo "Sveiki, " . $_POST['username'] . ", sveikiname prisijungus.<br />";
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['role'] = "admin";
	}
	else{
		echo "Klaida. Tokio vartotojo nėra.<br />";
	}
}
?>

<form action="index.php" method="post">
	Username: <input type="text" name="username"><br />
	Password: <input type="password" name="password"><br />
	<input type="submit" value="login">
</form>

<?php

if(isset($_SESSION['username'])){
	echo "<b>" . $_SESSION['username'] . "</b> (" . $_SESSION['role'] . ")<br />";
	echo "<a href='logout.php'>Atsijungti</a>";
}