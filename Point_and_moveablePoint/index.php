<?php
include_once "class/Point.php";
include_once "class/MovablePoint.php";

$point = new Point(0, 0);
$moveablePoint = new MovablePoint(0, 0, 0, 0);

var_dump($moveablePoint);
$point->toString();
echo '<br>';
$moveablePoint->setXY(2, 0);
$point->toString();
echo '<br>';
$moveablePoint->setSpeed(3, 3);
echo $moveablePoint->getSpeed();
echo $moveablePoint->toString();
echo '<br>';
$point = $moveablePoint->move();
$point->toString();

?>