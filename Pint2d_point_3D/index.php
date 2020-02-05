<?php
include_once "class/Point2D.php";
include_once "class/Point3D.php";

$point2D = new Point2D(1,2);
$point3D = new Point3D(1,2,3);

var_dump($point2D->getXY());
echo "<br/>";
echo $point2D->toString();
echo "<br/>";
var_dump($point3D->getXYZ());
echo "<br/>";
echo $point3D->toString();



