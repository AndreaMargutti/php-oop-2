<?php 

class Product {
    public string $name;
    public float $price;
    public string $locate;

    public function __construct($name, $price, $locate)
    {
      $this->name = $name;
      $this->price = $price;
      $this->locate = $locate;
    }
}