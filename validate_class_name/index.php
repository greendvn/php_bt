<?php

function validateClassName($className){
    $regexp = "/^[CAP][0-9]{4,4}[GHIKLM]$/";
    if ( preg_match($regexp,$className))
        echo "valid class name";
    else
        echo "invalid class name";

}

$class1 = "C0318G";
$class2 = "M0318G";
$class3 = "P0323A";

validateClassName($class1);
echo "<br>";
validateClassName($class2);
echo "<br>";
validateClassName($class3);
echo "<br>";
