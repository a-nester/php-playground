<?php

class Car {
    // properties
    public $brand;
    public $color;

    public function drive() {
        echo "I drive $this->brand of $this->color color";
    }
}

$myCar = new Car();
$myCar->brand = 'Toyota';
$myCar->color = 'Blue';

// $myCar->drive();

class User {
    public $name;
    public $email;

    public function introduce() {
        echo "Hello, my name is $this->name, my email is $this->email";
    }
}

$user = new User();
$user->name = "Alex";
$user->email = "alex@gmail.com <br>";

$user->introduce();

// class Product {
//     public $title;
//     public $price;

//     public function showInfo() {
//         echo "Product: $this->title. Price: $this->price uah ";
//     }
// }

// $product = new Product();
// $product->title = "TV";
// $product->price = 2000;

// $product->showInfo();

class Product {
    public $title;
    public $price;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function showInfo() {
        echo "Product: $this->title. Price: $this->price uah <br>";
    }
    
};

$product = new Product("Alex", 2000);
$product->showInfo();


class AutoPart {
    public $name;
    public $manufacturer;
    public $price;
    public $category;
    public $quantity;
    public $inStock;

    public function __construct($name, $manufacturer, $price, $category, $quantity ) {
        $this->name = $name;
        $this->manufacturer = $manufacturer;
        $this->price = $price;
        $this->category = $category;
        $this->quantity = $quantity;
        if($quantity > 0) {
            $this->inStock = true;
        } else {
            $this->inStock = false;
        }
    }

    public function applyDiscount($discount) {
        if($discount > 0 && $discount < 100) {
            $this->price = $this->price * ((100 - $discount)/100);
        }
    }

    public function displayInfo() {
        $available = $this->inStock ? "Yes" : "No";
        return "Part name: $this->name <br>
        manufacturer: $this->manufacturer <br>
        price: $this->price uah <br>
        category: $this->category <br>
        quantity: $this->quantity <br>
        available: $available <br>";
    }
};

// $part = new AutoPart("Filter", "Man", 299);

// $part->displayInfo();

$parts = [
    [
        "name" => "Filter",
        "manufacturer" => "Man",
        "price" => 299,
        "category" => "engine",
        "quantity" => 3,
    ],
    [
        "name" => "Oil",
        "manufacturer" => "Shell",
        "price" => 1500,
        "category" => "engine",
        "quantity" => 3,
    ],
    [
        "name" => "Tyre",
        "manufacturer" => "Goodyear",
        "price" => 3000,
        "category" => "engine",
        "quantity" => 3,
        ]
    ];

    $results = [];

    foreach($parts as $part) {
        $newpart = new AutoPart($part["name"], $part["manufacturer"], $part["price"], $part["category"], $part["quantity"]);
        $results[] = $newpart->displayInfo();
    }

    foreach($results as $result) {
        echo $result;
    }

    $newpart = new AutoPart("Brake Pads", "Brembo", 1200, "brakes", 5);
$newpart->applyDiscount(15); // -15% знижка
echo $newpart->displayInfo();