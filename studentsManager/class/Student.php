<?php
namespace Controller;

class Student
{
    public $name;
    public $age;
    public $address;
    public $group;
    public $image;

    public function __construct($name, $age, $address, $group,$image)
    {

        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->group = $group;
        $this->image = $image;
    }



    /**
     * @return mixed
     */

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getInfo()
    {
        return "Name: " . $this->name . "- Address: " . $this->address;
    }
}