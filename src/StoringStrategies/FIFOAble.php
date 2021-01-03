<?php

namespace DataStruct\StoringStrategies;

interface FIFOAble
{
    public function append( $data );

    public function getFirstElement();
}