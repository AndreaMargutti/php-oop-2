<?php
require_once __DIR__ . "/../classes/Product.php";

$products = [
    // # Food 1
    new Food("Crocchette Junior", 5, "2A", new Category("Cani", "Icona Cani"), "JuniorFood", "Secco", "10Kg"),
    // # Game 1
    new Game("Rimbalz Ball", 3, "3C", new Category("Cani", "Icona Cani"), true, "Pallina"),
    // # Food 2
    new Food("Carne in Scatola", 20, "2B", new Category("Gatti", "Icona Cani"), "Rich Dogs", "Umido", "100g"),
    // # Game 2
    new Game("Mega Castle", 50, "3D", new Category("Gatti", "Icona Gatti"), false, "Castle")
];

var_dump($products);