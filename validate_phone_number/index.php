<?php
function validatePhoneNumber($phoneNumber){
    $regexp = "/^\(\d{2,2}\)\-\(0\d{9,9}\)$/";
    if(preg_match($regexp,$phoneNumber))
        echo "valid";
    else
        echo "invalid";
}

$phone1 = "(84)-(0978499648)";
$phone2 = "(a8)-(22222222)";

validatePhoneNumber($phone1);
echo "<br>";
validatePhoneNumber($phone2);