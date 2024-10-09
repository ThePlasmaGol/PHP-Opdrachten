<?php
class Product {
    public string $name;
    public float $price;
    public string $currency;

    public function __construct(string $name, float $price, string $currency) {
        $this->name = $name;
        $this->price = $price;
        $this->currency = $currency;
    }

    public function getProduct(): string {
        return "Het product " . $this->name . " kost " . $this->currency . " " . $this->price;
    }
}

// Maak drie producten aan
$product1 = new Product(name: "Techno Beats", price: 2.0, currency: "€");
$product2 = new Product(name: "Classic Harmony", price: 3.5, currency: "€");
$product3 = new Product(name: "Jazz Vibes", price: 4.0, currency: "€");

// Echo het resultaat van getProduct voor elk product
echo $product1->getProduct();
echo $product2->getProduct();
echo $product3->getProduct();
