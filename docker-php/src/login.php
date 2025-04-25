<?php
    // session_start();

    define("ADMINPASS", "12345");

   
    if (!empty($_POST['password_access'])) {
        if ($_POST['password_access'] === ADMINPASS) {
           $_SESSION['access'] = true;
           setcookie('access', 'admin', time()+3600*3, '/');
           $_SESSION['errors'] = 'You are authorized!';
        } else {
            $_SESSION['errors'] = 'Pass is not correct!';
        }
    }

    if(isset($_COOKIE['access'])) {
        $_SESSION['access'] = true;
        $_SESSION['errors'] = 'You are authorized!';
    }

    if (isset($_GET['logout']) && $_GET['logout'] === "1") {
        session_unset();
        setcookie('access', 'admin', time()-3600, '/');
        header("Location: index.php");
        exit;
    }

    if (isset($_SESSION['access'])) {
        echo $_SESSION['errors'];
        echo '<a href="index.php?logout=1">Logout</a>';
    } else 
    if(isset($_SESSION['errors'])) {
        echo $_SESSION['errors'];
    } 
    else 
    {
         ?>

<form action="" method="POST">
    <input type="password" name="password_access" placeholder="Enter pass"/>
<button>Login</button>
</form>

  <?php  } ?>

 

   