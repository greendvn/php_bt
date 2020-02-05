<?php
function validateAccount($acc){
    $regexp = '/^[_a-z0-9]{6,}$/';
    if(preg_match($regexp,$acc))
        echo "valid account";
    else
        echo "invalid account";
}

$acc1 = "123abc_";
$acc2 ="_abc123";
$acc3 ="______";
$acc4 ="123456";
$acc5 ="abcdefg";
$acc6 = ".@";
$acc7 = "12345";
$acc8 = "1234_";
$acc9 = "abcde" ;

validateAccount($acc1);
echo "<br>";
validateAccount($acc2);
echo "<br>";
validateAccount($acc3);
echo "<br>";
validateAccount($acc4);
echo "<br>";
validateAccount($acc5);
echo "<br>";
validateAccount($acc6);
echo "<br>";
validateAccount($acc7);
echo "<br>";
validateAccount($acc8);
echo "<br>";
validateAccount($acc9);
echo "<br>";
