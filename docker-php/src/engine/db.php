<?php

try {
    $db = mysqli_connect('db', 'root', 'root', 'company');
    mysqli_set_charset($db, 'utf8') or die('Wrong decode');
    
    echo 'DB successfully connected';

} catch (mysqli_sql_exception $e) {
    echo 'Caugth: ' . $e->getMessage();
    // mysqli_error();
}