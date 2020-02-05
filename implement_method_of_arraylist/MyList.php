<?php


class MyList
{
    private $size = 0;
    static $DEFAULT_CAPACITY = 10;
    private $elements = array();
    private $capacity;

    public function __construct($capacity)
    {
        $this->capacity = $capacity;
    }

    public function add($index, $element)
    {
        if ($this->isInteger($index) && $this->size < $this->capacity && $index < $this->size())
            array_splice($this->elements, $index, 0, $element);
        else
            die("ERROR in ArrayList.get");
    }

    public function remove($index)
    {
        if ($this->isInteger($index) && $index <= $this->size())
            array_splice($this->elements,$index,1);
        return $this->elements;

    }

    public function size()
    {
        return count($this->elements);
    }
    public function clone(){
        return $this->elements;
}

    public function contains($obj)
    {
        for ($i = 1; $i < $this->size(); $i++) {
            if ($this->elements[$i] == $obj) {
                return true;
            }
        }
        return false;
    }
    public function indexOf($element){
        for ($i = 0;$i < $this->size();$i++){
            if ($element == $this->elements[$i])
                return $i;
        }
        return -1;
    }
    public function addLast($element){
        if($this->size()<$this->capacity) {
            array_push($this->elements, $element);
            return true;
        }
        return false;

    }

    public function ensureCapacity($minCapacity){
        $this->capacity+=$minCapacity;
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->elements[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }
    public function clear(){
        $this->elements = [];
    }


    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

}