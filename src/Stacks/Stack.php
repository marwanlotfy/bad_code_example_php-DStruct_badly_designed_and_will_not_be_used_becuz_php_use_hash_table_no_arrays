<?php

namespace DataStruct\Stacks;

use DataStruct\StoringStrategies\LIFOAble;

class Stack 
{
    private $storingStrategy;

    public function __construct( LIFOAble $storingStrategy )
    {
        $this->storingStrategy = $storingStrategy;
    }

    public function push($data)
    {
        $this->storingStrategy->append($data);
    }

    public function pop()
    {
        return $this->storingStrategy->getLastElement();
    }
}
