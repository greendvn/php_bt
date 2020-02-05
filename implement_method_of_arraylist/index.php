<?php

include_once "MyList.php";
include_once "MyListTest.php";

$list = new MyList(MyList::$DEFAULT_CAPACITY);
$list->addLast(1);
var_dump($list);
echo "<br/>";
$list->addLast(2);
$list->addLast(2);
$list->addLast(2);
$list->addLast(2);
echo $list->size();
var_dump($list);
echo "<br/>";

$list->add(1,3);
$list->add(1,3);
$list->add(1,3);
echo $list->size();
var_dump($list);
echo "<br/>";

$list->remove(1);
var_dump($list);
echo "<br/>";
echo $list->size();
