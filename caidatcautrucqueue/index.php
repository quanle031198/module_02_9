<?php
include_once 'Queue.php';
$data = new Queue();

$data->enqueue(1);
$data->enqueue(2);
$data->enqueue(3);
$data->enqueue(2);
$data->enqueue(3);
$data->dequeue();
$data->dequeue();
echo "<pre>";
print_r($data);
