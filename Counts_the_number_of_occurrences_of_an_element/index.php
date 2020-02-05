<?php

function countNumberOfOccurenceOfAnElement($numbers,$value){
    $count = 0;
    foreach ($numbers as $number){
        if ($value == $number)
            $count++;
    }
    return $count;
}

$numbers = [1,2,3,4,5,2,4,6,7,3,7];
echo countNumberOfOccurenceOfAnElement($numbers,2);