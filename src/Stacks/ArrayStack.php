<?php

namespace DataStruct\Stacks;

class ArrayStack extends Stack 
{
    private $dataStck;

    public function __construct()
    {
        $this->dataStck = [];
    }

    public function push($data)
    {
        $this->dataStck[] = $data;
    }

    public function pop()
    {
        return end($this->dataStck);
    }
}

