<?php
include_once "Node.php";

class Queue
{
    public $front = NULL;
    public $back = NULL;

    public function isEmpty()
    {
        if ($this->front == NULL)
            return true;
        return false;
    }

    public function enqueue($value){
        $oldBack = $this->back;
        $newNode = new Node();
        $this->back = $newNode;
        $this->back->value = $value;
        if($this->isEmpty())
            $this->front = $this->back;
        else
            $oldBack->next = $this->back;
    }
    public function dequeue(){
        if($this->isEmpty())
            return NULL;
        $removeValue = $this->front->value;
        $this->front = $this->front->next;
        return $removeValue;
    }

}