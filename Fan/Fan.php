<?php
//define("SLOW",1);
//define("MEDIUM",2);
//define("FAST",3);

class Fan
{

    private $speed;
    private $on;
    private $radius;
    private $color;

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return bool
     */
    public function isOn()
    {
        return $this->on;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function __construct()
    {
        $this->color = "blue";
        $this->speed = SpeedConstant::SLOW;
        $this->on = false;
        $this->radius = 5;
    }

    public function toString()
    {
        if ($this->on)
            return "fan is on, Speed: " . $this->speed . ", color: " . $this->color . ", radius: " . $this->radius;
        else
            return "fan is off, color: " . $this->color . ", radius: " . $this->radius;
    }

}