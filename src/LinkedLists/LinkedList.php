<?php

namespace DataStruct\LinkedLists;

class LinkedList  
{
    private $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function push($data)
    {
        $node = new Node($data);
        $node->next = $this->head;
        $this->head = $node;
    }

    public function pop()
    {
        if ($this->head) {
            $node = $this->head;
            $this->head = $this->head->next;
            return $node->data;
        }
    }
}
