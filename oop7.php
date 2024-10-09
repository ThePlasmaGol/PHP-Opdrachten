<?php
class Product {
    public function __construct(
        private string $name,
        private float $price,
        private string $currency
    ) {}

    // Voeg eventuele extra methodes toe indien nodig
}

// Voorbeeld van het aanmaken van een product
$product1 = new Product(name: "Techno Beats", price: 2.0, currency: "€");
