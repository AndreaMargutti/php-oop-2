<?php

require_once __DIR__ . "/Product.php";

class Food extends Product {
    protected string $brand;
    protected string $solidity;
    protected mixed $size;

    public function __construct($name, $price, $locate,
    $brand, $solidity, $size)
    {
        parent::__construct($name, $price, $locate, new Category("Food", "Icona Cibo"));
        $this->brand = $brand;
        $this->solidity = $solidity;
        $this->size = $size;
    }
}