<?php

// $_SESSION

session_start();


$_SESSION['myName'] = 'Alex';
$_SESSION['mySettings'] = ['test', 342, true];


// $_SESSION['myName'] = '';

// unset($_SESSION['myName']);
// echo serialize($_SESSION);
session_unset();


var_dump($_SESSION);
