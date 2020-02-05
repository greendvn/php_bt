<?php
include_once "class/Circle.php";
include_once "class/Cylinder.php";

$circle = new Circle(5,"blue");
$cylinder = new Cylinder(5,4,"red");
$circle->toString();
echo "<br>";
$cylinder->toString();