<?php

$books = ["book1", "book2", "book3"];

echo $books[1];
echo "<br>";

$users = [
    "name" => "Polly",
    "email" => "polly@gmail.com",
    "age" => 21
];

echo "Name: " . $users["name"] . ", Email: " . $users["email"] . ", Age: " . $users["age"];
echo "<br>";
echo "Name: {$users["name"]}, Email: {$users["email"]}, Age: {$users["age"]}";


$products = [
    [
        "title" => "Compressor1",
        "price" => 25,
        "in_stock" => false
    ],
    [
        "title" => "Compressor2",
        "price" => 26,
        "in_stock" => true
    ],
    [
        "title" => "Compressor3",
        "price" => 27,
        "in_stock" => true
    ],
    [
        "title" => "Compressor4",
        "price" => 28,
        "in_stock" => true
    ],
];

foreach ($products as $value) {

    if ($value["in_stock"] === true) {
        echo "<br>" . $value["title"];
    }
};


$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[] = $i;
}

$acc = null;
foreach ($arr as $value) {
    $acc += $value;
}
echo "<br>";
echo $acc;


$firstNames = ["Oleh", "Anna", "Dmytro"];
$lastNames = ["Ivanov", "Shevchenko", "Bondarenko"];
$fullNames = [];
foreach ($firstNames as $key => $name) {
    $fullNames[] = $name . " " . $lastNames[$key];
}

print_r($fullNames);


$users = [
    [
        "name" => "Oleh",
        "orders" => [101, 102, 103]
    ],
    [
        "name" => "Anna",
        "orders" => []
    ],
    [
        "name" => "Dmytro",
        "orders" => [104]
    ],
];

foreach ($users as $key => $user) {
    if (count($user["orders"]) > 0) {
        echo "<br>" . $user["name"] . "<br>";
        echo "Orders: ";
        foreach ($user["orders"] as $value) {
            echo $value . ",";
        }
    }
}
