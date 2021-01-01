<?php

namespace DataStruct\LinkedLists;

class Node  
{
    private $data;
    private $next;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
          return $this->$property;
        }
    }
    
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
}
