<?php

include_once "MyLinkedList.php";

$myList = new MyLinkedList();
var_dump($myList);
echo "<br>";
$myList->addFirst(1);
$myList->addLast(2);
$myList->addLast(2);
var_dump($myList);
echo "<br>";
$myList->add(2,3);
var_dump($myList);
echo "<br>";
var_dump($myList->get(3));