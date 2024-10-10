<?php

require_once __DIR__ . "/Product.php";

class Category extends Product {
    public string $type;
    public string $icon;

    public function __construct($name, $price, $locate, $type, $icon)
    {
        parent::__construct($name, $price, $locate);
        $this->type = $type;
        $this->icon = $icon;
    }
}