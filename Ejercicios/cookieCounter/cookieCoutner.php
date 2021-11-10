
    <?php

    if (isset($_COOKIE['countCookie'])) {
        $cookie = ++$_COOKIE['countCookie'];
        setcookie("countCookie", $cookie);
        echo "Has visitado esta pagina " .  $_COOKIE['countCookie']  . " veces.";
    } else {
        echo "Es la primera vez que entras a la pagina";
        setcookie("countCookie", 1);
    }

    ?>
