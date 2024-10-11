<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/../traits/possibleSellers.php";

class Game extends Product {
    public bool $sound;
    public string $gameType;

    use possibleSellers;

    public function __construct($name, $price, $locate, $category, $sound, $gameType, $possibleSeller)
    {
        parent::__construct($name, $price, $locate, $category);
        $this->sound = $sound;
        $this->gameType = $gameType;
        $this->possibleSellers = $possibleSeller;
    }   
}