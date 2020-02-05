<?php
include "CircleComparator.php";
$circleOne = new Circle(6,"circleOne");
$circleTwo = new Circle(4,"circleTwo");
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne,$circleTwo));