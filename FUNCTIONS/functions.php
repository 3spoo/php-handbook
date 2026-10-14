<?php
    // CREARE UNA FUNZIONE
    function myMessage() {
        echo "Hello world!";
    }

    // CHIAMARE UNA FUNZIONE
    myMessage();

    // ARGOMENTI
    function familyName($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
    }
      
      familyName("Hege", "1975");
      familyName("Stale", "1978");
?>