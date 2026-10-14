<?php
    // CONVERTIRE UNA STRINGA IN UN ARRAY
    $x = "Hello World!";
    $y = explode(" ", $x);
    print_r($y);

    // TAGLIO DELLA STRINGA DAL SESTO CARATTERE ALL'UNDICESIMO
    $x = "Hello World!";
    echo substr($x, 6, 5);

    // TAGLIO DELLA STRINGA DAL SESTO CARATTERE IN POI
    $x = "Hello World!";
    echo substr($x, 6);

?>