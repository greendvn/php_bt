<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($radius,$color)
    {
        $this->color = $color;
        $this->radius = $radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
    public function getArea (){
        return pi()*pow($this->radius,2);
    }
    public function getPerimeter(){
        return pi()*2*$this->radius;
    }
    public function toString(){
        echo "circle has area: ".$this->getArea().", perimeter: ".$this->getPerimeter().", color: ".$this->color;
    }

}