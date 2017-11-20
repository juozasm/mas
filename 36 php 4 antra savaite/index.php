<?php

include "functions.php";
$checked = array(
        "adriano" => "",
        "celentano" => "",
        "martin" => "",

);
$counter = 0;

?>

</form>
<?php
if (isset($_POST['check'])) {

foreach ($_POST['check'] as $value) {
    echo "</br>" . $value;

    $checked[$value] = "checked";



}
?>

<form action="index.php" method="post">

    <input type="checkbox" name="check[]" value="adriano" <?php echo $checked["adriano"]; ?>>Adriano
    <input type="checkbox" name="check[]" value="celentano" <?php echo $checked["celentano"]; ?>>Celentano
    <input type="checkbox" name="check[]" value="martin" <?php echo $checked["martin"]; ?>>martin
    <input type="submit" name="submit" value="postint">
    <?php


    } else { ?>

    <form action="index.php" method="post">

        <input type="checkbox" name="check[]" value="adriano">Adriano
        <input type="checkbox" name="check[]" value="celentano">Celentano
        <input type="checkbox" name="check[]" value="martin">martin
        <input type="submit" name="submit" value="postint">
        <?php
        }
        ?>



