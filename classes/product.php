<?php 

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Game.php";

class Product {
    public string $name;
    public float $price;
    public int $inStock;
    public string $locate;
    public Category $category;

    public function __construct($name, $price, $inStock, $locate, $category)
    {
      $this->name = $name;
      $this->price = $price;
      $this->inStock = $inStock;
      $this->locate = $locate;
      $this->category = $category;
    }

    public function buy($bought){
      if($this->inStock >= 0 && $bought > 0){
        $bought = $this->inStock * $this->price;
      } else {
        throw new ArithmeticError ('Non puoi acquistare un numero di oggetti inferiore a zero');
      }
      return $bought;
    }
}