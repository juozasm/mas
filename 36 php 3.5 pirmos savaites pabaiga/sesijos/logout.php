<?php 
session_start();

//jei norime sunaikinti tik vieną kintamąjį:
//unset($_SESSION["counter"]);

// Nužudyt visą sesiją
session_destroy();