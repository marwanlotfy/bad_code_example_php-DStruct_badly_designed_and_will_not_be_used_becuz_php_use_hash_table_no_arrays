<?php

use DataStruct\Queues\Queue;
use DataStruct\Stacks\Stack;
use DataStruct\StoringStrategies\ArrayLists\ArrayList;
use DataStruct\StoringStrategies\LinkedLists\LinkedList;

require __DIR__ . '/vendor/autoload.php';

$stack = new Stack(new ArrayList);

$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);

echo $stack->pop();
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();

$queue = new Queue(new LinkedList);

$queue->addElement(1);
$queue->addElement(2);
$queue->addElement(3);
$queue->addElement(4);

echo $queue->getElement();
echo $queue->getElement();
echo $queue->getElement();
echo $queue->getElement();
