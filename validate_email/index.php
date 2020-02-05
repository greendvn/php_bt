<?php
function validateEmail($email){
    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if(preg_match($regexp,$email))
        echo "valid Email";
    else
        echo "invalid email";
}

$email1 = "a@gmail.com";
$email2 = "ab@yahoo.com";
$email3 = "abc@hotmail.com";
$email4 = "@gmail.com";
$email5 = "ab@gmail.";
$email6 = "@#abc@gmail.com";
validateEmail($email1);
echo "<br>";
validateEmail($email2);
echo "<br>";
validateEmail($email3);
echo "<br>";
validateEmail($email4);
echo "<br>";
validateEmail($email5);
echo "<br>";
validateEmail($email6);
echo "<br>";