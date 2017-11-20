<?php

$users = array(
	array(
		'username' 	=> 'petras',
		'pass'		=> 'pass1',
		'role'		=> 'admin'
	),

	array(
		'username' 	=> 'jonas',
		'pass'		=> 'pass2',
		'role'		=> 'member'
	),
	array(
		'username' 	=> 'juozas',
		'pass'		=> 'pass3',
		'role'		=> 'admin'
	)
);

echo "<pre>";
print_r($users);
echo "<pre>";

// imituoju post'a
$_POST['username'] = 'juozas';
$_POST['pass'] = 'pass3';

foreach ($users as $user_key => $user) {
	foreach ($user as $key => $value) {
		if($key == "username" && $value == $_POST['username']){
			echo "Sveiki, " . $_POST['username'] . ", malonu, kad lankotės!<br />";
			if($users[$user_key]['pass'] == $_POST['pass']){
				echo "Jūsų slaptažodis teisingas. Galite eiti toliau.<br /><br />";
			}
			else{
				echo "Jūsų slaptažodis blogas. Lauk!<br /><br />";
			}
		}
	}
}

// imituoju post'a
$_POST['username'] = 'jonas';
$_POST['pass'] = 'pass2';

foreach ($users as $user_key => $user) {
	if($user['username'] == $_POST['username'] && $user['pass'] == $_POST['pass']){
		echo "Sveiki, " . $_POST['username'] . ", malonu, kad lankotės!<br />";
		echo "Jūsų slaptažodis teisingas. Galite eiti toliau.<br /><br />";
	}
}

// imituoju post'a
$_POST['username'] = 'juozas';
$_POST['pass'] = 'pass1';

foreach ($users as $user_key => $user) {
	foreach ($user as $key => $value) {
		if($key == "username" && $value == $_POST['username']){
			echo "Sveiki, " . $_POST['username'] . ", malonu, kad lankotės!<br />";
			if($users[$user_key]['pass'] == $_POST['pass']){
				echo "Jūsų slaptažodis teisingas. Galite eiti toliau.<br />";
			}
			else{
				echo "Jūsų slaptažodis blogas. Lauk!<br /><br />";
			}
		}
	}
}