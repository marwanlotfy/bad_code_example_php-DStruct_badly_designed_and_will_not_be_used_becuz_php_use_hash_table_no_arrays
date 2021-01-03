<?php

namespace DataStruct\StoringStrategies\LinkedLists;

use DataStruct\StoringStrategies\StoringStrategyContract;

class LinkedList implements StoringStrategyContract
{    
    private $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function append($data)
    {
        $node = new class {
            public $data;
            public $next = null;
        };

        $node->data = $data;
        $node->next = $this->head;
        $this->head = $node;
    }

    public function getLastElement()
    {
        if ($this->head) {
            $node = $this->head;
            $this->head = $this->head->next;
            return $node->data;
        }
    }

    public function getFirstElement()
    {
        $pointer = $this->head;

        // if a -> null 
        if ($pointer->next == null) {
            $data = $pointer->data;
            $pointer = null;
            return $data;
        }

        // a -> b -> c -> d -> null

        // i want c to free d out of the list 
        // by setting next of c to null 
        // and return the data inside d which is $c->next->data

        while ($pointer->next->next != null) {
            $pointer = $pointer->next; 
        } // $pointer now  points to c 

        
        $data = $pointer->next->data;

        $pointer->next = null;
        // a -> b -> c -> -> null

        return $data;
    }
}
