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
            <h2>Pamirsote slaptazodi:</h2>
            <p>Noredami atstatyti slaptazodi turite suvesti visa teisinga informacija</p>
            <form method="post">

                <p>Login:</p><input type="text" name="check_user" value= "">
                <p>Name: </p><input type="text" name="check_name"  value= "">
                <p>Surname:</p><input type="text" name="check_surname"  value= "">
                <p>Email: </p><input type="text" name="check_email"  value= "">

                <input type="submit" value="Reset" name="reset">
                <a href="index.php">Pradzia</a>


        </div>
        <div class="col-lg-3">






            <?php
            if(isset($_POST['reset'])){
                forgot($_POST);
            }
            if(isset($_POST['new_pass'])){


                $sql2=connect();

                $query2 ="
UPDATE
	users 
SET 
	password=md5('".$_POST['new_pass']."')
WHERE
	username='".$_POST['new_usr']."'";
                $sql2->query($query2);
            }else "Nepavyko"

            ?>


        </div>
    </div>

</div><!-- /.container -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
