<?php
include "ComparableCircle.php";
$circleOne = new ComparableCircle(8,'circleOne');
$circleTwo =  new ComparableCircle(2, 'circleTwo');
var_dump($circleOne->CompareTo($circleTwo));