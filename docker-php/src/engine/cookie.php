<?php

setcookie('name', 'Alex');
setcookie('name2', 'Alex', time()+3600);


var_dump($_COOKIE);