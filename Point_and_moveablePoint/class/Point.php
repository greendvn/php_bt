<?php


class Point
{
    public $x = 0.0;
    public $y = 0.0;

    public function __construct($x,$y)
    {
        $this->x =$x;
        $this->y = $y;
    }

    /**
     * @param int $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param int $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY(){
        $arr = [];
        array_push($arr,$this->x,$this->y);
        return $arr;
    }
    public function toString(){
        echo '('.$this->x.','.$this->y.')';
    }

}