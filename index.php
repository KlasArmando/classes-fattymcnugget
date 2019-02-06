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

class Customer{
  public  $name;
   public $age;
   public $customerNumber;

   public function  __construct($name,$age,$customerNumber)
   {
       $this->name=$name;
       $this->age=$age;
       $this->customerNumber=$customerNumber;
   }
}

$customer= new Customer('Bart',17 , 83);
var_dump($customer);