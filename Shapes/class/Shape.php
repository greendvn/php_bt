<?php
//namespace testShapes;


class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name=$name;
    }
    public function show(){
        echo "I am a shape, my name is $this->name";
    }

}