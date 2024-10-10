<?php 

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Game.php";

class Product {
    public string $name;
    public float $price;
    public string $locate;
    public Category $category;

    public function __construct($name, $price, $locate, $category)
    {
      $this->name = $name;
      $this->price = $price;
      $this->locate = $locate;
      $this->category = $category;
    }
}