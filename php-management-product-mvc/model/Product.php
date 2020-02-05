<?php


namespace Model;


class Product
{
    protected $id;
    protected $name;
    protected $price;
    protected $description;
    protected $manufacturer;

    public function __construct($name,$price,$description,$manufacturer)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->manufacturer  = $manufacturer;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }
}