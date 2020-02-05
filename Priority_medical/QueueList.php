<?php
include_once "Patient.php";
include_once "Node.php";

class QueueList
{
    public $front = NULL;
    public $back = NULL;

    public function isEmpty()
    {
        if ($this->front == NULL)
            return true;
        return false;
    }

    public function enqueue($object)
    {
        $oldBack = $this->back;
        $newNode = new Node();
        $this->back = $newNode;
        $this->back->object = $object;
        if ($this->isEmpty())
            $this->front = $this->back;
        else
            $oldBack->next = $this->back;
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return NULL;
        }


        $removeValue = $this->front->object;
        $current = $this->front->next;
        while ($current->object != NULL) {
            if ($removeValue->code > $current->object->code) {
                $temp = $removeValue;
                $removeValue = $current->object;
                $current->object = $temp;
            }
            $current = $current->next;
        }

        $this->front = $this->front->next;
        return $removeValue;
    }
    public function sortByCode(){
        $current = $this->front;
        $previous = null;
        while ($current!=null){
            $previous = $current;
            $current = $current->object->code;
        }

    }

    public function toString()
    {
        $current = $this->front;
        $listPatient = '';
        while($current!= NULL) {
            $listPatient .= ' name: ' . $current->object->name . ' Code: ' . $current->object->code . ' <br>';
            $current = $current->next;
        }
        echo $listPatient;
    }

}