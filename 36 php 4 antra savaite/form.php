<?php
	if(isset($_POST) && sizeof($_POST) > 0){
		echo $_POST['lytis'];	
		?>
		<form method="post" action="form.php">
			Username: <input type="text" name="username" value="<?php echo $_POST['username']; ?>"><br />

			<input type="radio" name="lytis" value="vyras" <?php
				if(isset($_POST['lytis']) && $_POST['lytis'] == "vyras"){
					echo "checked";
				}
			?>> Vyras
			<input type="radio" name="lytis" value="moteris" <?php
				if(isset($_POST['lytis']) && $_POST['lytis'] == "moteris"){
					echo "checked";
				}
			?>> Moteris

			<select name="miestas">
			<?php
				$cities = array('Vilnius', 'Kaunas', 'Klaipėda');

				foreach ($cities as $city) {
					echo "<option value='" . $city . "'";
					if($_POST['miestas'] == $city){
						echo " selected";
					}
					echo ">".$city."</option>";
				}
			?>
			</select>

			<select name="miestas">
				<option value="Vilnius" <?php
					if(isset($_POST['miestas']) && $_POST['miestas'] == "Vilnius"){
						echo "selected";
					}
				?>>Vilnius</option>
				<option value="Kaunas" <?php if(isset($_POST['miestas']) && $_POST['miestas'] == "Kaunas"){echo "selected";}?>>Kaunas</option>
				<option value="Klaipėda" <?php
					if(isset($_POST['miestas']) && $_POST['miestas'] == "Klaipėda"){
						echo "selected";
					}
				?>>Klaipėda</option>
			</select>

			<?php
				$skills = array('Rašyti', 'Skaityti', "Buriuoti", "Meškerioti");

				// in_array tikrina ar reikšmė nėra masyve

				foreach ($skills as $skill) {
					echo "<input type='checkbox' name='skills[]' value='" . $skill . "' ";
					if(in_array($skill, $_POST['skills'])){
						echo "checked";
					}
					echo "> " . $skill . "<br />";
				}
			?>

			<input type="submit" name="submit" value="postinam">

		</form>
		<?php
    }
	else{
		?>
		<form method="post" action="form.php">
			Username: <input type="text" name="username"><br />

			<input type="radio" name="lytis" value="vyras"> Vyras
			<input type="radio" name="lytis" value="moteris"> Moteris

			<select name="miestas">
				<option value="Vilnius">Vilnius</option>
				<option value="Kaunas">Kaunas</option>
				<option value="Klaipėda">Klaipėda</option>
			</select>


			<?php
				$skills = array('Rašyti', 'Skaityti', "Buriuoti", "Meškerioti");

				foreach ($skills as $skill) {
					echo "<input type='checkbox' name='skills[]' value='" . $skill . "'> " . $skill . "<br />";
				}
			?>
			
			<input type="submit" name="submit" value="postinam"><br />

		</form>
		<?php
	}
?>