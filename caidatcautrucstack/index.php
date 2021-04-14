<?php
include_once 'Stack.php';
$data = new Stack(10);
$data->push(1);
$data->push(3);
$data->push(7);
$data->push("1");
$data->push("bb");
$data->push(0);
// $data->pop();
// echo $data->top();

echo "<pre>";
print_r($data->stack);
// var_dump( $data->isEmpty());