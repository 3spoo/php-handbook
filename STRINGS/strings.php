<?php
    $x = "John";
    echo 'Hello $x';
    
    // LUNGHEZZA DI UNA STRINGA
    echo strlen("Hello world!"); 

    // NUMERO DI PAROLE IN UNA STRINGA
    echo str_word_count("Hello world!");

    // POSIZIONE DI UNA SOTTOSTRINGA SE PRESENTE
    echo strpos("Hello world!", "world");

    // UPPERCASE
    $x = "Hello World!";
    echo strtoupper($x);

    // LOWERCASE
    $x = "Hello World!";
    echo strtolower($x);    

    // SOSTITUIRE UNA SOTTOSTRINGA
    $x = "Hello World!";
    echo str_replace("World", "Dolly", $x);

    // INVERTIRE UNA STRINGA
    $x = "Hello World!";
    echo strrev($x);
    
    // RIMOZIONE DEGLI SPAZI ALL'INIZIO O ALLA FINE DELLA STRINGA
    $x = " Hello World! ";
    echo trim($x);
?>