<?php
class person{
    private $name;

    /**
     * @param mixed $name
     */
    public function __construct($personName)
    {
        $this->name =$personName;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}
?>