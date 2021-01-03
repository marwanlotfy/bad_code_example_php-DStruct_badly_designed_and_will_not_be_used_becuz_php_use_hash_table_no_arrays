<?php

namespace DataStruct\StoringStrategies\ArrayLists;

use DataStruct\StoringStrategies\StoringStrategyContract;

class ArrayList implements StoringStrategyContract
{
    private $list = [];

    public function append( $data )
    {
        $this->list[] = $data;
    }

    public function getLastElement()
    {
        return array_pop($this->list);
        
    }

    public function getFirstElement()
    {
        return array_shift($this->list);
    }
}
