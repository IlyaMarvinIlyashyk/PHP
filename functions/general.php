<?php

require 'Item.php';
require 'Book.php';

$my_item = new Item('Ilya', 'hello');

// $my_item -> setName('Example');
// $my_item -> setDesc('Description');

$my_item -> name = "a new name";

$book = new Book();
echo $book-> author = "Miller";


echo $my_item -> getName();
// echo $my_item -> getDesc();

// $my_item -> name = "Ilya";
// $my_item -> description = "Override";
// $my_item -> price = 2.99;
// $my_item -> sayHello();

// $item2 = new Item();
// $item2 -> name = "Dave";
//
// echo $item2 -> getName(), " ", $my_item -> getName();

define('MAXIMUM', 100);

echo MAXIMUM;

?>
