<?php

require 'functions.php';

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
            <h2>Registruotis:</h2>
            <form action="register.php" method="post">

            <p>Login:</p><input type="text" name="reg_user" value= "">
            <p>Passsword:</p><input type="password" name="reg_password" value= "">
            <p>Name: </p><input type="text" name="reg_name"  value= "">
            <p>Surname:</p><input type="text" name="reg_surname"  value= "">
            <p>Email: </p><input type="text" name="reg_email"  value= "">
            <p>Age:</p><input type="text" name="reg_age" value= "">
            <p>Wage:</p><input type="text" name="reg_wage"  value= "">;
            <input type="submit" value="Register" name="registruotis">
            <a href="index.php">Pradzia</a>

        </div>
        <div class="col-lg-3">






            <?php
            if(isset($_POST['registruotis'])){
                register($_POST);
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
