<?php
//namespace testShapes;

include_once "Shape.php";
include_once (dirname(__FILE__)."/../interfaceClass/Resizeble.php");


class Rectangle extends Shape implements Resizeble
{
    public $width;
    public $height;

    public function __construct($name,$width,$height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function resize($rate)
    {
        return $this->width*$this->height*pow((100+$rate)/100,2);
    }

    public function calculateArea(){
        return $this->width*$this->height;
    }
    public  function calculatePerimeter(){
        return ($this->width+$this->height)*2;
    }
}