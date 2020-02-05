<?php
//namespace testShapes;

include_once('class/Circle.php');
include_once('class/Cylinder.php');
include_once('class/Rectangle.php');
include_once('class/Square.php');


$rate = rand(1,100);
$shapes = [];
$shapes[0] = new Circle('Circle 01', 3);
echo $shapes[0]->name.' area: ' . $shapes[0]->calculateArea() . '<br />';
echo 'resize: '. $rate.'%,  area after resize: ' . $shapes[0]->resize($rate) . '<br />';


$shapes[1] = new Rectangle('Rectangle 01', 3 , 4);
echo $shapes[1]->name.' area: ' . $shapes[1]->calculateArea() . '<br />';
echo 'resize '.$rate.'%, area after resize: ' . $shapes[1]->resize($rate) . '<br />';

$shapes[2] = new Square('Square 01', 4 );
echo $shapes[2]->name.' area: ' . $shapes[2]->calculateArea() . '<br />';
echo 'resize: '.$rate.'%,  area after resize: ' . $shapes[2]->resize($rate) . '<br />';

foreach ($shapes as $shape ){
    if($shape instanceof Colorable){
        echo $shape->name." ";
        $shape->howtoColor();
    }
}