<?php
include_once(dirname(__FILE__) . '/../AbstractClass/animal.php');


class Tiger extends animal
{
    public function makeSound()
    {
        return "Tiger: roarrrrr!";
    }

}