<?php
require 'functions.php';
if (isset($_POST['username']) && !empty($_POST['username'])) {

    $sql = connect();


    $query = "SELECT * FROM users WHERE username='" . $_POST['username'] . "';
    ";

    $result = $sql->query($query);


    // while ($row = mysqli_fetch_array($result)) {
    // for ($j = 0; $j < sizeof($row) / 2; $j++) {
    //echo " ".$row[$j]." ";
// };
    //  };
        $row = mysqli_fetch_array($result);

        if ($row['username'] == $_POST['username'] && $row['password'] == md5($_POST['password'])) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['surname'] = $row['surname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['age'] = $row['Age'];
            $_SESSION['wage'] = $row['wage'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['errpass']=0;
        }else $_SESSION['errpass']=1;



    $sql->close();


}
header('Location: index.php');



