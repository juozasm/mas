<?php
session_start();
$username = array("antanas", "petras", "lol");
$adminas = array("adminas", "admin");
$password = md5("pass");


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

            <h1>Tekstas</h1>
            <?php
            if (isset($_POST['username'])) {
                if (in_array($_POST['username'], $username) && md5($_POST['password']) == $password) {
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['role'] = 'vartotojas';
                    echo "</br>" . "yra toks vartotojas sviekiname prisijungus  varotojau - ", $_POST['username'];
                    ?>
                    <br>Baigti registracija:<br>
                    <form action="web.php" method="post">
                    <select name="gimmetai">
                    <?php
                    for ($gim = 1910; $gim <= 2017; $gim++) {
                        echo "gimimo metai", "<option value=$gim>$gim</option>";
                    }
                    echo "</select>";
                    echo "<select name='menesis'>";
                    for ($men = 1; $men <= 12; $men++) {


                        echo "menesis", "<option value=$men>$men</option>";
                    }
                    echo "</select>";
                    echo "<select name='diena'>";


                    for ($diena = 1; $diena <= 31; $diena++) {
                        echo "gimimo diena", "<option value=$diena>$diena</option>";
                    }
                    echo "</select>";



                ?>
                <br>
                <textarea name="text" id="" cols="30" rows="10"></textarea>
                <br><input class="btn btn-primary" type="submit" name="irasyti" value="irasyti">


                </form>
                <?php


                if (isset($_POST['irasyti'])) {
                    echo $_POST['gimmetai'];
                    echo $_POST['menesis'];
                    echo $_POST['diena'];

                }

            if(isset($_SESSION['username'])){
                $_POST['username']=$_SESSION['username'];
                $_POST['password']=$_SESSION['password'];

            }
            if (in_array($_POST['username'], $adminas) && md5($_POST['password']) == $password) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['role'] = 'admin';
                echo "</br>" . "yra toks vartotojas sviekiname prisijungus  adminai - ", $_POST['username'];
                ?>
                <br>Siandienos darbai:<br>

                <?php
            }
                }else echo "Neteisingas spatazodis ar varototjo vardas";
            }else echo "Neteisingas spatazodis ar varototjo vardas";
            ?>
            <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text
                and a mostly barebones HTML document.</p>
        </div>
        <div class="col-lg-3">
            <h2>Prisijungimas:</h2>

            <form action="web.php" method="post">
                User Name:<br>
                <input type="text" name="username"><br><br>
                Password:<br>
                <input type="password" name="password"><br><br>
                <input class="btn btn-primary" type="submit" name="submit" value="Login">
            </form>


            <?php


            if (isset($_SESSION['username'])) {

                echo "Jusu vardas ", $_SESSION['username'], "</br>";
                echo "Jusu role - ", $_SESSION['role'], "</br>";
                echo "<a href='../functions.php'>Atsijungti</a>";
            }

            //if(isset($_POST['submit'])){
            //    echo "Login:",$_POST['username'];
            //    echo "Password:",$_POST['password'];
            //}
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
