<?php

include_once "Node.php";
include_once "Patient.php";
include_once "QueueList.php";

$list = new QueueList();
$patient1 = new Patient("Smith",5);
$list->enqueue($patient1);
$patient2 = new Patient("Jones",4);
$list->enqueue($patient2);
$patient3 = new Patient("Fehrenbach",6);
$list->enqueue($patient3);
$patient4 = new Patient("Brown",1);
$list->enqueue($patient4);
$patient5 = new Patient("Ingram",1);
$list->enqueue($patient5);
var_dump($list);
echo "<br>";
$list->toString();
echo $list->dequeue()->name;
echo "<br>";
echo $list->dequeue()->name;
echo "<br>";
echo $list->dequeue()->name;
echo "<br>";
echo $list->dequeue()->name;
echo "<br>";
echo $list->dequeue()->name;


