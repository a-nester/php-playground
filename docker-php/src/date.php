<?php

echo date("Y-m-d H:m:s", time());

echo "<br>";
echo date("Y-m-d H:m:s", time() - 60 * 60 * 24);
echo "<br>";



echo time(); // поточний час в секундах
echo "<br>";

echo "<br>";

echo date_default_timezone_get();
echo "<br>";

date_default_timezone_set('Europe/Kyiv');
echo "<br>";
echo date("Y-m-d H:m:s", time()) . "<br>";
echo "<br>";


echo microtime(true); // gпоточний час в мілісекундах
echo "<br>";
