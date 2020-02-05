<?php
include_once "Shape.php";

class Triangle extends Shape
{
    public $side1 = 1.0;
    public $side2 = 1.0;
    public $side3 = 1.0;

    public function __construct()
    {
        parent::__construct();
    }


    public function isTriangle()
    {
        if($this->side1+$this->side2<=$this->side3||$this->side2+$this->side3<=$this->side1||
            $this->side1+$this->side3<=$this->side2||$this->side1<=0||$this->side2<=0||$this->side3<=0) {
            return false;
        }
        return true;
    }
    public function setTriangle($side1,$side2,$side3){
        $this->side3 = $side3;
        $this->side2 = $side2;
        $this->side1 = $side1;
    }


    /**
     * @return float
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @return float
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @return float
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param float $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @param float $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @param float $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function getPerimeter()
    {
        return $this->side1+$this->side2+$this->side3;
    }
    public function getArea(){
        $p = $this->getPerimeter()/2;
        $S = sqrt($p*($p - $this->side1)*($p - $this->side2)*($p - $this->side3));
        return $S;
    }
    public function toString()
    {
        if($this->isTriangle())
            echo $this->name.' has color:'.$this->color.', perimerter: '.$this->getPerimeter().', Area: '.$this->getArea();
        else
            echo "it not a triangle";
    }

}
