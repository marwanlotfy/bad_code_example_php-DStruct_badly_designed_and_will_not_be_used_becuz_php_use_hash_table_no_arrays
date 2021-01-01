<?php

namespace DataStruct\Stacks;

use DataStruct\LinkedLists\LinkedList;


class ListStack extends Stack
{
    private $list;
    public function __construct()
    {
        $this->list = new LinkedList;
    }

    public function push($data)
    {
        $this->list->push($data);
    }

    public function pop()
    {
        return $this->list->pop();
    }
}
