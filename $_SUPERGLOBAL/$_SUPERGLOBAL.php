<?php
# $_SERVER è una variabile super globale PHP che contiene informazioni su intestazioni, percorsi e posizioni degli script.
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];

# $_REQUEST è una variabile super globale PHP che contiene i dati dei moduli inviati e tutti i dati dei cookie.
$_REQUEST['firstname']

# $_POST contiene un array di variabili ricevute tramite il metodo HTTP POST.
# $_GET contiene un array di variabili ricevute tramite il metodo HTTP GET.
?>