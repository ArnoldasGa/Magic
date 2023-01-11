<?php

include_once "Order.php";

$magic = new Order("pending", 100, "aaa@gmail.com");
$magic2 = new Order("pending", 100, "aaa@gmail.com");
$magic3 = new Order("pending", 100, "aaa@gmail.com");

// var_dump($magic);

$newItem = clone $magic;
$newItem2 = clone $magic2;
$newItem3 = clone $magic3;

// var_dump($magic);
echo $magic . " Old item 1" . PHP_EOL;
echo $magic2 . " Old item 2" . PHP_EOL;
echo $magic3 . " Old item 3" . PHP_EOL;
echo $newItem . " New item 1" . PHP_EOL;
echo $newItem2 . " New item 1" . PHP_EOL;
echo $newItem3 . " New item 1" . PHP_EOL;