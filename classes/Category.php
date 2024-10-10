<?php

require_once __DIR__ . "/Product.php";

class Category {
    public string $type;
    public string $icon;

    public function __construct($type, $icon)
    {
        $this->type = $type;
        $this->icon = $icon;
    }
}