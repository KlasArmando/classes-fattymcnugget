<?php

class Product{
    public $name;
    public $price;

    public function __construct($name,$price)
    {
        $this->name= $name;
        $this->price= $price;
    }
}
$product = new Product("Pewdiepie chair",399);
var_dump($product);