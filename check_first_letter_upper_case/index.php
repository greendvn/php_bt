<?php
function isFirstLetterUpperCase ($str) {
    $regexp = '/^[A-Z]/';
    if(preg_match($regexp,$str))
        echo ("String's first character is uppercase");
    else
        echo ("String's first character is not uppercase");
}

isFirstLetterUpperCase("codeGym");
$str1 = "Nguyen van Nam";
$str2 = "NGUYEN VAN NAM";
$str3 = "nguyen van Nam";
echo "<br>";
isFirstLetterUpperCase($str1);
echo "<br>";

isFirstLetterUpperCase($str2);
echo "<br>";

isFirstLetterUpperCase($str3);