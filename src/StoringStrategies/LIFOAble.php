<?php

namespace DataStruct\StoringStrategies;

interface LIFOAble
{
    public function append( $data );

    public function getLastElement();
}