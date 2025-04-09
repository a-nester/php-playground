<!-- Створення .php файлу

mkdir php-playground && cd php-playground
touch index.php
Запуск коду: В терміналі:

touch index.php -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $name = 'Oleh';
    $age = 28;
    $height = 1.82;
    $isAdmin = true;
    $nothing = null;

    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "Height: $height m <br>";
    echo "Admin? " . ($isAdmin ? 'Yes' : 'No') . "<br>";
    echo "Nothing: $nothing <br>";

    $a = 10;
    $b = 3;
    $sum = $a + $b;
    $diff = $a - $b;
    $mult = $a * $b;
    $div = $a / $b;
    $mod = $a % $b;

    echo "<br>Suma: $sum, Difference: $mult, Multiplication: $mult, Divide: $div, Rest: $mod<br>";

    $greeting = "Hello, " . $name . "!";
    echo $greeting;


    $city = 'Rivne';
    $country = 'Ukraine';
    $year = 2025;
    $isStudent = true;

    echo "<br> Hello from " . $city  . " , " . $country . " !  Study? " . ($isStudent ? "Yes" : "No") . "<br>";


    $width = 20;
    $height = 30;

    echo "Squad: " . $width * $height . " m2 <br>";

    $a = 15;
    $b = 5;
    $c = 20;

    $d = ($a + $b + $c) / 3;

    echo "Середнє арифметичне: $d <br> ";

    echo gettype($city) . "<br>";
    echo gettype($country) . "<br>";
    echo gettype($year) . "<br>";
    echo gettype($isStudent) . "<br>";

    $isEmpty = empty($city);
    echo ($isEmpty ? "Yes" : "No") . "<br>";

    $isSet = isset($city);
    echo ($isSet ? "Yes" : "No") . "<br>";

    $age = 21;

    echo ($age > 18 ? "Yes" : "No") . "<br>";

    echo ($b % 2 ? "Не парне" : "парне") . "<br>";

    // error_reporting(-1);
    echo $tytytyt;

    $arr = [10, 20, 30, 40];

    array_push($arr, 50);
    echo count($arr);
    echo "<br>";
    print_r($arr);
    var_dump($arr);

    ?>

</body>

</html>