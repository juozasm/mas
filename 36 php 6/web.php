<?php
session_start();

if(isset($_GET['action']) && $_GET['action'] == "delete"){
  unset($_SESSION['users'][$_GET['id']]);
}

if(!isset($_SESSION['users'])){

  $_SESSION['users'] = array(
    array(
      'username'  => 'petras',
      'pass'    => 'pass1',
      'role'    => 'admin'
    ),

    array(
      'username'  => 'jonas',
      'pass'    => 'pass2',
      'role'    => 'member'
    ),
    array(
      'username'  => 'juozas',
      'pass'    => 'pass3',
      'role'    => 'admin'
    )
  );
}

if(isset($_POST['new_username'])){
  //patikrinam ar toks vartotojas egzistuoja
  $user_exist = false;
  foreach ($_SESSION['users'] as $user) {
    if($user['username'] == $_POST['new_username']){
      $user_exist = true;
    }
  }
  //jei vartotojas neegzistuoja - irasome i sesija
  if(!$user_exist){
    $_SESSION['users'][] = array(
      'username'  => $_POST['new_username'], 
      'pass'      => $_POST['new_password'],
      'role'      => $_POST['new_role']
    );
  }
  
  header("location: web.php");
}
/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
*/
if(isset($_POST['username'])){
  foreach ($_SESSION['users'] as $key => $user) {
    if($user['username'] == $_POST['username'] && $user['pass'] == $_POST['password']){
      $_SESSION['username'] = $user['username'];
      $_SESSION['role'] = $user['role'];
    }
  }
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
          
          <h1>Tekstas</h1>
          <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>

          <h2>Naujas vartotojas</h2>
          <form action="web.php" method="post">
              <b>Username:</b><br /> <input type="text" name="new_username"><br />
              <b>Password:</b><br /> <input type="password" name="new_password"><br /><br />
              <input type="radio" name="new_role" value="admin">Admin <br />
              <input type="radio" name="new_role" value="member" checked>Member <br />
              <input type="submit" class="btn btn-primary" value="Naujas vartotojas">
          </form>
          <h2>Vartotojų sąrašas</h2>
          <ul>
          <?php
            foreach ($_SESSION['users'] as $key => $user) {

                echo "<li><a href='user.php?id=" . $key . "'>" . $user['username'] . "</a>";
                if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
                  echo " <a href='web.php?action=delete&id=" . $key ."' style='color: red;'>X</a>";
                }

                echo "</li>";
            }
          ?>
        </ul>
        </div>
        <div class="col-lg-3">
          <h2>Navigacija</h2>
          <a href="web.php">Home</a><br />
          <?php

          if(isset($_SESSION['username'])){
            echo "<b>" . $_SESSION['username'] . "</b> (" . $_SESSION['role'] . ")<br />";
            echo "<a href='logout.php'>Atsijungti</a>";
          }
          else{
            ?>
            <form action="web.php" method="post">
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
