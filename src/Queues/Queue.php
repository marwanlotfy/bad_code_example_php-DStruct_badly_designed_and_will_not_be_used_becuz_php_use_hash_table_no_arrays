<?php
namespace DataStruct\Queues;

use DataStruct\StoringStrategies\FIFOAble;

class Queue
{
    private $storingStrategy;

    public function __construct( FIFOAble $storingStrategy )
    {
        $this->storingStrategy = $storingStrategy;
    }

    public function addElement($data)
    {
        $this->storingStrategy->append($data);
    }

    public function getElement()
    {
        return $this->storingStrategy->getFirstElement();
    }
}
