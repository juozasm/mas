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

function info_apie_userius($mysqli)
{
    $query = "
 SELECT DISTINCT

users.name, pages.pages

FROM
 
users

LEFT
 JOIN

user_liked_pages
	
ON
	user_liked_pages.user_id = users.id

LEFT JOIN
	pages
	
ON	
		user_liked_pages.page_id=pages.id
";

    $result = $mysqli->query($query);
    $row = $result->fetch_assoc();
    echo "<table>";
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<td>" . $key . "</td>";
    }
    echo "</tr>";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

if (isset($_GET['action']) && $_GET['action'] == "edit") {
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
// cia patikrinimas iskarto be sejijos ar laikines puslapi zmogus
if (isset($_SESSION['id'])) {

    $query = "  
SELECT
	pages,page_id
FROM
    pages
INNER JOIN
	user_liked_pages
    ON
    user_liked_pages.page_id=pages.id
WHERE 
user_id = '".$_SESSION['id']."' AND pages='".basename($_SERVER['PHP_SELF'])."';
";
    $result = $mysqli->query($query);
    $row = $result->fetch_assoc();
    $_SESSION[basename($_SERVER['PHP_SELF'])."page_id"]=$row['page_id'];
    echo $_SESSION[basename($_SERVER['PHP_SELF'])."page_id"];

    print_r($row);
    if (!empty($row['page_id']))  {
        $_SESSION[basename($_SERVER['PHP_SELF'])] = 'liked';
    } else echo "neveikia tikrinimas";
}

// pabaiga patikrinimo



if (isset($_GET['id']) && isset($_GET['like']) && $_GET['like'] == 1) {
    $query = "
    
INSERT INTO
	pages
		( pages)
    VALUES
		('" . basename($_SERVER['PHP_SELF']) . "') 
  ";
    $result = $mysqli->query($query);
    $query = "  
SELECT
	id
FROM
    pages
WHERE
  pages='" . basename($_SERVER['PHP_SELF']) . "';
  ";
    $result = $mysqli->query($query);
    $row = $result->fetch_assoc();
//    print_r($result);

    $query = "  
INSERT INTO
	user_liked_pages
	  (user_id, page_id)
VALUES
    (" . $id . "," . $row['id'] . ")
  ";

    $result = $mysqli->query($query);
    $_SESSION[basename($_SERVER['PHP_SELF'])] = 'liked';


    //header("location: user.php?id=" . $id);
}

if (isset($_GET['id']) && isset($_GET['like']) && $_GET['like'] == 0) {
    $query = "
    

DELETE FROM
	user_liked_pages
WHERE 
	user_id = '" . $_SESSION['id'] . "' AND page_id ='".$_SESSION[basename($_SERVER['PHP_SELF'])."page_id"]."'

  ";
    $result = $mysqli->query($query);
    $_SESSION[basename($_SERVER['PHP_SELF'])] = 'unliked';


    //header("location: user.php?id=" . $id);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>

<body>

<div class="container">

    <div class="row">
        <div class="col-lg-9">

            <h1><?php echo $user['name'] . " " . $user['surname'] . " (" . $user['username'] . ")"; ?></h1>

            <h2>Edit</h2>

            <form action="user.php?id=<?php echo $id; ?>&action=edit" method="post">
                Name: <input type="text" name="name" value="<?php echo $user['name']; ?>"/><br/>
                Surname: <input type="text" name="surname" value="<?php echo $user['surname']; ?>"/><br/>
                Username: <input type="text" name="username" value="<?php echo $user['username']; ?>"/><br/>


                <input type="submit" class="btn btn-primary" value="Redaguoti">
            </form>
            <?php
            info_apie_userius($mysqli);
            ?>

        </div>
        <div class="col-lg-3">
            <h2>Navigacija</h2>
            <a href="index.php">Home</a><br/>
            <?php

            if (isset($_SESSION['name_surname'])) {
                echo "<b>" . $_SESSION['name_surname'] . "</b> (" . $_SESSION['username'] . ")<br />";
                echo "<a href='logout.php'>Atsijungti</a>";
                if (isset($_SESSION[basename($_SERVER['PHP_SELF'])])&&$_SESSION[basename($_SERVER['PHP_SELF'])] == 'liked') {
                    echo "<a href='user.php?id=" . $_SESSION['id'] . "&like=0'><img src='like.png' width='50px' alt='like'></a><span style='color: green'>LIKED " . basename($_SERVER['PHP_SELF']) . "</span>";
                } else {
                    echo "<a href='user.php?id=" . $_SESSION['id'] . "&like=1'><img src='like.png' width='50px' alt='like'></a><span style='color: red'>NOT LIKING " . basename($_SERVER['PHP_SELF']) . "</span>";
                    if (isset($_SESSION[basename($_SERVER['PHP_SELF'])])&&$_SESSION[basename($_SERVER['PHP_SELF'])] == 'unliked') {
                        echo "UNLIKED!";
                    }
                }
            } else {
                ?>
                <form action="index.php" method="post">
                    <b>Username:</b><br/> <input type="text" name="username"><br/>
                    <b>Password:</b><br/> <input type="password" name="password"><br/><br/>
                    <input type="submit" class="btn btn-primary" value="login">
                </form>
                <?php
            }
            ?>
        </div>
    </div>

</div><!-- /.container -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>
</html>
