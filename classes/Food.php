<?php

require_once __DIR__ . "/Product.php";

class Food extends Product {
    public string $brand;
    public string $solidity;
    public mixed $size;

    public function __construct($price, $locate, $category,
    $brand, $solidity, $size)
    {
        parent::__construct("Cibo", $price, $locate, $category);
        $this->brand = $brand;
        $this->solidity = $solidity;
        $this->size = $size;
    }
}