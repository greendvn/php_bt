<?php
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius,$height, $color)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }
    public function getVolume(){
        return parent::getArea()*$this->height;
    }
    public function getTotalArea()
    {
        return parent::getPerimeter()*$this->height+2*parent::getArea();
    }
    public function toString()
    {
        echo "Cylinder has total area: ".$this->getTotalArea().", volume: ".$this->getVolume().", color: ".$this->color;
    }

}