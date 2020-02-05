<?php


class StackList
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item){
        if($this->size()<$this->limit)
            array_unshift($this->stack,$item);
        else
            echo "stack is full";
    }
    public function pop(){
        if($this->isEmpty())
            echo "stack is empty";
        else
            return array_shift($this->stack);

    }
    public function top(){
        return current($this->stack);
    }

    public function size(){
        return count($this->stack);
    }
    public function isEmpty(){
        if($this->size()==0)
            return true;
        return false;
    }

}