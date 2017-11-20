<?php
session_start();

function navcheck()

{
    if (isset($_SESSION['username'])) {
        echo "Sveiki atvyke - ", $_SESSION['username'], "<br>";
        echo "<a href='logout.php'>Atsijungti</a>";


    } else { ?>

        <h2>Prisijungti</h2>
        <form action="login.php" method="post">

            <p>Login: </p><input type="text" name="username">
            <p>Password:</p><input type="password" name="password">

            <input type="submit" value="įeiti">
            <br><a href="register.php">Register</a><br>
            <?php

            ?>

        </form>

        <?php
    }
}

; // patikrina ar prisiloginta
function maincheck()
{

if (isset($_SESSION['username'])) {
   ?>
    <h2>Sveiki atvyke, <?php echo $_SESSION['username']?></h2>
    <h2>Atnaujinti informacija:</h2>
        <form action="index.php" method="post">

            <p>Login:</p><input type="text" name="new_user" value= "<?php echo $_SESSION['username'] ?>">
            <p>Name: </p><input type="text" name="new_name"  value= "<?php echo $_SESSION['name'] ?>">
            <p>Surname:</p><input type="text" name="new_surname"  value= "<?php echo $_SESSION['surname'] ?>">
            <p>Email: </p><input type="text" name="new_email"  value= "<?php echo $_SESSION['email'] ?>">
            <p>Age:</p><input type="text" name="new_age" value= "<?php echo $_SESSION['age'] ?>">
            <p>Wage:</p><input type="text" name="new_wage"  value= "<?php echo $_SESSION['wage'] ?>">;
            <p>Naujas slaptikas:</p><input type="password" name="new">
            <br>
            <p>Senas slaptikas patvirtinimui:</p><input type="password" name="old">



            <input type="submit" value="Atnaujinti" name="atnaujinti">


            <?php
        $sqlx=connect();

        $queryx ="SELECT

users.name,pages.pages,user_detail.akys

FROM
 
users

LEFT
 JOIN

user_liked_pages
	
ON
	user_liked_pages.user_id = users.id
LEFT
 JOIN
pages
ON
pages.id = user_liked_pages.page_id
LEFT
JOIN
user_detail
ON
user_detail.user_id = users.id;";
    $result=$sqlx->query($queryx);

    $i=1;
    echo "<table>";
    while ($row = mysqli_fetch_array($result)

    ) {
        ;
        foreach ($row as $key => $value) {
            if (!is_numeric($key) && $i == 1) {
                echo " " . $key . " ";
                echo "<br>";
            }

        }
        echo "<tr>";
        foreach ($row as $key => $value) {
            if (!is_numeric($key)) {
                echo " ".$value." ";

            }
        }
        $i=0;
        echo "</tr>";;
    }
    echo "</table>";
                         if(isset($_POST['atnaujinti']) && $_SESSION['password'] == md5($_POST['old'])){
                             $sql2=connect();

                             $query2 ="
UPDATE
	users 
SET 
	name='".$_POST['new_name']."',surname='".$_POST['new_surname']."',username='".$_POST['new_user']."',email='".$_POST['new_email']."',age='".$_POST['new_age']."',wage='".$_POST['new_wage']."',password='".md5($_POST['new'])."'
WHERE
	id='".$_SESSION['id']."'";
$_SESSION['name']=$_POST['new_name'];
$_SESSION['surname']=$_POST['new_surname'];
$_SESSION['username']=$_POST['new_user'];
$_SESSION['email']=$_POST['new_email'];
$_SESSION['age']=$_POST['new_age'];
$_SESSION['wage']=$_POST['new_wage'];
$_SESSION['password']=md5($_POST['new']);
$sql2->query($query2);
header("Refresh:1");
echo "Atnaujinta";
}else  if(isset($_POST['atnaujinti'])){
      echo "neteisingas slaptazodis";
}




            ?>

    <?php




} else { ?>
    <h1>Tekstas</h1>
    <p class="lead"></p>

    <h2>Naujas vartotojas</h2>


    <h2>Vartotojų sąrašas</h2>


    <?php
    echo "<p>".userlist()."</p>";
}
}

;
function connect()
{
    $sql = new mysqli("localhost", "root", "", "wiki");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    return $sql;
}
function userlist(){

    $sql = connect();


    $query = "SELECT id, username, surname FROM users ;
    ";
$i=0;
echo "<table>";

$result = $sql->query($query);
$row = mysqli_fetch_array($result);
foreach ($row as $key => $value){
         if(!is_numeric($key)){
             echo "<th style='color: red'>".$key."</th>";

         }
         }

$result = $sql->query($query);
     while ($row = mysqli_fetch_array($result)) {

       echo "<tr>";
     foreach ($row as $key => $value){

             if(!is_numeric($key)){
                if ($key=='id')$id=$value;
                echo "<th>".$value." <a href='?action=delete&id=".$id."'>X</a></th>";

             }


        }


 };
     echo "</tr>";
     if(isset($_GET['action']) && $_GET['action']=='delete'){
         delete();
     };



}
function delete(){
    $sql = connect();


    $query3 = "
DELETE FROM
	users
WHERE 
	id = ".$_GET['id'].";
    ";
?><script>$window.location.reload();</script><?php


$result = $sql->query($query3);

}
function register($reg){
        $sql = connect();


    $query3 = "
INSERT INTO
	users
		(name, surname, username, email, password, Age, wage)
    VALUES
		('".$reg['reg_name']."','".$reg['reg_surname']."','".$reg['reg_user']."','".$reg['reg_email']."', '".md5($reg['reg_password'])."','".$reg['reg_age']."','".$reg['reg_wage']."')
  ";
?><script>$window.location.reload();</script><?php


$result = $sql->query($query3);
}
function forgot($forgot){
        $sql = connect();
echo $forgot['check_user'];

    $query4 = " SELECT * FROM users WHERE username = '".$forgot['check_user']."'";

$result = $sql->query($query4);
$row = mysqli_fetch_array($result);
print_r($row);
if ($row['username'] == $forgot['check_user'] && $row['name'] == $forgot['check_name'] &&
$row['surname'] == $forgot['check_surname'] &&
$row['email'] == $forgot['check_email']) {
    ?><form action="forgot.php" method="post">
        <p>Passsword:</p><input type="text" name="new_usr" value="<?php echo $forgot['check_user']; ?>">
        <p>Passsword:</p><input type="password" name="new_pass">

        <input type="submit" value="Atnaujinti" name="atnaujinti">
    <?php

        }else echo "Neteisingi duomenys";


}