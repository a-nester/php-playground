<?php

$age = 66;

switch ($age) {
    case $age < 18:
        echo "<br>" . $age . " - Teenager";
        break;
    case $age <= 65:
        echo "<br>" . $age . " - Adult";
        break;
    default:
        echo "<br>" . $age . " - Senior";
        break;
}

$n = 7;
$a = 1;

while ($a <= 10) {
    echo "<br>" . $n . " * " . $a . " = " . $n * $a;
    $a++;
}

$i = 1;
$sum = 0;

while ($i <= 100) {
    if (($i % 2) === 0) {
        $i++;
        continue;
    }
    $sum += $i;
    $i++;
}

echo "<br>" . $sum;




for ($i = 1; $i <= 50; $i++) {
    if (($i & 3 === 0) && ($i % 5 === 0)) {
        echo "<br>Fizz+Buzz";
    } elseif ($i % 3 === 0) {
        echo "<br>Fizz";
    } elseif ($i % 5 === 0) {
        echo "<br>Buzz";
    } else {
        echo $i;
    }
}

$numbers = [5, 9, 3, 7, 2, 8];
$res = null;
foreach ($numbers as $value) {
    if ($res === null || $value < $res) {
        $res = $value;
    }
}

echo $res;
