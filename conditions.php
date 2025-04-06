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
