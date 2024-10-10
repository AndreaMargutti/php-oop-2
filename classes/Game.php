<?php

require_once __DIR__ . "/Product.php";

class Game extends Product {
    public bool $sound;
    public string $gameType;
    

    public function __construct($name, $price, $locate, $category, $sound, $gameType)
    {
        parent::__construct($name, $price, $locate, $category);
        $this->sound = $sound;
        $this->gameType = $gameType;
    }   
}