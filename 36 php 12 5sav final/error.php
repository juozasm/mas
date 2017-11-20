<?php

$test = ['aaa', 'bbb', 'ccc'];

$json_variable = json_encode($test);

echo $json_variable;

$new_test = json_decode($json_variable);

print_r($new_test);


$test2 = "stringas";

echo json_encode($test2);

?>