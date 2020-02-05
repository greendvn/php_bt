<?php
//namespace testShapes;

include_once "Shape.php";
include_once (dirname(__FILE__)."/../interfaceClass/Resizeble.php");

class Circle extends Shape implements Resizeble
{
    public $radius;

    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function resize($rate)
    {
        return pi()*pow($this->radius*(100+$rate)/100,2);
    }

    public function calculateArea(){
        return pi()*pow($this->radius,2);
    }
    public function calculatePerimeter(){
        return 2*pi()*$this->radius;
    }

}
