<?php
include_once(dirname(__FILE__) . '/../AbstractClass/animal.php');
include_once(dirname(__FILE__) . '/../InterfaceClass/Edible.php');



class Chicken extends animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }
    public function howToEat()
    {
        return "could be fried";
    }
}