<?php

class Kennel extends Product {
    public int $height;
    public int $width;

    public function __construct($name, $price, $inStock, $locate, $category, $height, $width)
    {
     parent::__construct($name, $price, $inStock, $locate, $category);
     $this->height = $height;
     $this->width = $width;
    }
}