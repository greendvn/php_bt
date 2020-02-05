<?php
include_once "StackList.php";


$stackList = new StackList(10);
$arr = [1,2,3,4,5,6,7,8,9];
for($i=0;$i<count($arr);$i++)
    $stackList->push($arr[$i]);
for($i=0;$i<count($arr);$i++)
    $arr[$i]=$stackList->pop();
var_dump($arr);
