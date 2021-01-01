<?php

use DataStruct\Stacks\ListStack;
use DataStruct\Stacks\ArrayStack;

require __DIR__ . '/vendor/autoload.php';

echo " Linked List Stack ";

$lstack = new ListStack();
$lstack->push(1);
$lstack->push(2);
$lstack->push(4);

var_dump($lstack);
