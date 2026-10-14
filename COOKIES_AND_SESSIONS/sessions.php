<!--
Una sessione è un modo per memorizzare informazioni (in variabili) da utilizzare su più pagine.
A differenza di un cookie, le informazioni non vengono memorizzate sul computer dell'utente.
-->

<?php
// AVVIA UNA SESSIONE
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            // Set session variables
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "Session variables are set.";
        ?>
    </body>
</html>


<?php
// OTTIENI I VALORI DI UNA SESSIONE
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            // Echo session variables that were set on previous page
            echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
            echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        ?>
    </body>
</html>


<?php
// MODIFICA UNA VARIABILE DI SESSIONE
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            // to change a session variable, just overwrite it
            $_SESSION["favcolor"] = "yellow";
            print_r($_SESSION);
        ?>
    </body>
</html>


<?php
    // DISTRUGGI UNA SESSIONE
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();
        ?>
    </body>
</html>