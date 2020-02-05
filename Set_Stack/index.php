<?php

include_once "StackList.php";

$list = new StackList(10);
$list->push(1);
$list->push(2);
$list->push(3);
$list->push(4);
$list->push(5);


var_dump($list);
echo "<br>";

$list->pop();
$list->pop();
$list->pop();
$list->push(6);
$list->push(7);
var_dump($list->isEmpty());
$list->pop();
$list->pop();
$list->pop();
$list->pop();
var_dump($list->isEmpty());

var_dump($list);
echo $list->top();