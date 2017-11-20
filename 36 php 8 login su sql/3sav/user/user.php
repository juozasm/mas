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

$id = $_GET['id'];

$query = "
  SELECT
    *
  FROM
    users
  WHERE
    id = '" . $id . "'
";

$result = $mysqli->query($query);
$user = mysqli_fetch_assoc($result);

if(isset($_GET['action']) && $_GET['action'] == "edit"){
  $query = "
    UPDATE 
      users
    SET
      name = '" . $_POST['name'] . "',
      surname = '" . $_POST['surname'] . "',
      username = '" . $_POST['username'] . "'
    WHERE
      id = '" . $id . "'
  ";
  $mysqli->query($query);

	header("location: user.php?id=" . $id);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  </head>

  <body>

    <div class="container">

      <div class="row">
        <div class="col-lg-9">
          
          	<h1><?php echo $user['name'] . " " .  $user['surname'] . " (" . $user['username'] .")"; ?></h1>
      
      		

      		<h2>Edit</h2>

      		<form action="user.php?id=<?php echo $id; ?>&action=edit" method="post">
      			Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" /><br />
            Surname: <input type="text" name="surname" value="<?php echo $user['surname']; ?>" /><br />
            Username: <input type="text" name="username" value="<?php echo $user['username']; ?>" /><br />
      			
      			<input type="submit" class="btn btn-primary" value="Redaguoti">
      		</form>
          
        </div>
        <div class="col-lg-3">
          <h2>Navigacija</h2>
        	<a href="index.php">Home</a><br />
          <?php

          if(isset($_SESSION['name_surname'])){
            echo "<b>" . $_SESSION['name_surname'] . "</b> (" . $_SESSION['username'] . ")<br />";
            echo "<a href='logout.php'>Atsijungti</a>";
          }
          else{
            ?>
            <form action="index.php" method="post">
              <b>Username:</b><br /> <input type="text" name="username"><br />
              <b>Password:</b><br /> <input type="password" name="password"><br /><br />
              <input type="submit" class="btn btn-primary" value="login">
            </form>
            <?php
          }
          ?>
        </div>
      </div>

    </div><!-- /.container -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
