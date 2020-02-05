<?php
include_once "Node.php";


class MyLinkedList
{
    public $head;
    public $numNode;

    public function __construct()
    {
        $this->head = new Node(NULL);
        $this->numNode = 0;
    }

    public function add($index, $data)
    {
        if ($index = 0)
            $this->addFirst($data);
        else {
            $newNode = new Node($data);
            $current = $this->head;
            $previous = $this->head;
            for ($i = 0; $i < $index; $i++) {
                $previous = $current;
                $current = $current->next;
            }
            $previous->next = $newNode;
            $newNode->next = $current;
            $this->numNode++;
        }
    }

    public function addFirst($data)
    {
        $newNode = new Node($data);
        if ($this->head->next == NULL)
            $this->head->next = $newNode;
        else {
            $currentFirstNode = $this->head->next;
            $this->head->next = $newNode;
            $newNode->next = $currentFirstNode;
        }
        $this->numNode++;
    }

    public function addLast($data)
    {
        if ($this->head->next != NULL) {
            $newNode = new Node($data);
            $lastNode = $this->head;
            while ($lastNode->next != NULL) {
                $lastNode = $lastNode->next;
            }
            $lastNode->next = $newNode;
            $this->numNode++;
        } else
            $this->addFirst($data);
    }

    public function removeByIndex($index)
    {
        $current = $this->head;
        $previous = $this->head;
        for ($i = 0; $i < $index; $i++) {
            $previous = $current;
            $current = $current->next;
        }
        $previous->next = $current->next;
        $this->numNode--;
    }

    public function removeByObject($object)
    {
        $current = $this->head;
        $previous = $this->head;
        while ($current->data != $object->data) {
            $previous = $current;
            $current = $current->next;
        }
        $previous->next = $current->next;
        $this->numNode--;
    }

    public function get($index)
    {
        if ($index <= $this->size()) {
            $current = $this->head;
            for ($i = 0; $i < $index; $i++) {
                $current = $current->next;
            }
            return $current;
        } else
            return NULL;
    }

    public function contain($object)
    {
        $current = $this->head;
        while ($current->next != NULL)
            if ($current->data == $object->data)
                return true;
            else
                $current = $current->next;
        return false;
    }

    public function indexOf()
    {
        $current = $this->head;
        for ($i = 0; $i < $this->size(); $i++)
            if ($object->data == $current->data)
                return $i;
            else
                $current = $current->next;
    }

    public function getFirst()
    {
        return $this->head->next;
    }

    public function getLast()
    {
        return $this->get($this->size());
    }

    public function size()
    {
        return $this->numNode;
    }

    public function printList()
    {
        $current = $this->head;
        while ($current->next != NULL)
            echo $current->data." ";
    }
    public function clear(){
        while ($this->size()>0)
            $this->removeByIndex($this->size());
    }


}