<?php
require_once __DIR__ . "/../classes/Product.php";

$products = [
    // # Food 1
    new Food("Crocchette Junior", 5, 10, "2A", new Category("Cani", "https://cdn-icons-png.flaticon.com/512/620/620851.png"), "JuniorFood", "Secco", "10Kg", "Arcaplanet, GiocAnimali"),
    // # Game 1
    new Game("Rimbalz Ball", 3, 20, "3C", new Category("Cani", "https://cdn-icons-png.flaticon.com/512/620/620851.png"), true, "Pallina", "Arcaplanet, La Casa degli Animali"),
    // # Food 2
    new Food("Carne in Scatola", 20, 15, "2B", new Category("Gatti", "https://cdn-icons-png.flaticon.com/512/220/220124.png"), "Rich Dogs", "Umido", "100g", "Arcaplanet, GiocAnimali"),
    // # Game 2
    new Game("Mega Castle", 50, 5, "3D", new Category("Gatti", "https://cdn-icons-png.flaticon.com/512/220/220124.png"), false, "Castle", "Arcaplanet, La Casa degli Animali"),
    // # Kennel 1
    new Kennel("Cuccia SuperPro", 67, 3, "7F", new Category("Cuccia", "https://static.thenounproject.com/png/179371-200.png"), 2, 2, "Arcaplanet"),
    // # Kennel 2
    new Kennel("Cuccia Povera", 12, 33, "7E", new Category("Cuccia", "https://static.thenounproject.com/png/179371-200.png" ), 2, 2, "ArcaPlanet Lite"),

    new Food ("Cibo per SuperAnimal", 70, 100, "10Z", new Category("Cani", "https://cdn-icons-png.flaticon.com/512/620/620851.png"), "SuperAnimals", "Secco/Umido", "20kg", "ArcaPlanet, SuperAnimals, La Casa degli Animali"),
];

// var_dump($products);