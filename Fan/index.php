<?php
include "Fan.php";
include "SpeedConstant.php";

$fan1 = new Fan();
$fan1->setOn(true);
$fan1->setSpeed(SpeedConstant::FAST);
$fan1->setColor("yellow");
$fan1->setRadius(10);

$fan2 = new Fan();
$fan2->__construct();
$fan2->setSpeed(SpeedConstant::MEDIUM);

echo "fan1: " . $fan1->toString();
echo "<br>";
echo "fan2: " . $fan2->toString();