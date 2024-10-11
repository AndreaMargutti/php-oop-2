<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/../traits/possibleSellers.php";

class Food extends Product {
    public string $brand;
    public string $solidity;
    public mixed $size;

    use possibleSellers;

    public function __construct($name, $price, $inStock, $locate, $category,
    $brand, $solidity, $size, $possibleSellers)
    {
        parent::__construct($name, $price, $inStock, $locate, $category,);
        $this->brand = $brand;
        $this->solidity = $solidity;
        $this->size = $size;
        $this->possibleSellers = $possibleSellers;
    }
}