<?php
//namespace testShapes;

include_once "Rectangle.php";
include_once (dirname(__FILE__) ."/../interfaceClass/Resizeble.php");
include_once (dirname(__FILE__) ."/../interfaceClass/Colorable.php");



class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function howtoColor(){
        echo 'Color all four side';
}
}