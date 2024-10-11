<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/../traits/possibleSellers.php";

class Kennel extends Product {
    public int $height;
    public int $width;

    use possibleSellers;

    public function __construct($name, $price, $inStock, $locate, $category, $height, $width, $possibleSeller)
    {
     parent::__construct($name, $price, $inStock, $locate, $category);
     $this->height = $height;
     $this->width = $width;
     $this->possibleSellers = $possibleSeller;
    }
}