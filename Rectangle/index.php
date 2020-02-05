<?php
class Rectangle{
    public $width;
    public $height;

    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return $this->width*$this->height;
    }
    public function getPerimeter(){
        return 2*($this->width+$this->height);
    }
    public function display(){
        return "{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}

    $width  = 10;
    $height = 20;
    $rectangle = new Rectangle($width, $height);
    echo $rectangle->width;
    echo "<br/>";
    echo $rectangle->height;
    echo "<br/>";


    $rectangle->height = 30;
    $rectangle->width = 20;

    echo $rectangle->height;
    echo "<br/>";
    echo $rectangle->width;
    echo "<br/>";
    echo $rectangle->getPerimeter();
    echo "<br/>";
    echo $rectangle->getArea();
    echo "<br/>";
    echo ("Your Rectangle". $rectangle->display());
?>