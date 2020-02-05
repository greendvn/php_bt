<?php


class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

}