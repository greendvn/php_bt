<?php

include_once "Queue.php";
include_once "Node.php";


$list = new Queue();
var_dump($list->isEmpty());
echo "<br>";
$list->enqueue(1);
$list->enqueue(2);
$list->enqueue(3);


var_dump($list);
echo "<br>";
$list->dequeue();
$list->dequeue();
var_dump($list);
echo "<br>";
$list->enqueue(4);
$list->enqueue(5);
var_dump($list);
echo "<br>";
$list->dequeue();
$list->dequeue();
$list->dequeue();
var_dump($list->isEmpty());


