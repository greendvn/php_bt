<?php
include_once "Point2D.php";


class Point3D extends Point2D
{
    public $z = 0.0;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @param int $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    /**
     * @return int
     */
    public function getZ()
    {
        return $this->z;
    }
    public function setXYZ($x, $y,$z)
    {
        parent::setXY($x, $y);
        $this->z = $z;
    }
    public function getXYZ()
    {
        $arr = parent::getXY();
        array_push($arr,$this->z);
        return $arr;
    }
    public function toString()
    {
        return '('.$this->x.','.$this->y.','.$this->z.')';
    }


}