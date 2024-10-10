<?php
require_once __DIR__ . "/../classes/Product.php";

$products = [
    // # Food 1
    new Food("Crocchette Junior", 5, "2A", new Category("Cani", "https://cdn-icons-png.flaticon.com/512/620/620851.png"), "JuniorFood", "Secco", "10Kg"),
    // # Game 1
    new Game("Rimbalz Ball", 3, "3C", new Category("Cani", "https://cdn-icons-png.flaticon.com/512/620/620851.png"), true, "Pallina"),
    // # Food 2
    new Food("Carne in Scatola", 20, "2B", new Category("Gatti", "https://cdn-icons-png.flaticon.com/512/220/220124.png"), "Rich Dogs", "Umido", "100g"),
    // # Game 2
    new Game("Mega Castle", 50, "3D", new Category("Gatti", "https://cdn-icons-png.flaticon.com/512/220/220124.png"), false, "Castle")
];

// var_dump($products);