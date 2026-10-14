<!--
Un cookie viene spesso utilizzato per identificare un utente. Un cookie è un piccolo file che il server memorizza sul computer dell'utente. 
Ogni volta che lo stesso computer richiede una pagina tramite un browser, invierà anche il cookie. 
Con PHP, è possibile sia creare che recuperare i valori dei cookie.
-->

<?php
// RECUPERO DI UN COOKIE/CREAZIONE
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])) 
            {
                echo "Cookie named '" . $cookie_name . "' is not set!";
            } else 
            {
                echo "Cookie '" . $cookie_name . "' is set!<br>";
                echo "Value is: " . $_COOKIE[$cookie_name];
            }
        ?>
    </body>
</html>


<?php
// MODIFICA DEL VALORE DI UN COOKIE
    $cookie_name = "user";
    $cookie_value = "Alex Porter";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])) 
            {
                echo "Cookie named '" . $cookie_name . "' is not set!";
            } 
            else 
            {
                echo "Cookie '" . $cookie_name . "' is set!<br>";
                echo "Value is: " . $_COOKIE[$cookie_name];
            }
        ?>
    </body>
</html>


<?php
// ELIMINA UN COOKIE DI DATA 1H
    setcookie("user", "", time() - 3600);
?>
<html>
    <body>
        <?php
            echo "Cookie 'user' is deleted.";
        ?>
    </body>
</html>


<?php
// CONTROLLA SE I COOKIE SONO ABILITATI
    setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
    <body>

        <?php
            if(count($_COOKIE) > 0) 
            {
                echo "Cookies are enabled.";
            } else 
            {
                echo "Cookies are disabled.";
            }
        ?>

    </body>
</html>