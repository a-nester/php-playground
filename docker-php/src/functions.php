<?php

function multiply($a, $b)
{
    return $a * $b;
}

echo multiply(3, 5) . "<br>";

function is_Adult($age)
{
    return ($age >= 18);
}

var_dump((bool) is_Adult(19));

function average($arr)
{
    return array_sum($arr) / count($arr);
};


echo "<br> " . average([3, 5, 7]) . "<br>";

function getUserInfo(array $user)
{
    return "Name: {$user["name"]}, Age: {$user["age"]}, Email: {$user["email"]}";
};

echo getUserInfo(
    ["name" => "Alex", "age" => "25", "email" => "alex@g.com"]
    // "string"
);


echo "<br>";

function calculateOrder(array $products, int $discount)
{
    $sum = 0;
    foreach ($products as $product) {
        $sum += $product["price"];
    };
    $totalSum = $sum / 100 * (100 - $discount);

    return "Total sum: {$sum}UAH. With discount {$discount}%: {$totalSum}UAH";
}

echo calculateOrder([
    ["title" => "Compressor", "price" => 100],
    ["title" => "Filter", "price" => 80],
    ["title" => "Oil", "price" => 120],
], 10);


$products = [
    ["title" => "Compressor", "price" => 100],
    ["title" => "Filter", "price" => 80],
    ["title" => "Oil", "price" => 120],
    ["title" => "Wrench", "price" => 50],
];

function filterByPrice($products, $maxPrice)
{
    $filteredProducts = [];
    foreach ($products as $product) {
        if (
            $product["price"] <= $maxPrice
            // ($product["price"] <= $maxPrice) && ($product["quantity"] > 0)
        ) {
            $filteredProducts[] =  $product;
            // $filteredProducts[] = $product["title"];
        }
    };
    return $filteredProducts;
}



$filtered = filterByPrice($products, 100);
print_r($filtered);


$filtered = array_filter($products, function ($product) {
    return $product["price"] <= 100;
});

$titles = array_map(function ($filter) {
    return $filter["title"];
}, $filtered);

print_r($titles);
