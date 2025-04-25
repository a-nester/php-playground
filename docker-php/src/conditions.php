<!-- //php -S localhost:8000 -->
<!-- http://localhost:8000/conditions.php -->

<?php

$score = 79;

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80) {
    echo "Grade:
B";
} elseif ($score >= 70) {
    echo "Grade: C";
} else {
    echo " Grade: F";
}

echo "<br>";

$hour = 14;

if ($hour < 12) {
    echo "Good morning!";
} elseif ($hour < 18) {
    echo "Good afternoon!";
} else {
    echo "Good evening!";
}

echo "<br>";

$isHasTicket = true;
$money = 99;

if ($isHasTicket) {
    echo "Enjoy the movie!";
} else {
    echo ($money >= 100) ? "Buy a ticket" : "Sorry, not enough money.";
}

$a = 1;

switch ($a) {
    case 1:
        echo "a = 1";
        break;
    case 2:
        echo "a = 2";
        break;
    default:
        'else';
        break;
}


for ($i = 1; $i <= 10; $i++) {
    echo "<br>Hello<br>" . $i;
}

$arr = [1, 2, 3, 4];

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>";
}

$i = 1;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}

$arr = [
    "q1" => "3",
    "q2" => "4",
    "q3" => "3"
];

foreach ($arr as $key => $value) {
    echo $key . " has " . $value . "<br>";
}
