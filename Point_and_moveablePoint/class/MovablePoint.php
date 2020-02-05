<?php
include_once "Point.php";


class MovablePoint extends Point
{
    public $xSpeed = 0.0;
    public $ySpeed = 0.0;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return int
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @return int
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param int $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @param int $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function setSpeed($xSpeed,$ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        $arrSpeed = [];
        array_push($arrSpeed,$this->xSpeed,$this->ySpeed);
        return $arrSpeed;
    }
    public function toString()
    {
        return parent::toString().',speed = ('.$this->xSpeed.','.$this->ySpeed.')';
    }
    public function move(){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this;
    }
}