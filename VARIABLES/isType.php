<?php
    // VERIFICA SE IL CARATTERE è UN INTERO
    $x = 5985;
    is_int($x);

    $x = 59.85;
    var_dump(is_int($x));

    // VERIFICA SE IL CARATTERE è UN FLOAT
    $x = 10.365;
    var_dump(is_float($x));

    // VERIFICA SE è UN NUMERO
    $x = 5985;
    var_dump(is_numeric($x));
?>